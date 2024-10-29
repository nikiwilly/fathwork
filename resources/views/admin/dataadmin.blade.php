@extends('admin.layout.main')

@section('isi')
<!-- Container fluid -->
<div class="app-content-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-5">
                    <h3 class="mb-0 ">Data Admin</h3>
                </div>
            </div>
        </div>
        <div>
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-3 col-md-6"></div>
                                <div class="col-lg-4 col-md-6 d-flex align-items-center mt-3 mt-md-0"></div>
                                <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                                    <a href="/tambah-data-admin" class="btn btn-primary me-2">Tambah Data Admin</a>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="pe-0"></th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($admin as $admin)
                                            <tr>
                                                <td class="pe-0">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="contactCheckbox{{ $admin->id }}"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $admin->username }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="{{ route('editdataadmin', $admin->id) }}" role="button">Edit</a>
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" onclick="setDeleteForm('{{ route('hapusdataadmin', $admin->id) }}')">Hapus</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-md-flex justify-content-between align-items-center">
                            <span>Menampilkan 1 hingga 1 dari 1 hasil</span>
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

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus admin ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" action="" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function setDeleteForm(actionUrl) {
        const form = document.getElementById('deleteForm');
        form.action = actionUrl;
    }
</script>

@endsection
