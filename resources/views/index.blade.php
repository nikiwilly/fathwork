@extends('layoutslp.main')

@section('isi')
    <!-- /header -->
    <section class="wrapper bg-light">
      <div class="container pt-10 pt-md-14 pb-14 pb-md-16 text-center">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-14 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="img-auto" src="assets/img/illustrations/orang.jpg" srcset="https://media.istockphoto.com/id/1321421842/id/foto/optimasi-seo-3d-analisis-web-dan-konsep-media-sosial-pemasaran-seo-ilustrasi-render-3d.jpg?s=1024x1024&w=is&k=20&c=gfK9q35K7TClZEty9volALdt9D1tTEefnIC8RxQt2Ow=
              " alt="" /></figure>
          </div>
          <!-- /column -->
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
            <h1 class="display-1 fs-54 mb-5 mx-md-n5 mx-lg-0 mt-7">Dapatkan Informasi Pekerjaan<br class="d-md-none">  Dari Seluruh<br class="d-md-none"><span class="rotator-fade text-primary"> Mitra Kami</span></h1>
            <p class="lead fs-lg mb-7">Bingung cari kerja setelah lulus sekolah? Fathwork siap bantu kamu temukan pekerjaan yang sesuai keahlian! </p>
            <a class="btn btn-primary mb-0" href="#tentangkami">Tentang Kami</a>
            <span><a class="btn btn-lg btn-light text-dark" style="border: 1px solid black; margin-left:1rem;" href="/login">Coba Sekarang</a></span>

          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <p class="text-center mb-8">Dipercaya oleh semua mitra kami</p>
        <div class="row row-cols-4 row-cols-md-4 row-cols-lg-7 row-cols-xl-7 gy-10 mb-2 d-flex align-items-center justify-content-center">
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/inovindo.png" alt="" /></div>
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/harmonic.png" alt="" /></div>
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/cte.png" alt="" /></div>
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/leoco.png" alt="" /></div>
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/ckg.png" alt="" /></div>
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/pgri.png" alt="" /></div>
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/grand.png" alt="" /></div>
          <div class="col"><img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="assets/img/perusahaan/xaba.png" lt="" /></div>
          <a class="btn btn-primary rounded-pill mb-0" href="/mitra-perusahaan">Lihat Lebih</a>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->

      <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->

    <section id="tentangKami" class="wrapper bg-light wrapper-border">
      <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
          <div class="col-lg-6">
            <div class="row gx-md-5 gy-5">
              <div class="col-12">
                <figure class="rounded mx-md-5"><img src="assets/img/poto/kerja1.jpg" ></figure>
              </div>
              <!--/column -->
              <div class="col-md-6">
                <figure class="rounded"><img src="assets/img/poto/kerja2.jpg" ></figure>
              </div>
              <!--/column -->
              <div class="col-md-6">
                <figure class="rounded"><img src="assets/img/poto/kerja3.jpg" ></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Siapakah Kami?</h2>
            <h3 class="display-3 mb-10">KAMI ADALAH<span class="underline-3 style-2 yellow"> FATHWORK</span></h3>
            <div class="row gy-8">
              <p>FathWork adalah platform yang berfungsi sebagai jembatan antara sekolah dan industri. Tujuan utama Fathwork adalah mempermudah siswa dalam mendapatkan pekerjaan yang sesuai dengan keahlian mereka. Aplikasi ini dirancang untuk mempercepat proses penempatan kerja dengan menyediakan platform di mana sekolah dapat berkolaborasi langsung dengan perusahaan.</p>
              <!--/column -->
            </div>
          <a class="btn btn-primary rounded-pill mb-0" href="/about">Detail Lebih Lanjut</a>

            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- /section -->
    <div class="overflow-hidden">
      <div class="divider text-soft-primary mx-n2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
          <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
        </svg>
      </div>
    </div>
    <section id="layanan" class="wrapper bg-gradient-primary" style="padding-top: 5rem;">
      <p class="text-center mb-8">Layanan Kami</p>
      <div class="container pb-14 pb-md-17">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="card shadow-lg me-lg-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Penyedia Lowongan Kerja Sesuai Keahlian</h4>
                    <p class="mb-0">Fathwork menghubungkan siswa SMK dengan berbagai perusahaan yang membutuhkan tenaga kerja sesuai dengan keahlian dan jurusan mereka.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card shadow-lg ms-lg-13 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Kolaborasi Sekolah dan Industri</h4>
                    <p class="mb-0">Memfasilitasi kerjasama langsung antara sekolah dan perusahaan untuk menciptakan kesempatan kerja yang lebih luas dan tepat bagi siswa.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card shadow-lg mx-lg-6 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Profil Siswa Terintegrasi</h4>
                    <p class="mb-0">Setiap siswa dapat membuat profil yang menampilkan keahlian, pengalaman, dan prestasi mereka, memudahkan perusahaan dalam menilai kelayakan kandidat.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-primary mb-3">Layanan Kami</h2>
            <h3 class="display-3 mb-4">Temukan Pekerjaan Sesuai Keahlian Anda</h3>
            <p>Profil Anda adalah gambaran keterampilan dan pengalaman Anda. Lamar pekerjaan secara mudah hanya dengan satu klik.</p>
            <a href="#" class="btn btn-primary rounded-pill mb-0">Mulai</a>
          </div>
        </div>
      </div>
          <!--/column -->
      <!-- /.container -->
    </section>
    <!-- /section -->

    <!-- /section -->

          <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
        <div class="divider text-soft-primary mx-n2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
            <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
          </svg>
        </div>
      </div>
      <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-primary">
      <div class="container pt-12 pt-lg-8 pb-14 pb-md-17">
        <div class="row text-center">
          <div class="col-lg-8 offset-lg-2">
            <h2 class="fs-16 text-uppercase text-primary mb-3">Testimonal</h2>
            <p>Lihat apa yang dikatakan pelamar yang sukses bekerja melalui platform kami</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="grid">
          <div class="row isotope gy-6">
            <div class="item col-md-6 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-2"></span>
                  <blockquote class="border-0 mb-0">
                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus facilisis sociis natoque penatibus.”</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="assets/img/avatars/kartun.png" srcset="./assets/img/avatars/te1@2x.jpg 2x" alt="" />
                      <div class="info">
                        <h5 class="mb-1">ABDURAHMAN HIDAYAT</h5>
                        <p class="mb-0">mamanrpl@gmail.com</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-2"></span>
                  <blockquote class="border-0 mb-0">
                    <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed.”</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="assets/img/avatars/kartun.png" srcset="./assets/img/avatars/te2@2x.jpg 2x" alt="" />
                      <div class="info">
                        <h5 class="mb-1">KEVIN SANJAYA</h5>
                        <p class="mb-0">kevinsanjaya@gmail.com</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-2"></span>
                  <blockquote class="border-0 mb-0">
                    <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum. Donec sed odio dui consectetur adipiscing elit.”</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="assets/img/avatars/kartun.png" srcset="./assets/img/avatars/te3@2x.jpg 2x" alt="" />
                      <div class="info">
                        <h5 class="mb-1">WAHYU HIDAYAT</h5>
                        <p class="mb-0">wahyuhidayat@gmail.com</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-2"></span>
                  <blockquote class="border-0 mb-0">
                    <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor. Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at sapien. Aenean tortor libero condimentum ac laoreet vitae.”</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="assets/img/avatars/kartun.png" srcset="./assets/img/avatars/te4@2x.jpg 2x" alt="" />
                      <div class="info">
                        <h5 class="mb-1">DEDE SAMSUDIN</h5>
                        <p class="mb-0">dedesamsudin@gmail.com</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-2"></span>
                  <blockquote class="border-0 mb-0">
                    <p>“Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus magnis dis montes, nascetur ridiculus mus. Donec sed odio dui. Nulla vitae elit libero.”</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="assets/img/avatars/kartun.png" srcset="./assets/img/avatars/te5@2x.jpg 2x" alt="" />
                      <div class="info">
                        <h5 class="mb-1">REHAN ADI</h5>
                        <p class="mb-0">rehanadi@gmail.com</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <span class="ratings five mb-2"></span>
                  <blockquote class="border-0 mb-0">
                    <p>“Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.”</p>
                    <div class="blockquote-details">
                      <img class="rounded-circle w-12" src="assets/img/avatars/kartun.png" srcset="./assets/img/avatars/te6@2x.jpg 2x" alt="" />
                      <div class="info">
                        <h5 class="mb-1">MUHALAM</h5>
                        <p class="mb-0">muhalamsiwalan@gmail.com</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid-view -->
      </div>
      <!-- /.container -->z
    </section>
      <!-- /.container -->
      <div class="overflow-hidden">
        <div class="divider text-navy mx-n2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
            <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
          </svg>
        </div>
      </div>
      <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
  @endsection
