<?php

namespace App\Http\Controllers;

use App\Models\BiodataMahasiswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataMahasiswa extends Controller
{
    public function index(): View
    {
        $dms = BiodataMahasiswa::paginate(10);
        return view("data_mahasiswa.index", compact("dms"));
    }

    public function create(): View
    {
        return view("data_mahasiswa.create");
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "nama"=> "required",
            "jk"=> "required",
            "tgl_lahir"=> "required",
            "umur"=> "required",
            "alamat"=> "required",
            "nohp"=> "required",
        ]);

        BiodataMahasiswa::create([
            "nama" => $request->nama,
            "jk" => $request->jk,
            "tgl_lahir" => $request->tgl_lahir,
            "umur" => $request->umur,
            "alamat"=> $request->alamat,
            "nohp" => $request->nohp,
        ]);

        return redirect()->route("data_mahasiswa.index")->with(["success" => "Data Berhasil ditambahkan!"]);
    }

    public function edit(string $id): View
    {
        $dms = BiodataMahasiswa::findOrFail($id);
        return view("data_mahasiswa.edit", compact("dms"));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            "nama"=> "required",
            "jk"=> "required",
            "tgl_lahir"=> "required",
            "umur"=> "required",
            "alamat"=> "required",
            "nohp"=> "required",
        ]);

        $dbms = BiodataMahasiswa::findOrFail($id);

        $dbms->update([
            "nama"=> $request->nama,
            "jk"=> $request->jk,
            "tgl_lahir"=> $request->tgl_lahir,
            "umur"=> $request->umur,
            "alamat"=> $request->alamat,
            "nohp"=> $request->nohp,
        ]);

        return redirect()->route("data_mahasiswa.index")->with(["success"=> "Data Berhasil diubah!"]);
    }

    public function destroy($id): RedirectResponse
    {
        $dms = BiodataMahasiswa::findOrFail($id);
        $dms->delete();
        return redirect()->route("data_mahasiswa.index")->with(["success"=> "Data berhasil dihapus!"]);
    }
}
