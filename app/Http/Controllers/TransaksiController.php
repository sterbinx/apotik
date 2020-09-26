<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $data = [];
        return view('transaksi.transaksiview', $data);
    }
}
