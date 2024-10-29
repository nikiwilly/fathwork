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
                        <h3 class="mb-0 text-white">Edit Data Admin</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Validation Form -->
        <form action="{{ route('updatedataadmin', $admin->id) }}" method="POST" style="background-color: white; border-radius: 5px; padding-bottom: 20px;" class="row g-3 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="col-md-5">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend" placeholder="Username" value="{{ old('username', $admin->username) }}" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $admin->email) }}" required>
                <div class="invalid-feedback">
                    Please provide a valid email.
                </div>
            </div>
            <div class="col-md-5">
                <label for="password" class="form-label">Password (Leave blank if not changing)</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <div class="invalid-feedback">
                    Please provide a valid password.
                </div>
            </div>
            <div class="col-md-5">
                <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Konfirmasi Password">
                <div class="invalid-feedback">
                    Please confirm your password.
                </div>
            </div>
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-secondary me-2" type="button" onclick="window.history.back()">Batal</button>
                <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection
