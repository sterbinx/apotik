<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apotikk;


/*
*/

class ObatController extends Controller
{


    public function index(){
        $a = new Apotikk();

    	$data = array();
    	$data['obat'] = $a->getApotikk();

        return view('master.obat.obatview', $data);
    }
}
