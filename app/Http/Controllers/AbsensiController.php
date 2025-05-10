<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class AbsensiController extends Controller
{
    public function cekAbsensi(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'kelas' => 'required'
        ]);

        // Ambil data dari Excel
        $path = public_path('data_siswa.xlsx'); // Pastikan file ini ada
        $data = Excel::toArray(new SiswaImport, $path);

        if (empty($data[0])) {
            return back()->with('error', 'Data tidak ditemukan!');
        }

        // Cari siswa berdasarkan NISN dan kelas
        $siswa = collect($data[0])->firstWhere('nisn', $request->nisn);

        if (!$siswa || $siswa['kelas'] != $request->kelas) {
            return back()->with('error', 'NISN atau Kelas salah!');
        }

        return view('frontend.content.absensi-hasil', compact('siswa'));
    }

    public function importSiswa(Request $request)
    {
    Excel::import(new SiswaImport, $request->file('file'));

    return back()->with('success', 'Data siswa berhasil diimpor!');
    }

}

