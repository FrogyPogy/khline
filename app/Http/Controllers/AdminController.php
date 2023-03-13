<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\posts;

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
