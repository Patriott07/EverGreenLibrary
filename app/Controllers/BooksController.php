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

                return view('./Admin_books/index', ['authLib' => $this->authLib, 'data' => $q1]);
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

                return view('./Admin_books/index', ['authLib' => $this->authLib, 'data' => $q1]);
            }
        }
        $book = new Book();
        $collectionBook = $book->findAll();
        foreach ($collectionBook as $i => $fCollBook) {
            $sql1 = "CALL getCategoryBook2($fCollBook[id])";
            $q1 = $this->db->query($sql1)->getResultArray();

            $collectionBook[$i]['category'] = $q1;
        }

        return view('./Admin_books/index', ['authLib' => $this->authLib, 'data' => $collectionBook]);
    }

    public function form()
    {
        $action = $this->request->getGet();
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
            session()->set('url', '/admin/books/' . $document['id']);
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

        return redirect()->to('/admin/books')->with('suc', 'Succes creating new document');
    }

    public function update()
    {
        dd('put method');
    }
}
