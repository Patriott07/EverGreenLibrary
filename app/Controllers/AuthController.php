<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Auth_lib;
use App\Models\Users;
use CodeIgniter\I18n\Time;


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
    }

    public function index()
    {
        $pass = 'password123';
        dd($this->lib_auth->textToHash($pass));
        $hash = $this->lib_auth->textToHash($pass);
        dd($this->lib_auth->hashToText($hash));
        // dd(textToHash());
    }

    public function loginpage(){
        return view('Loginpage');
    }

    public function registrasipage()
    {
        return view('Regispage');
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
        $request['role_id'] = 1;

        // dd($request, $this->time, $date);
        $user = new Users();
        $insert = $user->insert($request, false);
        if($insert){
            // Handle jika sukses
            return view('Loginpage', [
                'suc' => 'Youre account has created! Lets try now ',
            ]);
        }


        

    }
}
