<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('main/sign-in',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' =>['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            
            if(Auth::user()->roles == "admin"){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            else if(Auth::user()->roles == "jft"){
                $request->session()->regenerate();

                return redirect()->intended('jft_dash');
            }
            else if(Auth::user()->roles == "st"){
                $request->session()->regenerate();

                return redirect()->intended('st_dash');
            }
            
        }

        return back()->with('loginError', 'email or password not registered');
        

        
    }

    public function signOut(Request $request){
        
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/home');

    }
}
