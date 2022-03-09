<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostDetailsController extends Controller
{
    public function postDetail(){
        return view('post-details',[
            'tittle' => 'Post Details Page'
        ]);
    }
}
