<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JftController extends Controller
{
    public function dashboard(){
        return view('penyuluh/penyuluh_dashboard');
    }
    public function notifikasi(){
        return view('penyuluh/penyuluh_notifikasi');
    }
    public function evaluasi(){
        return view('penyuluh/penyuluh_evaluasi');
    }
    public function laporan(){
        return view('penyuluh/penyuluh_laporan');
    }
}
