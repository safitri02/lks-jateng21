<?php

namespace App\Http\Controllers;
use Auth;
// use App\Model\User;
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
            return redirect ('/home');
        } else{
            echo "Maaf username atau password salah";
            return back();
        }
    }

    public function reset()
    {
        return view('auth.reset');
    }

    public function changePassword(Request $req)
    {
        $user = User::all();

            $req->validate([
                'old_password' => 'required|string|max:20',
                'new_password' => 'required|string|max:20',
            ]);

            $auth = Auth()->user();
            if(!Hash::check($req->old_password, $auth->password)){
                echo "Password lama tidak sama";
            }
            $auth->password = bcrypt($req->new_password);
            $auth->save();

            Auth::logout();
            return redirect('/');
    
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
