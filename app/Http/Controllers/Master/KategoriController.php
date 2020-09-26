<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $data = [];
        return view('master.kategori.kategoriview');
    }
}
