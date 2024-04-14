<?php

namespace App\Http\Controllers;

use App\Models\AsramaMahasiswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataAsrama extends Controller
{
    public function index(): View
    {
        $das = AsramaMahasiswa::paginate(10);
        return view("data_asrama.index", compact("das"));
    }

    public function create(): View
    {
        return view("data_asrama.create");
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "nama_asrama"=> "required",
            "alamat"=> "required",
            "no_kamar" => "required",
        ]);

        AsramaMahasiswa::create([
            "nama_asrama"=> $request->nama_asrama,
            "alamat" => $request->alamat,
            "no_kamar" => $request->no_kamar,
        ]);

        return redirect()->route("data_asrama.index")->with(["success" => "Data Berhasil Ditambahkan!"]);
    }

    public function edit(string $id): View
    {
        $das = AsramaMahasiswa::findOrFail($id);
        return view("data_asrama.edit", compact("das"));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            "nama_asrama" => "required",
            "alamat"=> "required",
            "no_kamar"=> "required",
        ]);

        $das = AsramaMahasiswa::findOrFail($id);

        $das->update([
            "nama_asrama"=> $request->nama_asrama,
            "alamat"=> $request->alamat,
            "no_kamar"=> $request->no_kamar,
        ]);

        return redirect()->route("data_asrama.index")->with(["success"=> "Data berhasil diubah!"]);
    }

    public function destroy(string $id): RedirectResponse
    {
        AsramaMahasiswa::destroy($id);
        return redirect()->route("data_asrama.index")->with(["success"=> "Data Berhasil Dihapus!"]);
    }
}
