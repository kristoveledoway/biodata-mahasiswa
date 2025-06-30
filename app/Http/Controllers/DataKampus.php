<?php

namespace App\Http\Controllers;

use App\Models\KampusMahasiswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataKampus extends Controller
{
    public function index(): View
    {
        $dks = KampusMahasiswa::paginate(10);
        return view("admin.data_kampus.index", compact("dks"));
    }

    public function create(): View
    {
        return view("admin.data_kampus.create");
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "nama_kampus"   => "required",
            "fakultas"      => "required",
            "jurusan"       => "required",
            "semester"      => "required",
        ]);

        KampusMahasiswa::create([
            "nama_kampus"   => $request->nama_kampus,
            "fakultas"      => $request->fakultas,
            "jurusan"       => $request->jurusan,
            "semester"      => $request->semester,
        ]);
        return redirect()->route("data_kampus.index")->with("success","Data berhasil ditambahkan!");
    }

    public function edit(string $id): View
    {
        $dks = KampusMahasiswa::findOrFail($id);
        return view("admin.data_kampus.edit", compact("dks"));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            "nama_kampus"   => "required",
            "fakultas"      => "required",
            "jurusan"       => "required",
            "semester"      => "required",
        ]);

        $dks = KampusMahasiswa::findOrFail($id);

        $dks->update([
            "nama_kampus"   => $request->nama_kampus,
            "fakultas"      => $request->fakultas,
            "jurusan"       => $request->jurusan,
            "semester"      => $request->semester,
        ]);

        return redirect()->route("data_kampus.index")->with(["success" => "Data berhasil diubah!"]);
    }

    public function destroy($id): RedirectResponse
    {
        $dks = KampusMahasiswa::findOrFail($id);
        $dks->delete();
        return redirect()->route("data_kampus.index")->with(["success" => "Data Berhasil Dihapus!"]);
    }
}
