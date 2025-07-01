@extends('admin.layouts.main')

@section('plugins')
<!--plugins-->
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Data Mahasiswa')



@section('content')
<!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Mahasiswa</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="{{ route('data_mahasiswa.create') }}" class="btn btn-primary">Tambah Data</a>
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
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dms as $dm)
                                        <tr>
                                            <td>{{ $dm->nama }}</td>
                                            <td>{{ $dm->jk }}</td>
                                            <td>{{ $dm->tgl_lahir }}</td>
                                            <td>{{ $dm->umur }}</td>
                                            <td>{!! $dm->alamat !!}</td>
                                            <td>{{ $dm->nohp }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah anda yakin ?');"
                                                    action="{{ route('data_mahasiswa.destroy', $dm->id) }}"
                                                    method="post">
                                                    <a href="{{ route('data_mahasiswa.edit', $dm->id) }}"
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
                                            DATA MAHASISWA BELUM ADA
                                        </div>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                            {{ $dms->links() }}
                        </div>
                    </div>
                </div>
@endsection
    