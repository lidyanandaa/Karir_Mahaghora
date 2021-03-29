<?php

namespace App\Http\Controllers;

use App\Models\Inputhome;
use Illuminate\Support\Facades\DB;
use App\Models\Lowongan;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function index()
    {
		// mengambil data dari table lowongan
		$inputhome = Inputhome::all();
		

		$kategori = DB::table('lowongan')->distinct()->get(['kategori']);
        $lowongan = DB::table('lowongan')
            ->orderBy('id_lowongan', 'desc')
            ->get();
			// return View::make('home')
			// ->with('kategori',$kategori)			
			// ->with('lowongan',$lowongan);
			return view('home', compact('inputhome','lowongan'));
        // mengirim data users ke view index
        // return view('home', compact('lowongan'));
	}
	
	public function index1()
    {
		// mengambil data dari table lowongan
		
		$kategori = DB::table('lowongan')->distinct()->get(['kategori']);
        $lowongan = DB::table('lowongan')
            ->orderBy('id_lowongan', 'desc')
            ->get();
			return View::make('formhome')
			->with('kategori',$kategori)			
			->with('lowongan',$lowongan);
        // mengirim data users ke view index
        // return view('home', compact('lowongan'));
	}
	
	public function formhome($id){
		$lowongan = DB::table('lowongan')->where('id_lowongan', $id)->get();

        // passing data inputhome yang didapat ke view editinputhome.blade.php
        return view('formhome', ['lowongan' => $lowongan]);
	}

    // public function index1()
	// {
    		// mengambil data dari table lowongan
		// $lokasi = DB::table('lowongan')->paginate(10);
 
    		// mengirim data lowongan ke view index
	// 	return view('lowongan',['lowongan' => $lokasi]);
 	// }
 
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$lokasi = $request->lokasipenempatan;
		// $kategori = $request->kategori
		$pengalaman = $request->pengalaman;
		$inputhome = Inputhome::all();
 
    		// mengambil data dari table lowongan sesuai pencarian data
		$hasil = DB::table('lowongan')
		->where('lokasi_penempatan','like',"%".$lokasi."%")
		// ->where('kategori','like',"%".$kategori."%")
		->where('pengalaman','like',"%".$pengalaman."%")
		->get();
 
			// mengirim data lowongan ke view index
			return view('/homecari', compact('hasil','inputhome'));
		// return view('home',['lowongan' => $hasil]);
	 }
	 
	//  public function kategori()
    // {
		// $kategori = DB::table('lowongan')->get();
        // return View::make('home')
        // ->with('kategori',$kategori);
	// }

	
	// public function formhome(){
	// 	$formhome = DB::table('lowongan')
    //     ->select('courses.course_id','courses.course_name','courses.course_description','courses.course_image','courses.start_schedule','trainers.trainer_id','trainers.trainer_name','courses.seats')
    //     ->join('courses_details','courses.course_id','=','courses_details.course_id')
    //     ->join('trainers','courses_details.trainer_id','=','trainers.trainer_id')
    //     ->where('courses.course_id' , '=' , $id)
        // ->get();

        // $courses_details = DB::table('courses_details')->where('course_id' , $id)->count();

        // return View::make('homepage.course_detail')
        // ->with('courses',$course_detail)
        // ->with('courses_details',$courses_details);
	// }
}
