<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsramaMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_asrama",
        "alamat",
        "no_kamar"
    ];
}
