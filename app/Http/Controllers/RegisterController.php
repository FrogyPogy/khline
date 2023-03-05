<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('admin/register',[
            "title" => "register",
            "active" => "active"
        ]);
    }

    public function store(){
        return request()->all();
    }
}
