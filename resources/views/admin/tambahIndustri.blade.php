@extends('admin.layout.main')

@section('isi')
    <div class="app-content-area">
        <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
        <div class="container-fluid mt-n22">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 text-white">Tambah Industri</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Validation Form -->
            <form action="{{ route('simpandataindustri') }}" method="POST" style="background-color: white; border-radius: 5px; padding-bottom: 20px;" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="col-md-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="confirmpassword" class="form-label">Konfirmasi password</label>
                    <input type="password" class="form-control" id="confirmpassword" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="status_akun" class="form-label">Status</label>
                    <select class="form-select" id="status_akun" required>
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <!-- Button Block -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end p-6">
                    <button class="btn btn-secondary me-2" type="button" onclick="window.history.back()">Batal</button>
                    <button class="btn btn-primary" type="submit">Tambah</button>

                </div>
            </form>
        </div>
    </div>
@endsection
