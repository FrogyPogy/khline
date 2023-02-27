<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
class PostsController extends Controller
{
    public function index(){
        return view('main/posts',[
            "judul" => "Posts",
            "posts" => posts::all()
        ]);
    }

    // public function showDetail($id){
    //     return view('main/posts',[
    //         "judul" => "Single Posts",
    //         "posts" => posts::find($id)
    //     ]);
    // }

}
