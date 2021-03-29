<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Inputbeasiswa;

class ControllerInputBeasiswa extends Controller
{
    public function inputbeasiswa()
    {
        // mengambil data dari table inputbeasiswa
        $inputbeasiswa = DB::table('inputbeasiswa')
            ->orderBy('id_inputbeasiswa', 'desc')
            ->get();

        // mengirim data users ke view index
        return view('inputbeasiswa', ['inputbeasiswa' => $inputbeasiswa]);
    }

    public function inputanbeasiswa()
    {
        return view('inputanbeasiswa');
    }

    public function tambahinputbeasiswa(Request $request)
    {
        // insert data ke table inputbeasiswa
        DB::table('inputbeasiswa')->insert([
            'judul1' => $request->judul1,
            'konten1' => $request->konten1
        ]);
        // alihkan halaman ke halaman inputbeasiswa
        return redirect('/inputbeasiswa');
    }

    public function editinputbeasiswa($id)
    {
        // mengambil data inputbeasiswa berdasarkan id yang dipilih
        $inputbeasiswa = DB::table('inputbeasiswa')->where('id_inputbeasiswa', $id)->get();
        // passing data inputbeasiswa yang didapat ke view editinputbeasiswa.blade.php
        return view('editinputbeasiswa', ['inputbeasiswa' => $inputbeasiswa]);
    }

    public function updateinputbeasiswa(Request $request)
    {
        DB::table('inputbeasiswa')->where('id_inputbeasiswa', $request->id)->update([
            'judul1' => $request->judul1,
            'konten1' => $request->konten1,
            'updated_at' =>  now()
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/inputbeasiswa');
    }

    public function hapusinputbeasiswa($id)
    {
        // menghapus data inputbeasiswa berdasarkan id yang dipilih
        DB::table('inputbeasiswa')->where('id_inputbeasiswa', $id)->delete();

        // alihkan halaman ke halaman inputbeasiswa
        return redirect('/inputbeasiswa');
    }

    public function index()
    {
        $inputbeasiswa = Inputbeasiswa::all();
        return view('beasiswa', compact('inputbeasiswa'));
    }
}
