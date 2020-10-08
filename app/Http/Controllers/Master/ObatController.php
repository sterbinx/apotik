<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;
use App\Models\Apotek;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{


    public function index()
    {
        $a = new Apotek();

        $data = array();
        $data['obat'] = $a->getApotek();

        return view('master.obat.obatview', $data);
    }

    public function viewCreate()
    {
        return view('master.obat.createobat');
    }

    public function store(Request $req){
        $validate = $req->validate([
            'nama' => 'required|max:50|string',
            'suplier' => 'required',
            'kategori' => 'required',
            'satuan' => 'required',
            'tglexp' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        $insert = DB::table('obat')
            ->insert([
                'kode_obat' => "BR".random_int(100,999)."",
                'nama_obat' => $req->input('nama'),
                'supplier' => $req->input('suplier'),
                'id_kategori' => $req->input('kategori'),
                'satuan' => $req->input('satuan'),
                'tanggal_expired' => $req->input('tglexp'),
                'stok' => $req->input('stok'),
                'harga_jual' => $req->input('harga')
            ]);
        if ($insert){
            return redirect('/master/obat');
        }
    }

    public function viewEdit($id){
        $data = [];
        $data['data'] = DB::table('obat')
            ->leftJoin('kategori', 'kategori.id_kategori', '=', 'obat.id_kategori')
            ->where('kode_obat', $id)->first();

        return view('master.obat.updateobat', $data);
    }

    public function update(Request $req){
        $validate = $req->validate([
            'nama' => 'required|max:50|string',
            'suplier' => 'required',
            'kategori' => 'required',
            'satuan' => 'required',
            'tglexp' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        $insert = DB::table('obat')
            ->where('kode_obat', $req->input('kode_obat'))
            ->update([
                'nama_obat' => $req->input('nama'),
                'supplier' => $req->input('suplier'),
                'id_kategori' => $req->input('kategori'),
                'satuan' => $req->input('satuan'),
                'tanggal_expired' => $req->input('tglexp'),
                'stok' => $req->input('stok'),
                'harga_jual' => $req->input('harga')
            ]);
        if ($insert){
            return redirect('/master/obat');
        }
    }

    public function delete($id){
        DB::table('obat')->where('kode_obat',$id)->delete();
        return redirect('master/obat');
    }

}