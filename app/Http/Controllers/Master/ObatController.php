<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/*
*/

class ObatController extends Controller
{

    public function __construct()
    {

    }

    public function index(){
        $data = [];
        return view('master.obat.obatview', $data);
    }
}
