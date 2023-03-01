@extends('layouts.mainlayout')

@section('title','Dashboard')

    @section('content')

    <h1>Welcome,{{Auth::user()->username}}</h1>

       
           <div class="row my-5">
               <div class="col-lg-4">
                <a style="text-decoration:none" href="/books">
                   <div class="card-data bg-primary">
                       <div class="row">
                           <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                           <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                               <div class="card-desc"style="border: none;">Books</div>
                               <div class="card-count">{{$book_count}}</div>
                           </div>
                       </div>
                   </div>
                </a>
               </div>
               <div class="col-lg-4">
                   <a style="text-decoration:none" href="/categories">
                       <div class="card-data bg-secondary">
                        <div class="row">
                            <div class="col-6"><i class="bi bi-list-task"></i></div>
                            <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                                <div class="card-desc">Categories</div>
                                <div class="card-count">{{$category_count}}</div>
                            </div>
                        </div>
                    </div>
                    </a>
                  
               </div>
               <div class="col-lg-4">
                   <a style="text-decoration:none" href="/users">
                    <div class="card-data bg-success">
                       <div class="row">
                           <div class="col-6"><i class="bi bi-people"></i></div>
                           <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                               <div class="card-desc">Users</div>
                               <div class="card-count">{{$user_count}}</div>
                           </div>
                       </div>
                   </div>
                </a>

               </div>
           </div>
           <div class="mt-5">
               <h2>Rent Log</h2>
               <table class="table">
                   <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th> Book title</th>
                        <th>Rent data</th>
                        <th>Return date</th>
                        <th>Actual Return Date</th>
                        <th>Status</th>
                    </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td colspan="7" style="text-align: center;" >No Data</td>
                       </tr>
                   </tbody>
               </table>
           </div>
    @endsection
