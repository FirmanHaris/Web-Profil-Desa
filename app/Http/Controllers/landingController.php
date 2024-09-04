<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function tentangDesa()
    {
        return view('landingpage.profil.tentangdesa');
    }
}
