<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama",
        "jk",
        "tgl_lahir",
        "umur",
        "alamat",
        "nohp",
    ];
}
