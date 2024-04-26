<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Book;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;
use App\Libraries\Auth_lib;
use DateInterval;
use DateTimeZone;
use PSpell\Config;

class BooksController extends BaseController
{
    public $authLib, $db;

    public function __construct()
    {
        helper('form');
        helper('session');
        $this->db = \Config\Database::connect(); // get koneksi
        $this->authLib = new Auth_lib();
    }

    public function indexAdm()
    {
        $paramGET = $this->request->getGet();
        $book = new Book();
        $count = count($book->findAll());
   
        if (!empty($paramGET)) {
            if (isset($paramGET['s'])) {
                $q1 = $this->db->query("
                SELECT * FROM books WHERE books.title LIKE '%$paramGET[s]%' OR books.penulis LIKE '%$paramGET[s]%' OR books.publisher LIKE '%$paramGET[s]%' OR books.total_pages LIKE '%$paramGET[s]%' OR books.quantity LIKE '%$paramGET[s]%'
                ")->getResultArray();

                foreach ($q1 as $i => $fCollBook) {
                    $sql1 = "CALL getCategoryBook2($fCollBook[id])";
                    $q2 = $this->db->query($sql1)->getResultArray();

                    $q1[$i]['category'] = $q2;
                }

                $countData = count($q1);

                return view('./Admin_books/index', ['authLib' => $this->authLib, 'data' => $q1, 'count' => $count, 'countData' => $countData]);
            }
            if (isset($paramGET['d'])) {
                $now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
                $batas_hari = date_format($now->sub(new DateInterval("P$paramGET[d]D")), 'Y-m-d h:i:s');
                $sql1 = "select * from books where created_at > '$batas_hari'";

                $book = new Book();
                $q1 = $this->db->query($sql1)->getResultArray();

                foreach ($q1 as $i => $fCollBook) {
                    $sql1 = "CALL getCategoryBook2($fCollBook[id])";
                    $q2 = $this->db->query($sql1)->getResultArray();

                    $q1[$i]['category'] = $q2;
                }

                $countData = count($q1);

                return view('./Admin_books/index', ['authLib' => $this->authLib, 'data' => $q1, 'count' => $count, 'countData' => $countData]);
            }
        }
        $book = new Book();
        $collectionBook = $book->findAll();
        foreach ($collectionBook as $i => $fCollBook) {
            $sql1 = "CALL getCategoryBook2($fCollBook[id])";
            $q1 = $this->db->query($sql1)->getResultArray();

            $collectionBook[$i]['category'] = $q1;
        }

        $countData = count($collectionBook);

        return view('./Admin_books/index', ['authLib' => $this->authLib, 'data' => $collectionBook, 'count' => $count, 'countData' => $countData]);
    }

    public function form()
    {
        $action = $this->request->getGet();
        session()->remove('input');
        session()->remove('url');
        // dd($action);
        if (count($action) < 2) {
            // Jika ingin post
            session()->set('url', '/admin/books');
            return view('./Admin_books/form');
        }

        $book = new Book();
        $document = $book->find($this->authLib->hashToText($action['obji']));
        // dd($document);
        if ($document != null) {
            session()->set('url', '/admin/books/update/' . $document['id']);
            // dd('put', session('url'));
            session()->set('input', $document);
            return view('./Admin_books/form', ['input' => $document]);
        }

        return redirect()->to('/admin/dashboard');
    }

    public function create()
    {
        // dd($this->request->getPost(), $this->request->getFile('image'));
        if (!$this->validate([
            'title' => 'required'
        ])) {
            return redirect()->to('/admin/books/form')->with('err', $this->validator->getErrors())->withInput();
        }

        $file = $this->request->getFile('image');
        $request = $this->request->getPost();
        if ($file->isValid() && !$file->hasMoved()) {
            $now  = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
            // dd($now->format('Y-m-d'));
            $newNameFile = $now->format('Y-m-d') . "-" . str_replace('.', '-',  $file->getClientName()) . "-" . $file->getRandomName();
            // dd($newNameFile);
            $request['image'] = $newNameFile;
            $file->move(FCPATH . 'image/uploaded', $newNameFile);
        }

        $book = new Book();
        $book->insert($request);

        session()->remove('input');
        return redirect()->to('/admin/books')->with('suc', 'Succes creating new document');
    }

    public function update($id)
    {
        $bookM = new Book();
        $request = $this->request->getPost();

        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $now  = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
            $newNameFile = $now->format('Y-m-d') . "-" . str_replace('.', '-',  $file->getClientName()) . "-" . $file->getRandomName();
            $request['image'] = $newNameFile;
            $file->move(FCPATH . 'image/uploaded', $newNameFile);
        }
        // dd($request);
        $bookM->where('id', $id)->set($request)->update();
        session()->remove('input');
        return redirect()->to('/admin/books')->with('suc', 'Succes updating document');
    }


