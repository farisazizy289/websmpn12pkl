<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    // Menentukan kolom yang bisa diisi massal
    protected $fillable = ['title', 'slug', 'content', 'kategori_id', 'thumbnail', 'is_active', 'created_by'];

    /**
     * Relasi ke tabel kategori_beritas
     * Satu berita memiliki satu kategori
     */
    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_id');
    }

    /**
     * Relasi ke tabel users
     * Satu berita dibuat oleh satu user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
