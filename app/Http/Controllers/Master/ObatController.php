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


    public function search(Request $request)
    {
        $cari = $request->search;

        $obat = DB::table('obat')
            ->leftJoin('kategori', 'kategori.id_kategori', '=', 'obat.id_kategori')
            ->where('nama_obat','like',"%".$cari."%")
            ->orWhere('supplier', 'like', "%$cari%")
            ->orWhere('satuan', 'like', "%$cari%")
            ->orWhere('stok', 'like', "%$cari%")
            ->orWhere('harga_jual', 'like', "%$cari%")
            ->orWhere('tanggal_expired', 'like', "%$cari%")
            ->orWhere('nama_kategori', 'like', "%$cari%")
            ->get();

        return view('master.obat.obatview',['obat' => $obat]);

    }

    function IDR($value) {
        return 'Rp. '.number_format($value, 0, ".", ",");
    }

    public function selectObat(Request $request){
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = DB::table('obat')
                ->select("kode_obat","nama_obat","harga_jual")
                ->where('nama_obat','LIKE',"%$search%")
                ->orderBy('nama_obat')
                ->get();
        }else{
            $data = DB::table('obat')
                ->select("kode_obat","nama_obat", "harga_jual")
                ->orderBy('nama_obat')
                ->get();
        }

        $json = [];
        foreach($data as $db){
            $json[] = ['id' => $db->kode_obat.'-'.$db->harga_jual, 'text' => $db->nama_obat.' - '.$this->IDR($db->harga_jual)];
        }

        return response()->json($json);
    }
}