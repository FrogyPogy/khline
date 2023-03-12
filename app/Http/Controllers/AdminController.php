<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/admin_dashboard');
    }
    public function anggota(){
        //Get all users where not admin
        $agt = User::where('roles', 'anggota')->get();
        return view('admin/admin_anggota',[
            "judul" => "Anggota",
            "anggota" => $agt
        ]);
    }
    public function pertanyaan(){
        return view('admin/admin_pertanyaan');
    }
    public function laporan(){
        return view('admin/admin_laporan');
    }

}
