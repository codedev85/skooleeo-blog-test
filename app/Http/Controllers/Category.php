<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as Cat;

class Category extends Controller
{
    public function create(){

        return view('category.create');
    }


    public function store(Request $request){

    
        $category = $request['category'];

        $newCat = new Cat;

        $newCat->category = $category;

        $newCat->save();


        return back()->with('success','Data created successfully!');

       
    }
}
