@extends('layouts.mainlayout')

@section('title','User')

    @section('content')
       <h1>User List</h1>

       <div class="mt-4 d-flex justify-content-end">
         <a href="/user-benned" class="btn btn-secondary me-3">View Banned User</a>
          <a href="/registerred-user" class="btn btn-success">New  Registerred User</a>
          
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
                @foreach ($users as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->username}}</td>
                  <td>{{$item->address}}</td>
                  <td>
                     @if ($item->phone)
                     {{$item->phone}}
                     @else
                     -
                     @endif
                     </td>
                  <td>
                     
                     <a href="/user-detail/{{$item->slug}}">Detail</a>
                     <a href="/user-ban/{{$item->slug}}">Ban user</a>
                  </td>

               </tr>
                @endforeach
               
             </tbody>

          </table>
       </div>
    @endsection
