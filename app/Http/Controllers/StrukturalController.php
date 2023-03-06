<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    public function dashboard(){
        return view('struktural/struktural_dashboard');
    }
    public function notifikasi(){
        return view('struktural/struktural_notifikasi');
    }
    public function evaluasi(){
        return view('struktural/struktural_evaluasi');
    }
    public function laporan(){
        return view('struktural/struktural_laporan');
    }
}
