@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('home')}}">
<button class="btn btn-success">Back Home</button>
</a>
<br><br>
    <div class="row justify-content-center">

        <div class="col-md-12">
         <form method="POST" action="{{url('/create/category')}}">
             @csrf
            <div class="form-group">
            <label>Title</label>
            <input type="text" name="category" class="form-control"/>
            <div class="text-danger">{{$errors->first('category')}}</div>
            </div>
        <button class="btn btn-success">Create Category</button>
         </form>
         
       </div>
</div>
@endsection
