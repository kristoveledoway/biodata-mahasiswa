@extends('admin.layouts.main')

@section('title', 'Keseluruhan Data')

@section('content')

                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card radius-10 bg-gradient-deepblue">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">{{ $dms }}</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-user-plus fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-orange">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">9526</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-home-circle fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Kampus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">9526</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-home-heart fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Asrama</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card radius-10 w-100">
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
                                            </tr>
                                        </tfoot>
                                    </table>
                                    {{-- {{ $dms->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->

@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
@endsection
