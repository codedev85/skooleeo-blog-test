@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('home')}}">
<button class="btn btn-success">Back Home</button>
</a>
<br><br>
    <div class="row justify-content-center">

        <div class="col-md-12">
    <form method="POST" action="{{url('store/blog')}}" enctype="multipart/form-data">
       @csrf
         <div class="form-group">

           <label>Title</label>
           <input type="text" name="title" class="form-control" value="{{old('title')}}"/>
          <div class="text-danger">{{$errors->first('title')}}</div>
        </div>

        <div class="form-group">

            <label>Select category</label>
            <select class="form-control" name="category_id">
            <option value="">Select Category</option>
                @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->category}}</ption>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('category_id')}}</div>
        </div>

        <div class="form-group">

           <label>Upload Image</label>
           <input type="file" name="img" class="form-control"/>
           <div class="text-danger">{{$errors->first('img')}}</div>

        </div>

        <div class="form-group">

           <label>Body</label>

           <textarea class="form-control" name="body" rows="15">{{old('body')}}</textarea>
           <div class="text-danger">{{$errors->first('title')}}</div>

        </div>

        <button class="btn btn-success">Submit Blog</button>
    </form>
         
       </div>
</div>
@endsection
