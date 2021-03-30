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

    public function inputuser()
    {
        return view('inputuser');
    }

    public function tambahuser(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|max:150'
         ]);

        // insert data ke table lowongan
        DB::table('users')->insert([
            'name' => $request->namauser,
            'email' => $request->emailuser
        ]);
        // alihkan halaman ke halaman lowongan
        return redirect('/user');
    }

    public function edituser($id)
    {
        // mengambil data lowongan berdasarkan id yang dipilih
        $users = DB::table('users')->where('id', $id)->get();
        // passing data lowongan yang didapat ke view editlowongan.blade.php
        return view('edituser', ['users' => $users]);
    }

    public function updateuser(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->namauser,
            'email' => $request->emailuser,
            'updated_at' =>  now()

            
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/user');
    }

    public function hapususer($id)
    {
        // menghapus data lowongan berdasarkan id yang dipilih
        DB::table('users')->where('id', $id)->delete();

        // alihkan halaman ke halaman lowongan
        return redirect('/user');
    }
}
