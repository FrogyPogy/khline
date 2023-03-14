<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\posts;
use App\Models\Answer;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/admin_dashboard');
    }
    public function anggota(){
        //Get all users where not admin
        $agt = User::whereIn('roles', ['jft','st'])->get();
        return view('admin/admin_anggota',[
            "judul" => "Anggota",
            "anggota" => $agt
        ]);
    }
    
    public function kirimPertanyaan(posts $id){
        $jft = User::where('roles', 'jft')->get();
        return view('admin/admin_teruskan',[
            "jft" => $jft,
            "post" => $id
        ]);
    }

    public function store(Request $request){
        $user = User::findorfail($request->user_id);
        $user->update(['status' => 'menjawab']);

        $answer = new Answer;
        $answer->posts_id = $request->post_id;
        $answer->user_id = $request->user_id; 
        $answer->save();

        //Send session for notification success register
        $request->session()->flash('success', 'Pertanyaan berhasil dikirim');

        return redirect('pertanyaan');
    }

    public function laporan(){
        return view('admin/admin_laporan');
    }

    public function editUser(User $id){
        return view('admin/admin_edit',[
            "user" => $id
        ]);
    }

    public function updateUser(Request $request, $id){
        $user = User::findorfail($id);
        $user->update($request->all());

        return redirect('anggota');
    }

}
