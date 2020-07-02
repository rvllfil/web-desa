<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller 
{
    
    public function home() 
    {
        return view('pages.homepage');
    }

    public function visimisi() 
    {
        $data = array(
            'title' => 'Visi & Misi',
            'jumbotronImage' => 'img/visimisi.jpg'
        );
        return view('pages.page')->with($data);
    }

    public function sejarah() 
    {
        $data = array(
            'title' => 'Sejarah',
            'jumbotronImage' => 'img/sejarah.jpeg'
        );
        return view('pages.page')->with($data);
    }

    public function wilayah() 
    {
        $data = array(
            'title' => 'Wilayah',
        );
        return view('pages.wilayah')->with($data);
    }
}
