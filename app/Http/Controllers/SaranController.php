<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;
use App\Models\Jurusan;

class SaranController extends Controller
{
    public function index()
    {
        $jurusanM = \App\Models\Jurusan::all();
        return view('frontend.kotak_saran');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string|max:500',
        ]);

        // Simpan ke database
        Saran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Saran Anda berhasil dikirim!');
    }
}

