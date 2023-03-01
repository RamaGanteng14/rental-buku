@extends('layouts.mainlayout')

@section('title','Rent Log list')

    @section('content')
      <h1>Rent Log List</h1>
      
      <form action="order" method="get">
        <div class="input-group mb-3 col-md-4 float-right">
            <input type="date" id="start_date" name="start_date" class="form-control" value="{{ request('start_date') }}">
            <input type="date" id="end_date" name="end_date" class="form-control" value="{{ request('end_date') }}">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">Filter</button>
            </div>
            <a href="{{ url('order-pdf?start_date='.request('start_date').'&end_date='.request('end_date')) }}" target="_blank" class="btn btn-primary ml-2" id="exportpdf">Export PDF</a>
        </div>
    </form>

      <div class="mt-5">
        {{-- <x-rent-log-table  :rentlog='$rent_logs' /> --}}
        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>User</th>
              <th>Book</th>
              <th>Rent Date</th>
              <th>Return Date</th>
              <th>Actual Return Date</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($rent_logs as $item)
            <tr class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ? 'bg-warning':'') }}">
              <td>{{ $loop->iteration}}</td>
              <td>{{ $item->user->username}}</td>
              <td>
                @foreach ($item->details as $detail)
                  {{ $detail->book->title }}
                  <br>
                @endforeach
              </td>  
              <td>{{ $item->rent_date}}</td>
              <td>{{ $item->return_date}}</td>
              <td>{{ $item->actual_return_date}}</td>
              <td>{{ $item->total}}</td>
            </tr>
            @endforeach
           
          </tbody>
        </table> 
      

      </div>
    @endsection
