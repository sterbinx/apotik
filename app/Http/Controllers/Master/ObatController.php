<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apotek;


/*
*/

class ObatController extends Controller
{


    public function index(){
        $a = new Apotek();

    	$data = array();
    	$data['obat'] = $a->getApotek();

        return view('master.obat.obatview', $data);
    }
}
