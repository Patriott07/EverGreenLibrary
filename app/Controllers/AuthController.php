<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Auth_lib;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use CodeIgniter\Cookie\Cookie;
use CodeIgniter\Cookie\CookieStore;


// $validation = \Config\Services::validation();
class AuthController extends BaseController
{
    public $lib_auth, $db, $time;

    public function __construct()
    {
        // init
        $this->lib_auth = new Auth_lib();
        $this->db = \Config\Database::connect(); // Mendapatkan koneksi database
        $this->time = new Time('now', 'Asia/Jakarta', 'id_ID'); //time
        helper('form');
        helper('cookie');
    }

    public function index()
    {
        $pass = 'password123';
        dd($this->lib_auth->textToHash($pass));
        $hash = $this->lib_auth->textToHash($pass);
        dd($this->lib_auth->hashToText($hash));
        // dd(textToHash());
    }

    public function loginpage()
    {
        if(session()->has('suc')){
            $suc = session()->getFlashdata('suc');
            return view('Loginpage', ['auth_lib' => $this->lib_auth, 'suc' => $suc]);
        }
        if(session()->has('err')){
            $err = session()->getFlashdata('err');
            return view('Loginpage', ['auth_lib' => $this->lib_auth, 'err' => [$err], 'input' => session()->get('input')]);
        }
        return view('Loginpage', ['auth_lib' => $this->lib_auth ]);
    }

    public function registrasipage()
    {
        return view('Regispage');
    }

    public function dashboardAdminPage()
    {
        if(session()->has('suc')){
            return view('Dashboard-admin', ['suc' => session()->getFlashdata('suc')]);
        }
        return view('Dashboard-admin');
    }
    public function dashboardUserPage($username)
    {
        if(session()->has('suc')){
            return view('Dashboard-user', ['suc' => session()->getFlashdata('suc')]);
        }
        return view('Dashboard-user');
    }

    public function login()
    {
        $request = $this->request->getPost();

        // kirim field input ke middleware untuk diproses cookie
        session()->set('input', $request);

        $user = new Users();
        $auth = $user->where('email', $request['email'])->where('password', $this->lib_auth->textToHash($request['password']))->first();
        if(!$auth){
            return redirect()->with('err', 'Tidak dapat menemukan akun anda. Try again')->to('/signin');
        }
        session()->set('auth', $auth);

        if($auth['role_id'] == 1){
            return redirect()->with('suc', 'Halo admin selamat datang! ' . $auth['name'])->to('/admin/dashboard');
        }
        else if($auth['role_id'] == 2){
            // dd('user');
            $name = strtolower(str_replace(' ','-',$auth['name']));
            return redirect()->with('suc', 'Halo selamat datang! ' . $auth['name'])->to('/'.$name.'/dashboard');
        }

        // return redirect()->with('suc', 'Hii nice to meet you, ' . $auth['name'])->to('/admin/dashboard');
    }

    public function logout()
    {
        session()->remove('auth');
        return redirect()->with('suc', 'Logout success, byee')->to('/signin');
    }

    public function register()
    {

        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|',
            'confirmpassword' => 'required|matches[password]'
        ];

        $message = [
            'name' => [
                'required' => 'Isi nama anda.'
            ],
            'email' => [
                'is_unique' => 'email dengan nama {value} sudah digunakan'
            ],
            'password' => [
                'min_length' => 'Masukan password minimal 8 character'
            ]
        ];

        $request = $this->request->getPost();

        // Validasi
        if (!$this->validateData($request, $rules, $message)) {
            return view('Regispage', [
                'err' => $this->validator->getErrors(),
                'input' => $request
            ]);
        }

        $request['password'] = $this->lib_auth->textToHash($request['password']);

        // get date
        $date = $this->time->toDateString('Y-m-d');
        $request['created_at'] = $date;
        $request['role_id'] = 2;

        $user = new Users();
        $insert = $user->insert($request, false);
        if ($insert) {
            // Handle jika sukses
            return view('Loginpage', [
                'auth_lib' => $this->lib_auth,
                'suc' => 'Youre account has created! Lets try now ',
            ]);
        }
    }

    public function debugCo()
    {
    
    //    $this->lib_auth->set_cookie('email', 'superadmin@gmail.com', 3);
    //    $this->lib_auth->set_cookie('password', 'superadmin@gmail.com', 3);
    // //    $email = str_replace('%40', '@', $this->lib_auth->get_cookie('email'));
    // //    dd($email); 
    //  // Mendapatkan semua cookie

    
    // dd($this->lib_auth->getAll_cookie(['email', 'password', 'testyanggada']));
    
        
    }
}
