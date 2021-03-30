<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerKategori extends Controller
{
    public function kategori(){
        // mengambil data dari table users
    	$kategori = DB::table('kategori')->get();
 
    	// mengirim data users ke view index
        return view('kategori',['kategori' => $kategori]);
    }

    public function inputkategori()
    {
        return view('inputkategori');
    }

    public function tambahkategori(Request $request)
    {
        $this->validate($request,[
            'nama_kategori' => 'required'
         ]);

        // insert data ke table lowongan
        DB::table('kategori')->insert([
            'nama_kategori' => $request->namakategori
        ]);
        // alihkan halaman ke halaman lowongan
        return redirect('/kategori');
    }

    public function editkategori($id)
    {
        // mengambil data lowongan berdasarkan id yang dipilih
        $kategori = DB::table('kategori')->where('id_kategori', $id)->get();
        // passing data lowongan yang didapat ke view editlowongan.blade.php
        return view('editkategori', ['kategori' => $kategori]);
    }

    public function updatekategori(Request $request)
    {
        DB::table('kategori')->where('id_kategori', $request->id)->update([
            'nama_kategori' => $request->namakategori,
            'updated_at' =>  now()

            
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kategori');
    }

    public function hapuskategori($id)
    {
        // menghapus data lowongan berdasarkan id yang dipilih
        DB::table('kategori')->where('id_kategori', $id)->delete();

        // alihkan halaman ke halaman lowongan
        return redirect('/kategori');
    }
}