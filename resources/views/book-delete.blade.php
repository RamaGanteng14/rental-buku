@extends('layouts.mainlayout')
@section('title','Delete Book')
@section('content')
<H2>Are you sure to delete book {{$book->title}}</H2>
<div class="mt-5">
    <a href="/book-destroy/{{$book->slug}}" class="btn btn-danger me-5">Delete</a>
    <a href="/books" class="btn btn-success">Cancle</a>
</div>
    
@endsection