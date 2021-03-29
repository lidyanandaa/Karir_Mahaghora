<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ControllerUser extends Controller
{
    public function user(){
        // mengambil data dari table users
    	$users = DB::table('users')->get();
 
    	// mengirim data users ke view index
        return view('user',['users' => $users]);
    }

}
