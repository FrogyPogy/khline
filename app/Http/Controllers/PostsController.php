<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\Kategori;
use App\Models\Provinsi;


class PostsController extends Controller
{
    //show all question in class model posts
    public function index(){
        $kategories = Kategori::all();
        $provinsi = Provinsi::all();
        return view('main/posts',[
            "judul" => "Posts",
            "posts" => posts::all(),
            "kategori" => $kategories,
            "provinsi" => $provinsi
        ]);
    }

    public function showPertanyaan(){
        $new = posts::doesntHave('answer')->get();

        return view('admin/admin_pertanyaan',[
            "newpost" => $new
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
        $convert = $request->input_judul;
        $pertanyaan->slug = str_replace(' ','-', strtolower($convert));
        $pertanyaan->penanya = $request->input_nama;
        $pertanyaan->email = $request->input_email;
        $pertanyaan->kategori_id = $request->kategori_id;
        $pertanyaan->pertanyaan = $request->input_pertanyaan;
        $pertanyaan->provinsi_id = $request->provinsi_id;
        $pertanyaan->save();

        return redirect('/home');
    }
}