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
                            <h3 class="mb-0 text-white">Edit Data Industri</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Validation Form -->
            <form class="row g-3 needs-validation rounded-lg p-3"
                style="background-color: rgb(246, 246, 246); border:1px solid rgb(170, 170, 170)" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Password</label>
                    <input type="password" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Konfirmasi password</label>
                    <input type="password" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Status</label>
                    <select class="form-select" id="validationCustom04" required>
                      <option>Aktif</option>
                      <option>Nonaktif</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>

                <!-- Button Block -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end p-6">
                    <a class="btn btn-secondary" href="/data-industri" role="button">Batal</a>
                    <a class="btn btn-primary" href="#" role="button">Ubah</a>

                </div>
            </form>
        </div>
    </div>
@endsection
