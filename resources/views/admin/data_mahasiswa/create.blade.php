@extends('admin.layouts.main')

@section('plugins')
<link href="assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
@endsection

@section('title', 'Tambah Data Mahasiswa')

@section('content')
    
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Mahasiswa</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Mahasiswa</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-xl-9 mx-auto">
        {{-- FORM INPUT DATA --}}
        <h6 class="mb-0 text-uppercase">MAsukkan Data Mahasiswa</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <form action="{{ route('data_mahasiswa.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama :</label>
                        <input class="form-control @error('nama') is-invalid @enderror" type="text"
                            name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin :</label>
                        <input class="form-control @error('nama') is-invalid @enderror" type="text"
                            name="jk" value="{{ old('jk') }}"
                            placeholder="Masukkan Jenis Kelamin">
                        @error('jk')
                            <div class="alert alert-danger mt-2">
                                {{ message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir :</label>
                        <input class="form-control @error('tgl_lahir') is-invalid @enderror"
                            type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                        @error('tgl_lahir')
                            <div class="alert alert-danger mt-2">
                                {{ message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Umur :</label>
                        <input class="form-control @error('umur') is-invalid @enderror" type="text"
                            name="umur" value="{{ old('umur') }}" placeholder="Masukkan Umur">
                        @error('umur')
                            <div class="alert alert-danger">
                                {{ message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-label">Alamat :</div>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5"
                            value="{{ old('alamat') }}" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="alert alert-danger">
                                {{ message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Hp :</label>
                        <input class="form-control @error('no_hp') is-invalid @enderror"
                            type="text" name="nohp" value="{{ old('nohp') }}"
                            placeholder="Masukkan No Hp">
                        @error('nohp')
                            <div class="alert alert-danger">
                                {{ message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end row-->
    
@endsection

@section('scripts')
<script src="/assets/plugins/input-tags/js/tagsinput.js"></script>
@endsection            