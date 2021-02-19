@extends('layouts.Master')
@section('title', 'Kelola Data')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Kelola Data</h1>
      

      <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th >No</th>
 <th >Judul</th>
 <th >Tanggal</th>
 <th >Aksi</th>
 </tr>
 </thead>
 <tbody>
 @foreach($article as $a)
 <tr>
 <td>{{$a->id}}</td>
 <td>{{$a->title}}</td>
 <td>{{$a->created_at}}</td>
 <td><a href="manage/edit/{{ $a->id }}" class="badge badgewarning">Edit</a>
 <a href="manage/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a></td>
 
 </tr>
 
 @endforeach
 </tbody>
</table>
<a href="manage/add" class="btn btn-primary">Tambah Data</a>
<a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>

    </div>
  </div>
</section>
@endsection