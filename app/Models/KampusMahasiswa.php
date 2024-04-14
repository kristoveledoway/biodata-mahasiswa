<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KampusMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_kampus",
        "fakultas",
        "jurusan"
    ];
}
