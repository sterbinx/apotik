<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(){
        $detail=DB::table('detail_transaksi')
        ->join('transaksi_penjualan','transaksi_penjualan.id_transaksi','=','detail_transaksi.id_transaksi')
        ->get();
        $data = DB::table('transaksi_penjualan')
            ->get();

        return view('transaksi.transaksiview', [
            'detail' => $detail,
        	'apa'  => $data
        ]);
    }

    public function get_tran(Request $request){
        $id = $request->get('id_detailTransaksi');   
        $get_edit = DB::table('detail_transaksi')
            ->join('transaksi_penjualan','transaksi_penjualan.id_transaksi','=','detail_transaksi.id_transaksi')
            ->where('id',$id)
            ->get();
        return $get_edit;
    }

    public function viewUpdate(Request $request){
        $id = $request->get('id_detailTransaksi');     
        $get_edit = DB::table('detail_transaksi')
                ->where('id_detailTransaksi',$request->id)
                ->get();
        $data = [
            'getedit' => $get_edit
        ];
        return view('transaksi/update_transaksi', $data);
    }
}
