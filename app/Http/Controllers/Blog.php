<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Helper\slug;
use App\Blog as Bg;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Ip;
use Auth;
use Alert;


class Blog extends Controller
{
    public function create(){

        $cats = Category::all();

        return view('blog.create', compact('cats'));
    }

    public function store(Request $request){

        $this->validate($request, [
                'img'          => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=300,min_height=300',
                'title'       => 'required',
                'category_id' => 'required|integer',
                'body'        =>  'required',
        ]);


       $slug= $this->createSlug($request->title);

       $image = $request->file('img');
      
       $ext = $image->getClientOriginalExtension();

   
       $image_resize = Image::make($image->getRealPath());
       $resize = Image::make($image_resize)->fit(300, 300)->encode($ext);
       $hash = md5($resize->__toString());
       $path = "{$hash}.$ext";
       $url = 'blog/' . $path;
       Storage::put($url, $resize->__toString());

      
       $storeBlog              = new Bg;
       $storeBlog->title       = $request->title;
       $storeBlog->category_id = $request->category_id;
       $storeBlog->story       = $request->body;
       $storeBlog->slug        = $slug;
       $storeBlog->user_id      = Auth::user()->id;
       $storeBlog->image       = $url;
  
       $storeBlog->save();

 

       return back()->with('success','Data created successfully!');

    }


    public function createSlug($title, $id = 0)
    {
        $slug = str_slug($title);
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        $i = 1;

        $is_contain = true;
        do {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                $is_contain = false;
                return $newSlug;
            }
            $i++;
        } while ($is_contain);

    }



    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Bg::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }


    public function view($id){

        $blog =  Bg::where('id',$id)->first();
        $read_count = $blog->read_count+1;
     
        if($blog){

         $dsds=   Bg::where('id' , $id)->update([
                'read_count' => $read_count,
            ]);
         
        }

    
        return view('single-page',compact('blog'));

    }


    public function ipList(){

        $ips = Ip::get();
        $ipCount = Ip::count();

        return view ('ip' , compact('ips', 'ipCount'));
    }
 
}
