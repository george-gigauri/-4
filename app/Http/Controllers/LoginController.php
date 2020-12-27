<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.my_posts')->with('user', $users);
    }
    public function login()
    {
        return view('user.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->except(['_token']);
        if (Auth::attempt($credentials)) {
//            return Auth::user();
            return redirect()->route('none');
        }
      else {
            abort(403);

        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function register(){
        return view('user.register');
    }
    public function save_user(Request $request)
    {
        $user = new User($request->all());
        request()->validate([
            'name'=>'required|max:10|unique:user',
            'email' => 'required|min:10|max:100',
            'password' => 'required',
        ]);

        $password = $user->password;
        $user->password = $password.bcrypt();
        $user->save();

    }
}
