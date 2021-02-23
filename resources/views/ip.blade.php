@extends('layouts.app')

@section('content')
<div class="container">

<div class="card col-md-4" >
  
  <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;">
    <h1>{{$ipCount}}</h1>
    <p>Visitor's Count</p>
    <a href="{{url('visitors/count')}}" class="btn btn-primary">Check List Of Ip</a>
  </div>
</div>

<br><br>
<a href="{{url('create/blog')}}">
<button class="btn btn-success">Create Blog</button>
</a>
<a href="{{url('create/category')}}">
<button class="btn btn-alert">Create Blog Category</button>
</a>
<br><br>
    <div class="row justify-content-center">

        <div class="col-md-12">
     

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ip</th>
                        </tr>
                    </thead>
                    <tbody>
                   @foreach($ips as $key => $ip)
                        <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$ip->users_ip}}</td>
                    
                        </tr>
                   @endforeach
                    </tbody>
                    </table>
         
    </div>
</div>
@endsection
