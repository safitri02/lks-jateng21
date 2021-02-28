<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function store(Request $req)
    {
        // return $req;
        $user = $req->input('username');
        $pw = $req->input('password');

        $auth = Auth::attempt(['username' => $user, 'password' => $pw]);
        if($auth){
            return redirect('/home');
        } else{
            echo "Maaf username atau password salah";
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
