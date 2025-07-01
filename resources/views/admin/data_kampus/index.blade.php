@extends('admin.layouts.main')

@section('plugins')
<link href="{{ asset('assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Data Kampus')

@section('content')
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Kampus</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Kampus</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('data_kampus.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Kampus</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>Semester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dks as $dk)
                                <tr>
                                    <td>{{ $dk->nama_kampus }}</td>
                                    <td>{{ $dk->fakultas }}</td>
                                    <td>{{ $dk->jurusan }}</td>
                                    <td>{{ $dk->semester }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah anda yakin ?');"
                                            action="{{ route('data_kampus.destroy', $dk->id) }}"
                                            method="post">
                                            <a href="{{ route('data_kampus.edit', $dk->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    DATA KAMPUS BELUM ADA
                                </div>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama Kampus</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- {{ $dks->links() }} --}}
                </div>
            </div>
        </div>
    
@endsection

@section('scripts')
<script src="/assets/plugins/input-tags/js/tagsinput.js"></script>
@endsection            