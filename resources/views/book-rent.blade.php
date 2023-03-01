@extends('layouts.mainlayout')

@section('title','Book Rent')

    @section('content')


    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


      <div  class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
          <h1 class="mb-5">Book Rent Form</h1>

            <div class="mt-5">
                @if (session('message'))
                    <div class="alert {{session('alert-class')}}">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

          <form action="book-rent" method="post">
            @csrf
              <div class="mb-3">
                  <label for="user" class="form-lable">User</label>
                  <select name="user_id" id="user" class="form-control inputbox">
                      <option value="">Select User</option>
                      @foreach ($users as $item)
                          <option value="{{ $item->id}}">{{ $item->username}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="mb-3">
                <label for="book" class="form-lable">Book</label>
                <select name="book_id" id="book" class="form-control select-multiple">
                    
                    @foreach ($books as $item)
                    <option value="{{ $item->id}}">
                    
                        @if ($item->status !='not available')
                        {{ $item->book_code }} {{$item->title}}
                        @else
                        
                        @endif

                    </option>
                    
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah" id="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="jumlah">
            </div>
            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
        $(document).ready(function(){
            $('.inputbox').select2();
        });
    </script>
      <>
        $(document).ready(function(){
            $('.select-multiple').select2();
        }); --}}
   
        
    <div>
        <style>
            .qty {
                width: 20%;
                display: inline;
            }
        </style>
        <div class="card-body">
            <div class="form-group row pb-5">
                <form action="cart-tambah" method="post">
                    @csrf
                   
                    
                    <div class="mb-3">
                      <label for="book" class="form-lable">Book</label>
                      <select name="book_id" id="book" class="form-control select-multiple">
                          <option value="">Select Book</option>
                          @foreach ($books as $item)
                          @if ($item->status !='not available')
                          <option value="{{ $item->id}}"> 
                            {{$item->book_code}} {{ $item->title}}
                        </option>
                        @endif
                          @endforeach
                        
                      </select>
                  </div>

                    <div class="col-sm-2">
                       <button type="submit" class="btn btn-success w-100">Submit</button> 
                    </div>
                </form>
            </div>
    
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card-body border-top pb-5 p-0 mt-3">                
                <form action="cart-add" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="user" class="form-lable">User</label>
                        <select name="user_id" id="user" class="form-control inputbox">
                            <option value="">Select User</option>
                            @foreach ($users as $item)
                                <option value="{{ $item->id}}">{{ $item->username}}</option>
                            @endforeach
                        </select>
                        </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Book</th>
                                <th scope="col">Harga</th>
                                <th scope="col" style="width: 200px;" >Total</th>
                                <th scope="col" style="width: 10px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                                $grandtotal=0;
                            @endphp
                            @if($cart != null)
                                @foreach ($cart as $ct => $val)
                                    @php 
                                    $subtotal = $val["harga"]*$val["total"];
                                    @endphp
                                
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$val["title"]}}</td>
                                        <td>{{$val["harga"]}}</td>
                                        <td>{{$subtotal}} </td>
                                    <td>
                                        <a href="{{ url('cart-hapus/'.$ct) }}">Batal</a>
                                    </td>
                                    </tr>
                                    @php 
                                        $grandtotal+= $subtotal;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td colspan="3" class="text-end">Grand Total</td>
                                    <td colspan="2">{{ $grandtotal }}</td>
                                </tr>
                            @endif
                        </tbody>
                    
                    </table>
                    <input type="hidden" name="grandtotal" value="{{ $grandtotal }}">
                    <button type="submit" class="btn btn-success btn-sm float-right">Submit</button>
                </form>
    
            {{-- <tfoot>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align:right;">Total Pembelian</td>
                <td>
                    Rp
                </td>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="text-align:right;">Pembayaran</td>
                    <td style="text-align:right;">
                        <input type="number" wire:model="pembayaran" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="text-align:right;">Kembalian</td>
                    <td style="text-align:left;">
                        Rp 
                    </td>
                </tr>
            </tfoot> --}}
        </div>
    </div>

    @endsection
