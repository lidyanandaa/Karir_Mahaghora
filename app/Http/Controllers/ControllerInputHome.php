<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Inputhome;

class ControllerInputHome extends Controller
{
    public function inputhome()
    {
        // mengambil data dari table inputhome
        $inputhome = DB::table('inputhome')
            ->orderBy('id_inputhome', 'desc')
            ->get();

        // mengirim data users ke view index
        return view('inputhome', ['inputhome' => $inputhome]);
    }

    public function inputanhome()
    {
        return view('inputanhome');
    }

    public function tambahinputhome(Request $request)
    {
        // insert data ke table inputhome
        DB::table('inputhome')->insert([
            'konten1' => $request->konten1,
            'konten2' => $request->konten2,
            'konten3' => $request->konten3,
            'konten4' => $request->konten4
        ]);
        // alihkan halaman ke halaman inputhome
        return redirect('inputhome');
    }

    public function editinputhome($id)
    {
        // mengambil data inputhome berdasarkan id yang dipilih
        $inputhome = DB::table('inputhome')->where('id_inputhome', $id)->get();

        // passing data inputhome yang didapat ke view editinputhome.blade.php
        return view('editinputhome', ['inputhome' => $inputhome]);
    }

    public function updateinputhome(Request $request)
    {
        DB::table('inputhome')->where('id_inputhome', $request->id)->update([
            'konten1' => $request->konten1,
            'konten2' => $request->konten2,
            'konten3' => $request->konten3,
            'konten4' => $request->konten4,
            'updated_at' =>  now()
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/inputhome');
    }

    public function hapusinputhome($id)
    {
        // menghapus data inputhome berdasarkan id yang dipilih
        DB::table('inputhome')->where('id_inputhome', $id)->delete();

        // alihkan halaman ke halaman inputhome
        return redirect('/inputhome');
    }
}

