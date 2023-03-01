@extends('layouts.mainlayout')

@section('title','Dashboard')

    @section('content')
       <h1>New Registered User List</h1>

       <div class="mt-4 d-flex justify-content-end">
        
          <a href="/users" class="btn btn-success">Appproved User List</a>
          
       </div>

       <div class="mt-5">
         @if (session('status'))
           <div class="alert alert-success">
              {{ session('status') }}
           </div>
        @endif

       <div class="my-5">
          <table class="table">
             <thead>
                <tr>
                   <th>No</th>
                   <th>Username</th>
                   <th>Address</th>
                   <th>Phone</th>
                   <th>Action</th>
                </tr>
             </thead>
             <tbody>
                 @foreach ($registerredUsers as $item)
                     
                
               <tr>
                   <td>{{$loop->iteration}}</td>
                   <td>{{$item->username}}</td>
                   <td>{{$item->address}}</td>
                   <td>{{$item->phone}}</td>
                  <td>
                      <a href="/user-detail/{{$item->slug}}">Approve</a>
                  </td>
               </tr>
               @endforeach
             </tbody>

          </table>
       </div>
    @endsection
