@extends('layouts.mainlayout')

@section('title','Users')

    @section('content')
       <h1>Approve User List</h1>

       <div class="mt-4 d-flex justify-content-end">
        @if ($user->status == 'inactive')
        <a href="/user-approve/{{$user->slug}}" class="btn btn-info">Appprove User</a>
        @endif
         
          
       </div>
       <div class="mt-5">
        @if (session('status'))
          <div class="alert alert-success">
             {{ session('status') }}
          </div>
       @endif
          <div class="container">
              <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-lable">Username</label>
                        <input type="text" class="form-control" readonly value="{{$user->username}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-lable">Phone</label>
                        <input type="text" class="form-control" readonly value="{{$user->phone}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-lable">Address</label>
                        <textarea name="" id="address" class="form-control" cols="30" rows="2" style="resize: none;">{{$user->address}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-lable">Status</label>
                        <input type="text" class="form-control" readonly value="{{$user->status}}">
                    </div>
                  </div>
              </div>
          </div>
     
       <div class="mt-5">
           <h2>User's Rent Logs</h2>
        <x-rent-log-table  :rentlog='$rent_logs' />
       </div>
    @endsection
