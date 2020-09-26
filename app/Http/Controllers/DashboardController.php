<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apotik;

class DashboardController extends Controller
{
    public function index()
    {
    	$info = new Apotikk();

    	$data = array();
    	$data['info'] = $info->getApotikk();

    	return view('pages/dashboard', $data);
    }
}
