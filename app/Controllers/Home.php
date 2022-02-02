<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array(
            "firstName" => "Ridho",
            "lastName"=> "Arrahman",
            "career"=>"programmer",
            "photo"=>"hansohee.jpg",
            "html"=>"85",
            "css" => "87",
            "php" => "60",
            "javascript" => "50",
            "github" => "80",
            "wordpress"=>"40",
            "python"=>"70",
            "description" => "Saya adalah programmer yang memiliki keahlian dalam bidang web developer dan seputar UI design. Saya juga telah menyelesaikan beberapa project dalam bidang tersebut."

        );
        

        echo view('templates/header.php');
        echo view('home/index.php', $data);
        echo view('templates/footer.php');
        // return view('home/index.php');
    }
}
