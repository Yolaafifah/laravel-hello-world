@extends('layouts.Master')
@section('title', 'Kelola Data User')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Kelola Data User</h1>
      

      <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th >ID</th>
 <th >Nama</th>
 <th>Email</th>
 <th>Password</th>
 <th >Roles</th>
 <th >ImageUrl</th>
 <th >Kelola</th>
 </tr>
 </thead>
 <tbody>
 @foreach($user as $a)
 <tr>
 <td>{{$a->id}}</td>
 <td>{{$a->name}}</td>
 <td>{{$a->email}}</td>
 <td>{{$a->password}}</td>
 <td>{{$a->roles}}</td>
 <td>{{$a->imageurl}}</td>
 <td><a href="manageuser/edit/{{ $a->id }}" class="badge badgewarning">Edit</a>
 <a href="manageuser/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a></td>
 </tr>
 
 @endforeach
 </tbody>
</table>
<a href="manageuser/add" class="btn btn-primary">Tambah Data User</a>

    </div>
  </div>
</section>
@endsection