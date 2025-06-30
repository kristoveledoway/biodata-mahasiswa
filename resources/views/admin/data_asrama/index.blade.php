@extends('admin.layouts.main')

@section('plugins')
<link href="{{ asset('assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Data Asrama')

@section('content')
        
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Asrama</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Asrama</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('data_asrama.create') }}" type="button" class="btn btn-primary">Tambah
                Data</a>
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
                        <th>Nama Asrama</th>
                        <th>Alamat</th>
                        <th>No Kamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($das as $da)
                        <tr>
                            <td>{{ $da->nama_asrama }}</td>
                            <td>{!! $da->alamat !!}</td>
                            <td>{{ $da->no_kamar }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin ?');"
                                    action="{{ route('data_asrama.destroy', $da->id) }}"
                                    method="post">
                                    <a href="{{ route('data_asrama.edit', $da->id) }}"
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
                            DATA ASRAMA BELUM ADA
                        </div>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Asrama</th>
                        <th>Alamat</th>
                        <th>No Kamar</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
            {{ $das->links() }}
        </div>
    </div>
</div>
    
@endsection

@section('scripts')
<script src="/assets/plugins/input-tags/js/tagsinput.js"></script>
@endsection            

                
            