<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }


    public function registerform(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'status' => $request->input('status', 0)
            // sets the default value for "status" column to 0 for Users
        ];

        DB::table('users')->insert($data);


        return redirect('/')->with('success', 'Form submitted successfully!');
    }


    public function Adminregister()
    {
        return view('Admin');
    }

    public function Adminregisterform(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'status' => $request->input('status', 1)
            // sets the default value for "status" column to 1 for House Owners
        ];

        DB::table('users')->insert($data);

        return redirect('/')->with('success', 'Form submitted successfully!');
    }

    public function loginForm(Request $request)
    {
        $credentials = $request->only('email', 'password');



        if (Auth::attempt($credentials)) {
            return redirect('home');
        } else {
            return 'Login Failed';
        }
    }

    public function home()
    {
        if (auth()->user()->status == 0) {
            return redirect('/user-home');
        } else {
            return redirect('/AdminHome');
        }
    }

    public function adminHome()
    {
        return view('Adminhome');
    }

    public function userHome()
    {
        return view('user');
    }

    public function createPostView()
    {
        return view('Addroom');
    }


    public function createPost(Request $request)
    {
        $post = new Post();
        $post->room_name = $request->input('room_name');
        $post->rent_amount = $request->input('rent_amount');
        $post->room_desc = $request->input('room_desc');
        $post->no_min_day = $request->input('no_min_day');
        $post->no_max_day = $request->input('no_max_day');
        $post->user_id = auth()->id();
        $post->save();

        // Redirect the user to the new post page or some other page
        return redirect('/AdminHome');
    }
}
