<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

//    public function stamp()
//    {
//        $age = 21;
//        $age += 5;
//        return view('home',[
//            'age' => $age,
//        ]);
//    }

    public function contact()
    {
        return view('admin.contactUs');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
