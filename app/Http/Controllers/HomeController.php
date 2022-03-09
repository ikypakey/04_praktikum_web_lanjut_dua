<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        return view('index',[
            'tittle' => 'Beranda',
            'blogs' => Blog::all()
        ]);
    }
}
