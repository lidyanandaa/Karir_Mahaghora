<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lowongan;

class ControllerLowongan extends Controller
{
    public function lowongan()
    {            
        // mengambil data dari table lowongan
        $lowongan = DB::table('lowongan')
            ->orderBy('id_lowongan', 'desc')
            ->get();

        // mengirim data users ke view index
        return view('lowongan', ['lowongan' => $lowongan]);
    }

    public function inputlowongan()
    {
        return view('inputlowongan');
    }

    public function tambahlowongan(Request $request)
    {
        $this->validate($request,[
            'nama_lowongan' => 'required',
            'lokasi_penempatan' => 'required|max:150',
            'kategori' => 'required|max:150',
            'pengalaman' => 'required',
            'gaji' => 'required',
            'pekerjaan' => 'required|bigInteger',
            'tentang_pekerjaan' => 'required',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'batas_usia' => 'required',
            'persyaratan' => 'required'
         ]);

        // insert data ke table lowongan
        DB::table('lowongan')->insert([
            'nama_lowongan' => $request->namalowongan,
            'lokasi_penempatan' => $request->lokasipenempatan,
            'kategori' => $request->kategori,
            'pengalaman' => $request->pengalaman,
            'gaji' => $request->gaji,
            'tentang_pekerjaan' => $request->tentangpekerjaan,
            'tanggal_awal' => $request->tanggalawal,
            'tanggal_akhir' => $request->tanggalakhir,
            'batas_usia' => $request->batasusia,
            'persyaratan' => $request->persyaratan
        ]);
        // alihkan halaman ke halaman lowongan
        return redirect('/lowongan');
    }

    public function editlowongan($id)
    {
        // mengambil data lowongan berdasarkan id yang dipilih
        $lowongan = DB::table('lowongan')->where('id_lowongan', $id)->get();
        // passing data lowongan yang didapat ke view editlowongan.blade.php
        return view('editlowongan', ['lowongan' => $lowongan]);
    }

    public function updatelowongan(Request $request)
    {
        DB::table('lowongan')->where('id_lowongan', $request->id)->update([
            'nama_lowongan' => $request->namalowongan,
            'lokasi_penempatan' => $request->lokasipenempatan,
            'kategori' => $request->kategori,
            'pengalaman' => $request->pengalaman,
            'gaji' => $request->gaji,
            'tentang_pekerjaan' => $request->tentangpekerjaan,                  
            'tanggal_awal' => $request->tanggalawal,
            'tanggal_akhir' => $request->tanggalakhir,
            'batas_usia' => $request->batasusia,
            'persyaratan' => $request->persyaratan,
            'updated_at' =>  now()

            
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/lowongan');
    }

    public function hapuslowongan($id)
    {
        // menghapus data lowongan berdasarkan id yang dipilih
        DB::table('lowongan')->where('id_lowongan', $id)->delete();

        // alihkan halaman ke halaman lowongan
        return redirect('/lowongan');
    }

    // public function proses(Request $request)
    // {
    //     $this->validate($request,[
    //        'nama_lowongan' => 'required',
    //        'lokasi_penempatan' => 'required|max:150',
    //        'kategori' => 'required|max:150',
    //        'pengalaman' => 'required',
    //        'gaji' => 'required',
    //        'pekerjaan' => 'required|bigInteger',
    //        'tentang_pekerjaan' => 'required',
    //        'tanggal_awal' => 'required|date',
    //        'tanggal_akhir' => 'required|date',
    //        'batas_usia' => 'required',
    //        'persyaratan' => 'required'
    //     ]);
 
    //     return view('lowongan',['data' => $request]);
    // }
}
