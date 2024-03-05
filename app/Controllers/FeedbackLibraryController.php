<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FeedbackLibrary;

class FeedbackLibraryController extends BaseController
{

    public function post()
    {
        $request = $this->request->getPost();
        $feedbackObj = new FeedbackLibrary();
        $userAuth = session('auth');

        // dd($userAuth);
        $insert = $feedbackObj->insert([
            'content' => $request['content'],
            'user_id' => $userAuth['id']
        ]);

        if($insert){
            echo "<script>alert('Terimakasih tekah memberi feedback')</script>";
            return redirect()->to('/');
        }
    }
}
