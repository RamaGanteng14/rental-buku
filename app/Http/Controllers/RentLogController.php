<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use App\Models\RentLogsDetail;


class RentLogController extends Controller
{
    public function index()
    {
        $rentlogs = RentLogs::all();
        // dd($rentlogs->first()->book->title);
        return view('rent_log',['rent_logs' => $rentlogs]);
    }
    public function cetakForm()
    {
        return view('cetak-form');
    }
    public function orderReport()
    {
       
        $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');
    
        if (request()->start_date != '' && request()->end_date != '') {
            $start = Carbon::parse(request()->start_date)->format('Y-m-d') . ' 00:00:01';
            $end = Carbon::parse(request()->end_date)->format('Y-m-d') . ' 23:59:59';
        }
    
        //BUAT QUERY KE DB MENGGUNAKAN WHEREBETWEEN DARI TANGGAL FILTER
        $orders = RentLogsDetail::with(['rent','book'])->whereBetween('created_at', [$start, $end])->get();
        //KEMUDIAN LOAD VIEW
    
        return view('rent_log',['rent_logs' => $orders]);
    }

    public function orderReportPdf()
{
   
    //KEMUDIAN BUAT QUERY BERDASARKAN RANGE CREATED_AT YANG TELAH DITETAPKAN RANGENYA DARI $START KE $END
    $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        //DAN ENDOFMONTH UNTUK MENGAMBIL TANGGAL TERAKHIR DIBULAN YANG BERLAKU SAAT INI
        $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');
    
        //JIKA USER MELAKUKAN FILTER MANUAL, MAKA PARAMETER DATE AKAN TERISI
        if (request()->start_date != '' && request()->end_date != '') {
            
            $start = Carbon::parse(request()->start_date)->format('Y-m-d') . ' 00:00:01';
            $end = Carbon::parse(request()->end_date)->format('Y-m-d') . ' 23:59:59';
        }
    $orders = RentLogsDetail::with(['rent','book'])->whereBetween('created_at', [$start, $end])->get();
    //LOAD VIEW UNTUK PDFNYA DENGAN MENGIRIMKAN DATA DARI HASIL QUERY
    $pdf = PDF::loadView('cetak-form',['orders' => $orders]);
    //GENERATE PDF-NYA
    // return $pdf->stream();
    return $pdf->download('laporan-pdf.pdf');
}
}