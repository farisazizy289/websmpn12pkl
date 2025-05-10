<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class SiswaImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        // Ambil hanya header tertentu (baris pertama sebagai header)
        $header = ['nisn', 'nama', 'kelas', 'tanggal_masuk', 'jam_masuk'];

        $data = [];

        foreach ($rows as $index => $row) {
            if ($index === 0) {
                // Lewati baris pertama jika ini header
                continue;
            }

            // Pastikan hanya mengambil kolom sesuai header
            $data[] = [
                'nisn' => $row[0] ?? null,
                'nama' => $row[1] ?? null,
                'kelas' => $row[2] ?? null,
                'tanggal_masuk' => $row[3] ?? null,
                'jam_masuk' => $row[4] ?? null,
            ];
        }

        // Lakukan sesuatu dengan data, misalnya simpan ke database
        // Siswa::insert($data);
    }
}
