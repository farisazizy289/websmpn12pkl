<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        return view('backend.prestasi.index');
    }
}
