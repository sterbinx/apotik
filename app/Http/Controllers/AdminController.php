<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;

class AdminController extends Controller
{
    function index()
    {
    	return view('login');
    }

    function post_login(Request $request)
    {
    	$user=DB::table('user')->where('username',$request->input('username'))->first();
    	$condition = false;

    	if($user != null){
    		if($user->username == $request->input('username') && $user->password == $request->input('password')){
    			$condition=true;
    		}
    	}

    	if ($condition) {

    		Session::put('is_login',true);
    		Session::put('id_user',$user->id_user);
            Session::put('username',$user->username);
            Session::put('password',$user->password);
    		
    		return 'success';
    	}else{
    		return "error";
    	}
    }

    function logout()
    {
    	Auth::logout();
    	Session::flush();
    	return redirect('login');
    }
}
