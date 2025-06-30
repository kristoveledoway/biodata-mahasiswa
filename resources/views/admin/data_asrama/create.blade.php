@extends('admin.layouts.main')

@section('plugins')
<link href="{{ asset('assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Tambah Data Asrama')

@section('content')
        
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Asrama</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Kampus</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-xl-9 mx-auto">
        {{-- FORM INPUT DATA --}}
        <h6 class="mb-0 text-uppercase">Masukkan Data Asrama</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <form action="{{ route('data_asrama.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Asrama :</label>
                        <input class="form-control @error('nama_asrama') is-invalid @enderror"
                            type="text" name="nama_asrama" value="{{ old('nama_asrama') }}"
                            placeholder="Masukkan Nama Asrama">
                        @error('nama_asrama')
                            <div class="alert alert-danger mt-2">
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
                        <label class="form-label">Nomor Kamar :</label>
                        <input class="form-control @error('no_kamar') is-invalid @enderror"
                            type="text" name="no_kamar" value="{{ old('no_kamar') }}"
                            placeholder="Masukkan Nomor Kamar">
                        @error('no_kamar')
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