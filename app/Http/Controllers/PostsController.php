<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
class PostsController extends Controller
{
    //show all question in class model posts
    public function index(){
        return view('main/posts',[
            "judul" => "Posts",
            "posts" => posts::all()
        ]);
    }
    public function showAnswer(posts $post){
        return view('main/answer',[
            "judul" => "Single Post",
            "posted" => $post
        ]);
    }

}
