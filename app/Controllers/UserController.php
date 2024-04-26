<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;

class UserController extends BaseController
{

    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function page404()
    {
        // return view('page404');
        return '404 page';
    }

    public function pageProfile(){
        // dd('oke');
        return view('./User/Profile');
    }
    
    public function pageEditProfile(){
        return view('./User/ProfileEdit');
    }

    public function backpackPage(){
        // dd('oke');
        dd(session('backpack'));
        return view('./User/MyBackpack');
    }

    public function checkoutPage(){
        $allCateg = $this->db->query('select * from category_book')->getResultArray();
        $items = session('backpack');
        dd($items);
        return view('./User/CodeCheckout', ['items' => $items, 'categ' => $allCateg]);
    }

    public function likeBook(){
        $user = session('auth');
        $request = $this->request->getPost();

        $this->db->query("INSERT INTO `favorite` (`user_id`, `book_id`, `deleted_at`) VALUES ($user[id], '$request[book_id]', NULL)");

        return redirect()->to("/$user[name]/book/$request[book_id]/succes");
        
    }
    
    public function addSession(){
        $user = session('auth');
        $request = $this->request->getPost();
        
        $backpack = session('backpack');
        $backpack[] = $request['book_id'];


        session()->set('backpack', $backpack);

        return redirect()->to("/$user[name]/book/$request[book_id]/succes");
    }

    public function sendComment(){
        $user = session('auth');
        $request = $this->request->getPost();
        $now = date_format(new DateTime('now'), 'Y-m-d');
        // dd($request);

        $this->db->query("INSERT INTO `comment_book` (`id`, `book_id`, `user_id`, `tanggal`, `content`, `rating`, `deleted_at`) VALUES (NULL, '$request[book_id]', '$user[id]', '$now', '$request[message]', '$request[rating]', NULL)");

        return redirect()->to("/$user[name]/book/$request[book_id]/succes");
    }

}
