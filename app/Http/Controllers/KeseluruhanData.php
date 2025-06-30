<?php

namespace App\Http\Controllers;

use App\Models\BiodataMahasiswa;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KeseluruhanData extends Controller
{
    public function index(): View
    {
        $jml_dms    = BiodataMahasiswa::count();
        $dms = BiodataMahasiswa::paginate(10);
        return view("admin.index", compact("jml_dms","dms"));
    }
}
