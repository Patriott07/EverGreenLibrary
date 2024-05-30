<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class PeminjamanController extends BaseController
{
    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        if(session('auth')['role_id']  == 2){ //mencegah agar user tidak masuk admin
            return redirect()->to('/signin');
        }
      
        // request orders
        $peminjaman = $this->db->query("SELECT peminjaman.*, users.name FROM peminjaman, users WHERE peminjaman.user_id = users.id AND peminjaman.status = 'Request' ORDER BY peminjaman.id DESC")->getResultArray();
        $requestOrder = [];

        if(count($peminjaman) > 0){
            foreach($peminjaman as $data){


                $query = $this->db->query("SELECT books.title FROM tb_detail_peminjaman, books WHERE tb_detail_peminjaman.book_id = books.id AND tb_detail_peminjaman.peminjaman_id = $data[id]")->getResultArray();
                $title = '';

                // dd('aman', $query, $data['id']);
                foreach($query as $q1){
                    $title .= $q1['title'] . ' | ';
                }

                $data['title_book'] = $title != '' ? $title : 'cant defined';

                $requestOrder[] = $data;
            }
        }

        // accept returns
        $peminjaman2 = $this->db->query("SELECT peminjaman.*, users.name FROM peminjaman, users WHERE peminjaman.user_id = users.id AND peminjaman.status = 'Kembali' ORDER BY peminjaman.id DESC")->getResultArray();
        $orderReturn = [];

        if(count($peminjaman2) > 0){
            foreach($peminjaman2 as $data){


                $query = $this->db->query("SELECT books.title FROM tb_detail_peminjaman, books WHERE tb_detail_peminjaman.book_id = books.id AND tb_detail_peminjaman.peminjaman_id = $data[id]")->getResultArray();
                $title = '';

                // dd('aman', $query, $data['id']);
                foreach($query as $q1){
                    $title .= $q1['title'] . ' | ';
                }

                $data['title_book'] = $title != '' ? $title : 'cant defined';

                $orderReturn[] = $data;
            }
        }


        // All of peminjmana

        $peminjaman3 = $this->db->query("SELECT peminjaman.*, users.name FROM peminjaman, users WHERE peminjaman.user_id = users.id AND peminjaman.status = 'Dipinjam' ORDER BY peminjaman.id DESC")->getResultArray();
        $peminjamanAll = [];

        if(count($peminjaman3) > 0){
            foreach($peminjaman3 as $data){


                $query = $this->db->query("SELECT books.title FROM tb_detail_peminjaman, books WHERE tb_detail_peminjaman.book_id = books.id AND tb_detail_peminjaman.peminjaman_id = $data[id]")->getResultArray();
                $title = '';

                // dd('aman', $query, $data['id']);
                foreach($query as $q1){
                    $title .= $q1['title'] . ' | ';
                }

                $data['title_book'] = $title != '' ? $title : 'cant defined';

                $peminjamanAll[] = $data;
            }
        }

        return view('./Admin_peminjaman/index', ['requests' => $requestOrder, 'returns' => $orderReturn, 'peminjaman' => $peminjamanAll]);
    }

    public function acceptOrder(){
        $request = $this->request->getPost();
        // dd($request);
        $id = $request['id_peminjaman'];
        $query = $this->db->query("UPDATE `peminjaman` SET `status` = 'Dipinjam' WHERE `peminjaman`.`id` = $id");
        // dd($query, $id);
        if($query){

            return redirect()->to('/admin/peminjaman');
        }
    }
    
    
    public function acceptReturn(){
        $request = $this->request->getPost();
        $id = $request['id_peminjaman'];
        // dd($request);
        $query = $this->db->query("UPDATE `peminjaman` SET `status` = 'Selesai' WHERE `peminjaman`.`id` = $id");

        if($query){
            return redirect()->to('/admin/peminjaman');
        }
    }
}
