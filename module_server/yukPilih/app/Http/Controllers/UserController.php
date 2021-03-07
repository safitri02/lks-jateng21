<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use App\Models\User;
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

    public function reset()
    {
        return view('auth.reset');
    }

    public function resetPassword(Request $req)
    {
            $old = $req->old_password;
            $new = $req->new_password;

            if(!Hash::check($old, auth()->user()->password)){
                echo "Password lama tidak sama";
            }

            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($new);
            $user->save();

            Auth::logout();
            echo "Password berhasil direset";
    
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
