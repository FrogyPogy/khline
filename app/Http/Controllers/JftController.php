<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Answer;
use Carbon\Carbon;

class JftController extends Controller
{
    public function dashboard(){
        return view('penyuluh/penyuluh_dashboard');
    }
    public function notifikasi(){
        //Mencari Answer yang dimiliki user ini dan

        $current_id = auth()->User()->id ; // returns authenticated user id.
        $pertanyaan = Answer::where('user_id', $current_id)->where('jawaban','kosong')->get();
        return view('penyuluh/penyuluh_notifikasi',[
            "answer" => $pertanyaan
        ]);
    }

    public function store(Request $request){
        $answer = Answer::findorfail($request->answer_id);
        $answer->update([
            'jawaban' => $request->jawaban,
            'answered_at' => Carbon::now()
        ]);

        return redirect('jft_notif');
    }

    public function evaluasi(){
        return view('penyuluh/penyuluh_evaluasi');
    }
    public function laporan(){
        return view('penyuluh/penyuluh_laporan');
    }
}
