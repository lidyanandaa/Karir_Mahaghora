<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Inputinternship;

class ControllerInputInternship extends Controller
{
    public function inputinternship()
    {
        // mengambil data dari table inputinternship
        $inputinternship = DB::table('inputinternship')
            ->orderBy('id_inputinternship', 'desc')
            ->get();

        // mengirim data users ke view index
        return view('inputinternship', ['inputinternship' => $inputinternship]);
    }

    public function inputaninternship()
    {
        return view('inputaninternship');
    }

    public function tambahinputinternship(Request $request)
    {
        // insert data ke table inputinternship
        DB::table('inputinternship')->insert([
            'konten1' => $request->konten1,
            'konten2' => $request->konten2,
            'judul1' => $request->judul1,
            'konten3' => $request->konten3,
            'konten4' => $request->konten4,
            'konten5' => $request->konten5
        ]);
        // alihkan halaman ke halaman inputinternship
        return redirect('/inputinternship');
    }

    public function editinputinternship($id)
    {
        // mengambil data inputinternship berdasarkan id yang dipilih
        $inputinternship = DB::table('inputinternship')->where('id_inputinternship', $id)->get();
        // passing data inputbeasiswa yang didapat ke view editinputbeasiswa.blade.php
        return view('editinputinternship', ['inputinternship' => $inputinternship]);
    }

    public function updateinputinternship(Request $request)
    {
        DB::table('inputinternship')->where('id_inputinternship', $request->id)->update([
            'konten1' => $request->konten1,
            'konten2' => $request->konten2,
            'judul1' => $request->judul1,
            'konten3' => $request->konten3,
            'konten4' => $request->konten4,
            'konten5' => $request->konten5,
            'updated_at' =>  now()
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/inputinternship');
    }

    public function hapusinputinternship($id)
    {
        // menghapus data inputinternship berdasarkan id yang dipilih
        DB::table('inputinternship')->where('id_inputinternship', $id)->delete();

        // alihkan halaman ke halaman inputinternship
        return redirect('/inputinternship');
    }
    public function index()
    {
        $inputinternship = Inputinternship::all();
        return view('internshipuser', compact('inputinternship'));
    }
}
