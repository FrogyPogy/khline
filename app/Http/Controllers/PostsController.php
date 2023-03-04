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
    
    public function store(Request $request){
        $pertanyaan = new posts;
        $pertanyaan->judul = $request->input_judul;
        $pertanyaan->slug = $request->input_slug;
        $pertanyaan->penanya = $request->input_nama;
        $pertanyaan->email = $request->input_email;
        $pertanyaan->kategori = $request->kategori;
        $pertanyaan->pertanyaan = $request->input_pertanyaan;
        $pertanyaan->kode_provinsi = $request->input_provinsi;
        $pertanyaan->save();

        return redirect('/home');
    }
}