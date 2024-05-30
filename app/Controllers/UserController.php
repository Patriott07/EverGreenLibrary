<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;
use App\Libraries\Auth_lib;


class UserController extends BaseController
{

    public $db, $libAuth;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->libAuth = new Auth_lib();
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

    public function orderPage(){
        $allCateg = $this->db->query('select * from category_book')->getResultArray();
        $auth = session('auth');

         // check is user has checkout some books
         $countOrder = 0;
         $query = $this->db->query("SELECT * from peminjaman WHERE peminjaman.user_id = $auth[id]")->getResultArray();
         if(count($query) > 0){
             foreach($query as $data){
                 if($data['status'] == "Request" || $data['status'] == "Dipinjam" || $data['status'] == 'Kembali'){
                     $countOrder++;
                 }
             }
         }
 
         if($countOrder === 0){
             return redirect()->to("/backpack/dashboard")->with('sessionerror', 'You cant acces backpack page. you have been order book');
         }

        $peminjaman = $this->db->query("SELECT * from peminjaman WHERE peminjaman.user_id = $auth[id] AND (peminjaman.status = 'Request' OR peminjaman.status = 'Dipinjam') ORDER BY id DESC LIMIT 1")->getResultArray();
        
        if(count($peminjaman) > 0){
            $id = $peminjaman[0]['id'];
            $books = $this->db->query("SELECT books.* FROM books, peminjaman, tb_detail_peminjaman WHERE tb_detail_peminjaman.peminjaman_id = peminjaman.id AND tb_detail_peminjaman.book_id = books.id AND tb_detail_peminjaman.peminjaman_id = $id")->getResultArray();
        }else{  
            $books = [];
            // return view('./User/myOrder', ['categ' => $allCateg, 'books' => $books, 'peminjaman' => [], 'user' => $auth]);
            return redirect()->to('/backpack/dashboard');
        }
        return view('./User/myOrder', ['categ' => $allCateg, 'books' => $books, 'peminjaman' => $peminjaman[0], 'user' => $auth]);
    }

    public function backpackPage(){ //edit

        $allCateg = $this->db->query('select * from category_book')->getResultArray();
        $name = session('name');
        $auth = session('auth');

        $date = new DateTime('now');
        $date = date_format($date, 'Y-m-d');

        // check is user has checkout some books
        $countOrder = 0;
        $query = $this->db->query("SELECT * from peminjaman WHERE peminjaman.user_id = $auth[id]")->getResultArray();
        if(count($query) > 0){
            foreach($query as $data){
                if($data['status'] == "Request" || $data['status'] == "Dipinjam"){
                    $countOrder++;
                }
            }
        }

        if($countOrder > 0){
            return redirect()->to("/$name/dashboard")->with('sessionerror', 'You cant acces backpack page. you have been order book');
        }
        
        if(session('backpack') && session('backpack') != null){
            $id_collection = session('backpack');
            $id_in = '';
            
            foreach($id_collection as $i => $id){
                if($i === count($id_collection) - 1){
                    $id_in .= $id;
                }else{
                    $id_in .= $id . ',';
                }
            }
    
            $query = $this->db->query("SELECT books.* FROM books WHERE books.id IN($id_in);")->getResultArray();
            return view('./User/MyBackpack', ['books' => $query, 'date' => $date, 'categ' => $allCateg]);
        }

        return view('./User/MyBackpack', ['books' => [], 'date' => $date, 'categ' => $allCateg]);
    }

    public function deleteBackpackItems($index){
        // $id_collection = session('backpack');
        $items_backpack_old = session('backpack');
        $items_backpack_new = [];
        $id_in = '';
        
        for($i = 0; $i < count($items_backpack_old); $i++){
            if($i != $index){
                $items_backpack_new[] = $items_backpack_old[$i];
            }
        }

        session()->set('backpack', $items_backpack_new);

        // foreach(session('backpack') as $i => $id){
        //     if($i === count(session('backpack')) - 1){
        //         $id_in .= $id;
        //     }else{
        //         $id_in .= $id . ',';
        //     }
        // }

        // $query = $this->db->query("SELECT books.* FROM books WHERE books.id IN($id_in);")->getResultArray();
        // // dd($query); 
        // $date = new DateTime('now');
        // $date = date_format($date, 'Y-m-d');
    
        // return view('./User/MyBackpack', ['books' => $query, 'date' => $date]);

        return redirect()->to('/backpack/dashboard');
    }

    public function checkoutPage(){
        $allCateg = $this->db->query('select * from category_book')->getResultArray();
        $items = session('backpack');
        $name = session('name');
        if(!session()->has('code')){
            return redirect()->to("/$name/dashboard");
        }
        // dd($items);
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

    public function createOrder(){
        $request = $this->request->getPost();
        $auth = session('auth');


        $peminjaman = $this->db->query("INSERT INTO `peminjaman` (`id`, `user_id`, `jumlah_buku`, `tgl_pinjam`, `tgl_kembali`, `batas_waktu`, `code`, `status`, `denda`, `deleted_at`) VALUES (NULL, '$auth[id]', '$request[jumlah_buku]', '$request[tgl_pinjam]', '$request[tgl_kembali]', '7', 'not-confirmed', 'Request', '$request[denda]', NULL)");

        if($peminjaman){
            // dd($request, session('auth'), session('backpack'), $peminjaman);
            $peminjaman_id = $this->db->insertID();

            foreach(session('backpack') as $id){
                $query2 = $this->db->query("INSERT INTO `tb_detail_peminjaman` (`id`, `peminjaman_id`, `book_id`, `deleted_at`) VALUES (NULL, '$peminjaman_id', '$id', NULL)");
            }

            session()->remove('backpack');

            $code = $this->libAuth->textToHash($peminjaman_id);
            session()->set('code', $code);
            $query3 = $this->db->query("UPDATE `peminjaman` SET `code` = '$code' WHERE `peminjaman`.`id` = $peminjaman_id");
        }

        return redirect()->to('/dashboard/checkout');

    }

    public function returnOrder(){
        $request = $this->request->getPost();
        $query = $this->db->query("UPDATE `peminjaman` SET `status` = 'Kembali' WHERE `peminjaman`.`id` = $request[id_peminjaman]");

        if($query){
            return redirect()->to('/my-order/dashboard')->with('returnMessageSucces', 'Peminjaman kamu sudah berstatus Kembali. segera kembalikan buku ke perpustakaan dan tunggu admin mengkonfirmasi pengembalian');
        }
    }

}
