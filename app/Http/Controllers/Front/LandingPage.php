<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ip;
use App\Blog;

class LandingPage extends Controller
{
    
    public function index(){


        //get users IP 
        $ip = $_SERVER["REMOTE_ADDR"];

        //check if the Ip already exists
        
       $checkIp = Ip::where('users_ip',$ip)->first();


        if(!$checkIp){

            $storeUserIp = new Ip();

            $storeUserIp->users_ip = $ip;

            $storeUserIp->save();

        }

     $blogs = Blog::orderBy('created_at','desc')->get();
    
      
        return  view('welcome' , compact('blogs'));
    }
}
