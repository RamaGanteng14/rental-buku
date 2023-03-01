@extends('layouts.mainlayout')
@section('title','Delete User')
@section('content')
<H2>Are you sure to delete user {{$user->username}}</H2>
<div class="mt-5">
    <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger me-5">Delete</a>
    <a href="/users" class="btn btn-success">Cancle</a>
</div>
    
@endsection