<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use App\Models\RentLogsDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookRentController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=',1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();        
        $cart =  session("cart");
        return view('book-rent',[
            'users' => $users, 
            'books' =>$books,
            'cart' =>$cart,
        ]);

        // session()->forget("cart");
    }

    // public function do_tambah_cart($id,$user_id)
    // {
    //     $cart =  session("cart");
    //     $cart = Book::detail_book($id);
    //     $cart["book_id"] = [
    //         "title" => $book->title,
    //         "harga" => $book->harga,
    //         "total" => 1

    //     ];
    //     session(["cart" => $cart]);
    //     return redirect("book-rent");
    // }
    public function do_tambah_data(Request $request)
    {
        $cart =  session("cart");
        $book = Book::findOrFail($request->book_id);
        $cart[$book->id] = [
            "title" => $book->title,
            "harga" => $book->harga,
            "total" => 1

        ];
        session(["cart" => $cart]);
        return redirect('book-rent')->with('status','Rent book Sucessfully');
    }
    public function cart()
    { 
        $cart =  session("cart");
        return view('book-rent',['cart' =>$cart]);
    } 

    public function store(Request $request){

        $cart =  session("cart");
        $user_id = $request->user_id;
        $rent = RentLogs::create([
            'user_id' => $user_id,
            'rent_date' => Carbon::now()->toDateString(),
            'return_date' => Carbon::now()->addDay(7)->toDateString(),
            'total' => $request->grandtotal,
           
        ]);
        foreach($cart as $book_id => $item){

            //merubah status menjadi not available
            $book = Book::findOrFail($book_id);
            $book->update([
                'status' => 'not available'
            ]);
            RentLogsDetail::create([
                'rent_id' => $rent->id,
                'book_id' => $book_id,
            ]);
        }
        
        //mengkosongkan session cart
        session([
            "cart" => null
        ]);
        
    }
    public function do_hapus_data($id)
    {

        $cart = session("cart");
        //menghapus cart berdasarakan id index array
        unset($cart[$id]);
        session(["cart" => $cart]);
        return redirect("book-rent");
        
      
    }    
    
    public function do_tambah_transaksi()
    {
        $cart = session("cart");
        $rent_id = RentLogs::tambah_header_transaksi();

        foreach($cart as $ct => $val){
            $book_id = $ct;
            $total = $val["total"];
            RentLogsDetail::tambah_detail_transaksi($book_id,$rent_id,$total);
        }
    }


    // public function store(Request $request)
    // {
    //     $request['rent_date'] = Carbon::now()->toDateString();
    //     $request['return_date'] = Carbon::now()->addDay(7)->toDateString();

    //     $book = Book::findOrFail($request->book_id)->only('status');
        

    //     if($book['status'] != 'in stock'){
    //         Session::flash('message','Cannot rent, the book not available');
    //         Session::flash('alert-class','alert-danger');
    //         return redirect('book-rent');
    //     }else{
    //         $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)->count();

    //         if($count >= 7){
    //             Session::flash('message','Cannot rent, user has reach limit of book');
    //             Session::flash('alert-class','alert-danger');
    //                 return redirect('book-rent');
    //         }else{
    //             try {
    //                 DB::beginTransaction();
    //                 RentLogs::create($request->all());
    //                 $book = Book::findOrFail($request->book_id);
    //                 $book->status = 'not available';
    //                 $book->save();
    //                 Db::commit();
    
    //                 Session::flash('message','Rent book Success!!');
    //                 Session::flash('alert-class','alert-success');
    //                 return redirect('book-rent');
    
    //             } catch (\Throwable $th) {
    //                DB::rollBack();    
    //             }
    //         }  
    //     } 
    // }

    public function returnBook()
    {
        $users = User::where('id', '!=',1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('return-book',['users' => $users, 'books' => $books]);
    }
    public function saveReturnBook(Request $request)
    {
       //user dan buku yang dipilih untuk direutrn benar, maka berhasil
       //jika user dan buku yag dipilih untuk direturn salah mak muncul error notice
       $rent = RentLogs::where('user_id', $request->user_id)->where('actual_return_date',null);
       $rerntData = $rent->first();
       $countData = $rent->count();

       
       if($countData == 1){
           //return ke book
            $rerntData->actual_return_date = Carbon::now()->toDateString();
            $rerntData->save();
            Session::flash('message','The book is returned successfuly');
            Session::flash('alert-class','alert-success');
            return redirect('book-return');

       }else{
           //erorr notice muncul
           Session::flash('message','There is error in process');
           Session::flash('alert-class','alert-danger');
           return redirect('book-return');

       }
    }
}