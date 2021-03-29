<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ControllerReportCv extends Controller
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
    public function reportcv(Request $request)
    {
        // mengambil data dari table cv
        $cv = DB::table('cv')->get();

        if ($request->mulaicv && $request->berakhircv) {
            $cv = Cv::where('updated_at', '>=', $request->mulaicv)->where('updated_at', '<=', $request->berakhircv)->get();
        }
        // mengirim data users ke view index
        return view('reportcv', ['cv' => $cv]);
    }
}
