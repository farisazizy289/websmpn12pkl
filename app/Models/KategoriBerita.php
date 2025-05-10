<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table = 'kategori_beritas';

    // Menentukan kolom yang bisa diisi massal
    protected $fillable = ['nama', 'is_active'];

    /**
     * Relasi ke tabel beritas
     * Satu kategori bisa memiliki banyak berita
     */
    public function beritas()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }
}
