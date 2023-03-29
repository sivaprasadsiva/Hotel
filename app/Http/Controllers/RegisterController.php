<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
            'phone' => $request->input('phone'),
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
            'phone' => $request->input('phone'),
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
            // return 'Login Failed';
            return redirect('/')->with('error_msg', 'Inavlid Credentials');
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
        $post->no_booking_day = $request->input('no_booking_day');
        $post->user_id = auth()->id();


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $post->image = $imageName;

        $post->save();
        // Redirect the user to the new post page or some other page
        return redirect('/AdminHome');
    }



    //View the Room For Users

    public function userHome()
    {
        $rooms = Post::select('users.id as uid', 'users.name', 'users.phone', 'posts.*')->join('users', 'users.id', '=', 'posts.user_id')->get();
        // dd($rooms);
        return view('user', compact('rooms'));
    }




    // Booking the Room


    public function book(Request $request)
    {
        $room = Post::select('users.id as uid', 'users.name', 'users.phone', 'posts.*')->join('users', 'users.id', '=', 'posts.user_id')->where('posts.id', $request->id)->first();
        // dd($room);
        return view('room', compact('room'));
    }
    public function booking(Request $request)
    {

        $roomId = $request->input('id');
        $room = Post::find($roomId);
        $book = new Book();
        $book->user_id = $request->input('user_id');
        $book->room_id = $request->input('id');
        $book->name = auth()->user()->name;
        $book->phonenumber = auth()->user()->phone;
        $book->bookingdate = date('Y-m-d', strtotime($request->input('date')));
        $book->nobookingdate = $request->input('nobookingdate');
        $book->save();
        // Redirect the user to the new post page or some other page
        return redirect('user-home')->with('success', 'Booking success!');
    }



    public function booked()
    {

        $books = Book::select('books.*', 'users.name as uname', 'posts.room_name')
            ->leftJoin('users', 'users.id', '=', 'books.user_id')
            ->leftJoin('posts', 'posts.id', '=', 'books.room_id')
            ->where('books.user_id', auth()->user()->id)
            ->get();
        // dd($books);

        return view('BookedRoom', compact('books'));
    }




    //view room list for user

    public function roomlist()
    {
        // return view('adminroomlist');
        $rooms = Post::select('users.id as uid', 'users.name', 'users.phone', 'posts.*')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->where('posts.user_id', auth()->user()->id)
            ->get();
        return view('adminroomlist', compact('rooms'));
    }
}
