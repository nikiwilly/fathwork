@extends('admin.layout.main')
@section('isi')
<div class="app-content-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="mb-5">
                    <h3 class="mb-0 ">Laporan Gaji</h3>

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
                                     
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            <th class="ps-1">Nama Karyawan</th>
                                            <th>Gaji Pokkok</th>
                                            <th>Total Gaaji Kotor</th>
                                            <th>Total Gaji Bersih</th>
                                            <th>Tunjangan</th>
                                            <th>Potongan</th>
                                            <th>Priode</th>
                                            <th>Tanggal Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Samsudin</td>
                                            <td>16.000.000</td>
                                            <td>15.000.000</td>
                                            <td>10.000.000</td>
                                            <td>500.000</td>
                                            <td>100.000</td>
                                            <td>2025 - 2026</td>
                                            <td>20/10/2025</td>

                                        </tr>
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
