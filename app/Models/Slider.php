<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['image', 'status']; // Sesuaikan dengan kolom di tabel
}
