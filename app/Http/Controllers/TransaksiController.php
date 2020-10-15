<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class TransaksiController extends Controller
{
    public function index(){
        $detail=DB::table('detail_transaksi')
            ->join('transaksi_penjualan','transaksi_penjualan.id_transaksi','=','detail_transaksi.id_transaksi')
            ->join('obat', 'obat.kode_obat', '=', 'detail_transaksi.kode_obat')

            ->get();
        $data = DB::table('transaksi_penjualan')
            ->get();

        return view('transaksi.transaksiview', [
            'detail' => $detail,
        	'apa'  => $data,
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

    public function viewAdd(){
        return view('transaksi/add_transaksi');
    }

    public function store(Request $request){
        $insert1 = DB::table('transaksi_penjualan')
            ->insert([
                'id_transaksi' => 'Trx'.random_int(100,999),
                'id_user' => 'Us001',
                'tanggal_transaksi' => date('Y-m-d H:i:s'),
                'total_harga' => $request->input('sub_total'),
                'total_bayar' => $request->input('total_bayar'),
                'kembali' => $request->input('kembalian'),
                'Customer' => '',
                'diskon' => '0'
            ]);
        $lsid = DB::table('transaksi_penjualan')->orderBy('tanggal_transaksi','desc')->first();

        $kdobat = $request->input('kode_obat');
        $hsl = explode("-",$kdobat);

        $insert2 = DB::table('detail_transaksi')
            ->insert([
                'id_detailTransaksi' => 'Trx'.random_int(100,999),
                'kode_obat' => $hsl[0],
                'id_transaksi' => $lsid->id_transaksi,
                'harga' => $request->input('harga'),
                'jumlah_obat' => $request->input('jumlah_obat'),
                'sub_total' => $request->input('sub_total')
            ]);

        if ($insert1 && $insert2){
            return redirect('transaksi');
        }
    }
}
