<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    

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

    public function search(Request $request)
    {
        $cari = $request->search;

        $kategori = DB::table('kategori')
            ->where('nama_kategori','like',"%".$cari."%")->get();

        $data = DB::table('kategori')
            ->get();

        return view('master.kategori.kategoriview',[
            'show' => $kategori,
            'apa'  => $data
        ]);

    }

    public function get_ket(){
        $id = $request->get('id_kategori');     
        $get_edit = DB::table('kategori')
                ->where('id',$id)
                ->get();
        return $get_edit;
    }

    public function update_ket(Request $request)
    {
        $update = DB::table('kategori')
                ->where('id_kategori',$request->input('edit_id'))
                ->update([
                    'nama_kategori'      => $request->input('nama')
                ]);

        if ($update) {
            return redirect('master/kategori');
        }
    }

    public function viewUpdate(Request $request){
        $id = $request->get('id_kategori');     
        $get_edit = DB::table('kategori')
                ->where('id_kategori',$request->id)
                ->get();
        $data = [
            'getedit' => $get_edit
        ];
        return view('master.kategori.update', $data);
    }

    public function delete($id)
    {
        DB::table('kategori')->where('id_kategori',$id)->delete();
        return view('master.kategori.kategoriview');
    }
}
