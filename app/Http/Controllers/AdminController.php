<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/admin_dashboard');
    }
    public function anggota(){
        return view('admin/admin_anggota');
    }
    public function pertanyaan(){
        return view('admin/admin_pertanyaan');
    }
    public function laporan(){
        return view('admin/admin_laporan');
    }

}
