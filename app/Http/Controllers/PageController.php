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

    public function pd() 
    {
        $data = array(
            'title' => 'Aparat Desa',
            'jumbotronImage' => 'img/pd.png'
        );
        return view('pages.page')->with($data);
    }

    public function bpd() 
    {
        $data = array(
            'title' => 'BPD',
            'jumbotronImage' => 'img/bpd.png'
        );
        return view('pages.page')->with($data);
    }

    public function lpm() 
    {
        $data = array(
            'title' => 'LPM',
            'jumbotronImage' => 'img/lpm.jpg'
        );
        return view('pages.page')->with($data);
    }

    public function pkk() 
    {
        $data = array(
            'title' => 'PKK',
            'jumbotronImage' => 'img/pkk.jpeg'
        );
        return view('pages.page')->with($data);
    }

    public function kt() 
    {
        $data = array(
            'title' => 'Karang Taruna',
            'jumbotronImage' => 'img/kt.jpg'
        );
        return view('pages.page')->with($data);
    }
    
    public function transparansi() 
    {
        $data = array(
            'title' => 'Transparansi',
        );
        return view('pages.page')->with($data);
    }

    public function kontak() 
    {
        $data = array(
            'title' => 'Kontak',
        );
        return view('pages.pagewoj')->with($data);
    }
}
