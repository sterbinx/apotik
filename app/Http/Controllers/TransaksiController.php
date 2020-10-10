<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(){
        $data = DB::table('transaksi_penjualan')
            ->get();

        return view('transaksi.transaksiview', [
        	'apa'  => $data
        ]);
    }

    public function get_ket(Request $request){
        $id = $request->get('id_transaksi');     
        $get_edit = DB::table('transaksi_penjualan')
                ->where('id',$id)
                ->get();
        return $get_edit;
    }

    public function viewUpdate(Request $request){
        $id = $request->get('id_transaksi');     
        $get_edit = DB::table('transaksi_penjualan')
                ->where('id_transaksi',$request->id)
                ->get();
        $data = [
            'getedit' => $get_edit
        ];
        return view('transaksi/update_transaksi', $data);
    }
}
