<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
    	$anjay = DB::table('user')
            ->get();
        
        return view('master.user.userview', [
        	'pwpb' => $anjay
        ]);
    }

    public function viewCreate(){
        $data = [];
        return view('master.user.create_add');
    }

     public function destroy($id)
    {
        DB::table('user')->where('id_user',$id)
        ->delete();
        return redirect('master/user');
    }

    public function add(Request $req){
        $insert = DB::table('user')
            ->insert([
                'id_user'    => "BR".random_int(100,999)."",
                'username'   => $req->input('username'),
                'nama'       => $req->input('nama'),
                'password'   => $req->input('password'),
                'alamat'     => $req->input('alamat'),
                'no_hp'      => $req->input('no_hp'),
                'level'      => $req->input('level')]);
        if ($insert){
        
        return redirect('master/user');
        }
    }
}
