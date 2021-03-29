<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cv;

class ControllerCv extends Controller
{
    public function cv()
    {
        // mengambil data dari table lowongan
        $cv = DB::table('cv')->get();

        // mengirim data users ke view index
        return view('cv', ['cv' => $cv]);
    }

    public function tambahcv(Request $request)
    {
        $filenameWithExt = $request->file('filecv')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('filecv')->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('filecv')->storeAs('public/storage/berkas_file_cv/', $filenameSimpan);

        // insert data ke table cv
        DB::table('cv')->insert([
            'nama_lengkap_cv' => $request->namalengkapcv,
            'jenis_kelamin_cv' => $request->jenis_kelamincv,
            'email_cv' => $request->emailcv,
            'no_hp_cv' => $request->nohpcv,
            'pendidikan_terakhir_cv' => $request->pendidikanterakhircv,
            'nama_berkas_cv' => $filenameSimpan
        ]);
        // alihkan halaman ke halaman cv
        return redirect('/formhome')->with('success', 'Task Created Successfully!');
    }
}
