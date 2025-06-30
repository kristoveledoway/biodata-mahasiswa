@extends('admin.layouts.main')

@section('plugins')
<link href="{{ asset('assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Tambah Data Mahasiswa')

@section('content')

                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Kampus</div>
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
                        <h6 class="mb-0 text-uppercase">Masukkan Data Kampus</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('data_kampus.store') }}" method="POST">

                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label">Nama Kampus :</label>
                                        <input class="form-control @error('nama_kampus') is-invalid @enderror"
                                            type="text" name="nama_kampus" value="{{ old('nama_kampus') }}"
                                            placeholder="Masukkan Nama Kampus">
                                        @error('nama_kampus')
                                            <div class="alert alert-danger mt-2">
                                                {{ message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Fakultas :</label>
                                        <input class="form-control @error('fakultas') is-invalid @enderror"
                                            type="text" name="fakultas" value="{{ old('fakultas') }}"
                                            placeholder="Masukkan Fakultas Anda">
                                        @error('jk')
                                            <div class="alert alert-danger mt-2">
                                                {{ message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Jurusan :</label>
                                        <input class="form-control @error('jurusan') is-invalid @enderror"
                                            type="text" name="jurusan" value="{{ old('jurusan') }}"
                                            placeholder="Masukkan Jurusan Anda">
                                        @error('jurusan')
                                            <div class="alert alert-danger">
                                                {{ message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Semester :</label>
                                        <input class="form-control @error('semester') is-invalid @enderror"
                                            type="text" name="semester" value="{{ old('semester') }}"
                                            placeholder="Masukkan Semester Anda">
                                        @error('semester')
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


