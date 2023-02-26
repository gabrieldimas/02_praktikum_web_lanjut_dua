<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama : Gabriel Dimas NIM : 2141720181';
    }

    public function articles($id){
        echo "Halaman Artikel dengan Id : $id";
    }
}
