<?php

namespace App\Controllers;
use App\Models\Book;
class Home extends BaseController
{

   
    public function index()
    {

        // get the most book liked
        $q1 = $this->db->query('select * from themostpeoplelike3');
        $r1 = $q1->getResult();
        $id_book = null;
        $totalLike = 0;
        foreach($r1 as $data){
            if($data->like > $totalLike){
                $totalLike = $data->like;
                $id_book = $data->id;
            }
        }

        $book_M = new Book();
        $the_most_like = $book_M->find($id_book);

        // get the most book liked || end

        // get team

        $team = [
            [
                'name' => 'Patriot',
                'image' => 'url',
                'role' => 'Front end | Backend',
                'description' => 'loremipsum dolar silt amet. juday oline'
            ],
            [
                'name' => 'Patriot',
                'image' => 'url',
                'role' => 'Front end | Backend',
                'description' => 'loremipsum dolar silt amet. juday oline'
            ],
            [
                'name' => 'Patriot',
                'image' => 'url',
                'role' => 'Front end | Backend',
                'description' => 'loremipsum dolar silt amet. juday oline'
            ],
            [
                'name' => 'Patriot',
                'image' => 'url',
                'role' => 'Front end | Backend',
                'description' => 'loremipsum dolar silt amet. juday oline'
            ],
            [
                'name' => 'Patriot',
                'image' => 'url',
                'role' => 'Front end | Backend',
                'description' => 'loremipsum dolar silt amet. juday oline'
            ],
        ];

        // get team || end

        // get feature

        $feature = [
            [
                'no' => 1,
                'feature' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque incidunt cum voluptatem, nobis voluptatum earum quaerat quam sapiente omnis deserunt?'
            ],
            [
                'no' => 2,
                'feature' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque incidunt cum voluptatem, nobis voluptatum earum quaerat quam sapiente omnis deserunt?'
            ],
            [
                'no' => 3,
                'feature' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque incidunt cum voluptatem, nobis voluptatum earum quaerat quam sapiente omnis deserunt?'
            ],
            [
                'no' => 4,
                'feature' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque incidunt cum voluptatem, nobis voluptatum earum quaerat quam sapiente omnis deserunt?'
            ],
            [
                'no' => 5,
                'feature' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque incidunt cum voluptatem, nobis voluptatum earum quaerat quam sapiente omnis deserunt?'
            ],
        ];

        // get feature || end

        // get feedback library

        $q2 = $this->db->query('SELECT * FROM getfeedbackindex');
        $feedback_library = $q2->getResultArray();

        // get feedback library || end


        return view('welcome_message', ['liked' => $the_most_like, 'team' => $team, 'feature' => $feature, 'feedback' => $feedback_library ]);
    }
}
