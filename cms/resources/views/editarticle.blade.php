@extends('layouts.Master')
@section('title', 'Edit')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Edit</h1>
      <form action="/article/update/{{$article->id}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$article->id}}"></br>
 <div class="form-group">
 <label for="title">Judul</label>
 <input type="text" class="form-control"
required="required" name="title" value="{{$article->title}}"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control"
required="required" name="content" value="{{$article->content}}"></br>
 </div>
 <div class="form-group">
 <label for="image">ImageUrl</label>
 <input type="file" class="form-control"
required="required" name="image" value="{{$article->imageurl}}"></br>
<img width="150px" src="{{asset('storage/'.$article>imageurl)}}">
 </div>
 <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
 </form>
    </div>
  </div>
</section>
@endsection