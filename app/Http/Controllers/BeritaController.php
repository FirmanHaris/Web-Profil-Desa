<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $title = "Berita";
        return view('admin.berita', compact('title'));
    }
}
