<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //home
    public function home()
    {
        return view('welcome');
    }
    //login
    public function signupForm()
    {
        return view('signup');
    }
    public function loginForm()
    {
        return view('login');
    }
    //create new user
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
        ]);
        return redirect(route('home'));
    }
    //login user
    public function login(Request $request)
    {
        $user = User::where('mobile', $request->mobile)->first();
        if (Auth::attempt(['mobile' => $user->mobile, 'password' => $request->password])) {
            return redirect(route('post'));
        } else {
            return 'Invalid User';
        }
    }
    //post list
    public function postList()
    {
        $post = Post::with('users')->get();
        return view('post', compact('post'));
    }
    //post delete
    public function postDelete($id)
    {
        Post::find($id)->delete();
        return back();
    }
}
