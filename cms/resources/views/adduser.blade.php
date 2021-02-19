@extends('layouts.Master')
@section('title', 'Add User')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Add User</h1>
      <form action="/manageuser/create" method="post" enctype="multipart/form-data">
 @csrf
 <div class="form-group">
 <label for="name">Nama</label>
 <input type="text" class="form-control"
required="required" name="name"></br>
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input type="text" class="form-control"
required="required" name="email"></br>
 </div>
 <div class="form-group">
 <label for="password">Passsword</label>
 <input type="text" class="form-control"
required="required" name="password"></br>
 </div>
 <div class="form-group">
 <label for="roles">Roles</label>
 <input type="text" class="form-control"
required="required" name="roles"></br>
 </div>
 <div class="form-group">
 <label for="imageurl">Feature Image</label>
 <input type="file" class="form-control"
required="required" name="image"></br>
 </div>
 <button type="submit" name="add" class="btn btn-primary float-right">Add User</button>
 </form>

    </div>
  </div>
</section>
@endsection