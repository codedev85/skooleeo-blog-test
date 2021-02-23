<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
use App\Ip;

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

        if(Auth::user()->role_id == 2){

            $blogs = Blog::where('user_id', Auth::user()->id)->get();
        }
      else{

        $blogs = Blog::all();
      }
        
    

        $ipCount = Ip::count();

        return view('home' , compact('blogs', 'ipCount'));
    }
}
