@extends('admin.dashboard')

@section('isi')
    <div class="app-content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="mb-5">
                        <h3 class="mb-0 ">Data Industri</h3>

                    </div>
                </div>
            </div>
            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card mb-4">
                            <div class="card-header  ">
                                <div class="row">
                                    <div class=" col-lg-3 col-md-6">
                                    </div>
                                    <div class="col-lg-4 col-md-6 d-flex align-items-center mt-3 mt-md-0">
                                    </div>
                                    <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">

                                        <a href="/tambah-data-industri" class="btn btn-primary me-2">Tambah Data</a>
                                        <a href="#!" class="btn btn-light ">Export Data</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th class=" pe-0  ">

                                                </th>
                                                <th class="ps-1">Nomor</th>
                                                <th>Nama Industri</th>
                                                <th>Email Industri</th>
                                                <th>Status Akun</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($industri as $industri)
                                            <tr>
                                                <td class="pe-0">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="contactCheckbox{{ $industri->id }}"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $industri->nama }}</td>
                                                <td>{{ $industri->email }}</td>
                                                <td>{{ $industri->status_akun }}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="{{ route('editdataindustri', $industri->id) }}" role="button">Edit</a>
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" onclick="setDeleteForm('{{ route('hapusdataadmin', $industri->id) }}')">Hapus</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex justify-content-between align-items-center">
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0">
                                        <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
