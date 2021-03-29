<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use view;
use DB;
use Redirect;

class ControllerAdmin extends Controller
{
    public function index(){
        $lowongan = DB::table('lowongan')->count();
        $cv = DB::table('cv')->count();
        $internship = DB::table('internship')->count();
        $users = DB::table('users')->count();
        return view('dashboard')->with('lowongan',$lowongan)
        ->with('cv',$cv)
        ->with('internship',$internship)
        ->with('users',$users);
    }
}
