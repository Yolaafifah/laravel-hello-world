@extends('layouts.Master')
@section('title', 'Edit User')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Edit</h1>
      <form action="/manageuser/update/{{$user->id}}" method="post">
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$user->id}}"></br>
 <div class="form-group">
 <label for="name">Nama</label>
 <input type="text" class="form-control"
required="required" name="title" value="{{$user->name}}"></br>
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input type="text" class="form-control"
required="required" name="email" value="{{$user->email}}"></br>
 </div>
 <div class="form-group">
 <label for="password">Password</label>
 <input type="text" class="form-control"
required="required" name="password" value="{{$user->password}}"></br>
 </div>
 <div class="form-group">
 <label for="roles">Roles</label>
 <input type="text" class="form-control"
required="required" name="roles" value="{{$user->roles}}"></br>
 </div>
 <div class="form-group">
 <label for="image">ImageUrl</label>
 <input type="file" class="form-control"
required="required" name="image" value="{{$user->imageurl}}"></br>
<img width="150px" src="{{asset('storage/'.$user>)}}">
 </div>
 <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data User</button>
 </form>
    </div>
  </div>
</section>
@endsection