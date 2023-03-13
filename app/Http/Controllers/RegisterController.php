<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('admin/register',[
            "title" => "register",
            "active" => "active"
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => ['required','min:3','max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', Password::min(8)->letters()->numbers()],
            'jabatan' => ['required'],
            'roles' =>['required']
        ]);

        //Encrypt Data with Bcrypt
        $validatedData['password'] = bcrypt($validatedData['password']); 

        User::create($validatedData);

        //Send session for notification success register
        $request->session()->flash('success', 'Anggota Berhasil Ditambahkan!');

        return redirect('anggota');
    }
}
