<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;

class frontController extends Controller
{
    //
    public function index()
    {
        //ngambil data about
        $about_id = getMeta_value('page_about');
        $about_data = halaman::where('id', $about_id)->first();

        //ngambil data interest
        $interest_id = getMeta_value('page_interest');
        $interest_data = halaman::where('id', $interest_id)->first();

        //ngambil data award
        $award_id = getMeta_value('page_award');
        $award_data = halaman::where('id', $award_id)->first();

        $experience_data = riwayat::where('tipe', 'experience')->get();

        $education_data = riwayat::where('tipe', 'education')->get();

        //ngasi data yang udh diambil
        return view('front.index')->with([
            'about' => $about_data,
            'interest' => $interest_data,
            'award' => $award_data,
            'experience' => $experience_data,
            'education' => $education_data,
        ]);
    }
}
