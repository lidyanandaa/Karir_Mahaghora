<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ControllerReportInternship extends Controller
{
    public function expenses(Request $request)
    {
        if (isset($request->date_filter)) {
            $parts = explode(' - ', $request->date_filter);
            $date_from = $parts[0];
            $date_to = $parts[1];
        } else {
            $carbon_date_from = new Carbon('last Monday');
            $date_from = $carbon_date_from->toDateString();
            $carbon_date_to = new Carbon('this Sunday');
            $date_to = $carbon_date_to->toDateString();
        }
    }

    public function reportinternship(Request $request)
    {
        // mengambil data dari table lowongan
        $internship = DB::table('internship')->get();

        if ($request->mulai && $request->berakhir) {
            $internship = Internship::where('updated_at', '>=', $request->mulai)->where('updated_at', '<=', $request->berakhir)->get();
        }

        // mengirim data users ke view index
        return view('reportinternship', ['internship' => $internship]);
    }

}

