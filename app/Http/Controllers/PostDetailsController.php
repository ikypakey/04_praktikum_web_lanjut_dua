<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostDetailsController extends Controller
{
    public function postDetail(){
        return view('post-details',[
            'title' => 'Post Detail',
            'posts' => Post::all()
        ]);
    }
}
