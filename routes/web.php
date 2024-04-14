<?php

use App\Http\Controllers\DataAsrama;
use App\Http\Controllers\DataKampus;
use App\Http\Controllers\DataMahasiswa;
use App\Http\Controllers\KeseluruhanData;
use Illuminate\Support\Facades\Route;

Route::resource("/", KeseluruhanData::class);

Route::resource("/data_mahasiswa", DataMahasiswa::class);

Route::resource("/data_kampus", DataKampus::class);

Route::resource("/data_asrama", DataAsrama::class);