    public function delete()
    {
        $request = $this->request->getPost();
        $book = new Book();
        $book->where('id', $request['id_book'])->delete();

        return redirect()->to('/admin/books')->with('suc', 'Succes deletting document');
    }

    public function deleted()
    {
        $bookM = new Book();
        $book = $bookM->onlyDeleted()->findAll();
        // dd($book);
        return view('./Admin_books/deleted', ['data' => $book]);
    }

    public function forgedelete()
    {
        $request = $this->request->getPost();
        $bookM = new Book();

        $bookM->onlyDeleted()->where('id', $request['id_book'])->purgeDeleted();
        return redirect()->to('./admin/books')->with('suc', 'Succes permanent delete document');
    }
    public function restore()
    {
        $request = $this->request->getPost();
        $bookM = new Book();
        
        $bookM->update($request['id_book'], ['deleted_at' => NULL]);
        return redirect()->to('./admin/books')->with('suc', 'Succes restore deleted document');
    }

    // USER 

    public function detailBook($name, $id, $slug){
        $book = new Book();
        $detailBook = $book->where('id', $id)->findAll();
        $categ = $this->db->query("SELECT category_book.* FROM books, pivot_category, category_book WHERE pivot_category.id_book = books.id AND pivot_category.id_category = category_book.id AND pivot_category.id_book = $id")->getResultArray();

        $disukai = $this->db->query("SELECT COUNT(*) AS 'disukai' FROM books, favorite, users WHERE favorite.user_id = users.id AND favorite.book_id = books.id AND favorite.book_id = $id")->getResultArray();
        $dilihat = $this->db->query("SELECT COUNT(*) AS 'dilihat' FROM tb_detail_peminjaman, books, peminjaman WHERE tb_detail_peminjaman.peminjaman_id = peminjaman.id AND tb_detail_peminjaman.book_id = books.id AND tb_detail_peminjaman.book_id = $id")->getResultArray();
        
        $detailBook[0]['category'] = $categ;
        $detailBook[0]['disukai'] = $disukai[0]['disukai'];
        $detailBook[0]['dilihat'] = $dilihat[0]['dilihat'];
        // dd($id,$detailBook, $categ, $disukai, $dilihat);
        $penulis = $detailBook[0]['penulis'];
        $id_detail = $detailBook[0]['id'];

        $allCateg = $this->db->query('select * from category_book')->getResultArray();
        $fromSamePenulis = $this->db->query("SELECT * FROM books where penulis = '$penulis' AND books.id != '$id_detail'  ORDER BY id DESC LIMIT 3;")->getResultArray();

        // get comment
        $comment = $this->db->query("SELECT users.name, users.image, comment_book.content, comment_book.rating, comment_book.tanggal from users, comment_book, books WHERE comment_book.book_id = books.id AND comment_book.user_id = users.id AND comment_book.book_id = $id_detail")->getResultArray();

        foreach($comment as $key => $data){
            if(($key + 1) % 2 === 0){
                $comment[$key]['keterangan'] = 'genap';
            }else{
                $comment[$key]['keterangan'] = 'ganjil';
            }
        }
        // dd($comment);

        return view('./User/DetailBook', ['book' => $detailBook, 'relate' => $fromSamePenulis, 'categ' => $allCateg, 'comments' => $comment ]);
    }
}
