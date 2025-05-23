<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $fillable = ['nisn', 'nama', 'kelas', 'tanggal_masuk', 'jam_masuk', 'status_keberangkatan'];
}

