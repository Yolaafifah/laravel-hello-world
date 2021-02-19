@extends('layouts.Master')
@section('title', 'Tambah Data')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Tambah Data</h1>
      <form action="/manage/create" method="post" enctype="multipart/form-data">
 @csrf
 <div class="form-group">
 <label for="title">Judul</label>
 <input type="text" class="form-control"
required="required" name="title"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control"
required="required" name="content"></br>
 </div>
 <div class="form-group">
 <label for="image">Feature Image</label>
 <input type="file" class="form-control"
required="required" name="image"></br>
 </div>
 <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
 </form>

    </div>
  </div>
</section>
@endsection