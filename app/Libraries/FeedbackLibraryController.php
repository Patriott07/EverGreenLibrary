<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FeedbackLibrary;
use App\Libraries\sweetalert_library;

class FeedbackLibraryController extends BaseController
{

    public $sweetalert;

    public function __construct()
    {
        
    }

    public function post()
    {
        $request = $this->request->getPost();
        $feedbackObj = new FeedbackLibrary();
        if(session()->has('auth')){
            $userAuth = session('auth');
            $insert = $feedbackObj->insert([
                'content' => $request['content'],
                'user_id' => $userAuth['id']
            ]);
    
            if($insert){
                // $this->sweetalert->sucAndRedirect('Thanks for giving our geedback', 'Nicee!', )
                return redirect()->with('suc', 'Berhasil memberikan feedback, terimakasih banyak!')->to('/');
            }

        }

        return redirect()->with('err','Request invalid. login first please')->to('/signin');

    }
}
