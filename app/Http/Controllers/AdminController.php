<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;

class AdminController extends Controller
{
    private $table = "user";

    function index()
    {
    	return view('login');
    }

    function post_login(Request $request)
    {

        $condition = false;
        $user = $this->find_user($request->get('username'));

        if ($user != null) {                
              if ($user->username == $request->get('username') && $user->password == $request->get('password')) {
                  $condition = true;
              }
        }     

        if ($condition) {
            Session::put('is_login',true);
            Session::put('id_user',$user->id_user);
            Session::put('username',$user->username);
            return [
                "status" => "success",
                "redirect_route" => "dashboard" 
            ];
        }

        return [
            "status" => "error",
            "message" => "User is not valid"
        ];
    }

     public function find_user($username)
    {
        return DB::table($this->table)
            ->where('username', $username)        
            ->first();
    }

    function logout()
    {
    	Auth::logout();
    	Session::flush();
    	return redirect('login');
    }
}
