<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Auth_lib;

class AuthController extends BaseController
{
    public $lib_auth;

    public function __construct()
    {
        // init
        $this->lib_auth = new Auth_lib();
    }

    public function index()
    {
        $pass = 'password123';
        dd($this->lib_auth->textToHash($pass));
        $hash = $this->lib_auth->textToHash($pass);
        dd($this->lib_auth->hashToText($hash));
        // dd(textToHash());
    }

    public function registrasipage(){
        return view('Regispage');
    }
}
