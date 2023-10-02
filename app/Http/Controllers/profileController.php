<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.profile.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            '_foto' => 'mimes:jpeg,jpg,png,gif',
            '_email' => 'required | email',
        ], [
            '_foto.mimes' => 'only jpeg, jpg, png, gif type file data',
            '_email.required' => 'Email must fill',
            '_email.email' => 'Must in emall format text',
        ]);

        // Insert Profile Data
        if ($request->hasFile('_foto')) {
            $foto_file = $request->file('_foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto'), $foto_baru);

            // delete foto kalau ada foto update
            $foto_lama = getMeta_value('_foto');
            File::delete(public_path('foto') . "/" . $foto_lama);

            metadata::updateOrCreate(['meta_key' => '_foto'], ['meta_value' => $foto_baru]);
        }


        // City
        metadata::updateOrCreate(['meta_key' => '_kota'], ['meta_value' => $request->_kota]);

        // Province
        metadata::updateOrCreate(['meta_key' => '_provinsi'], ['meta_value' => $request->_provinsi]);

        // Phone Number
        metadata::updateOrCreate(['meta_key' => '_nohp'], ['meta_value' => $request->_nohp]);

        // email
        metadata::updateOrCreate(['meta_key' => '_email'], ['meta_value' => $request->_email]);

        // Insert Social Media Data


        // Facebook
        metadata::updateOrCreate(['meta_key' => '_facebook'], ['meta_value' => $request->_facebook]);

        // Twitter
        metadata::updateOrCreate(['meta_key' => '_twitter'], ['meta_value' => $request->_twitter]);

        // Linkedin
        metadata::updateOrCreate(['meta_key' => '_linkedin'], ['meta_value' => $request->_linkedin]);

        // Github
        metadata::updateOrCreate(['meta_key' => '_github'], ['meta_value' => $request->_github]);


        return redirect()->route('profile.index')->with('success', 'Successfully update profile Data');
    }
}
