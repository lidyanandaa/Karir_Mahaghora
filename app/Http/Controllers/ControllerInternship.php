<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Internship;

class ControllerInternship extends Controller
{
    public function internship()
    {
        // mengambil data dari table lowongan
        $internship = DB::table('internship')->get();

        // mengirim data users ke view index
        return view('internship', ['internship' => $internship]);
    }

    public function tambahintern(Request $request)
    {
        $filenameWithExt = $request->file('fileintern')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('fileintern')->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('fileintern')->storeAs('public/storage/berkas_file_intern/', $filenameSimpan);

        // insert data ke table lowongan
        DB::table('internship')->insert([
            'nama_lengkap_intern' => $request->namalengkapintern,
            'jenis_kelamin_intern' => $request->jenis_kelaminintern,
            'email_intern' => $request->emailintern,
            'no_hp_intern' => $request->nohpintern,
            'instansi_intern' => $request->instansiintern,
            'jumlah_orang_intern' => $request->jumlahorangintern,
            'nama_berkas_intern' => $filenameSimpan
        ]);
        
        // alihkan halaman ke halaman lowongan
        return redirect('/forminternship')->with('success', 'Task Created Successfully!');
    }
}
