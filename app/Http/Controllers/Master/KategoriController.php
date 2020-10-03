<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        $data = DB::table('kategori')
            ->get();
        return view('master.kategori.kategoriview',[
            'show' => $data
        ]);
    }

    public function viewCreate(){
        $data = [];
        return view('master.kategori.create');
    }

    public function store(Request $request){
        $insert = DB::table('kategori')
            ->insert([
                'id_kategori' => random_int(5,1000),
                'nama_kategori' => $request->input('nama')
            ]);

        if ($insert){
            return redirect('master/kategori');
        }
    }
}
