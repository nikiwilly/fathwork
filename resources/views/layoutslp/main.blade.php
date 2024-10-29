<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>FATHWORK</title>
    <link rel="shortcut icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/sky.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preload" href="assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">

</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg classic transparent navbar-light sticky-navbar">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <img srcset="assets/img/fathwork.png" width="150px" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">FATHWROK</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <a class="nav-link" href="/" data-bs-toggle="dropdown">Beranda</a>
                                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                    <li class="mega-menu-content mega-menu-scroll">
                                        <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">

                                    </li>
                                </ul>
                            </ul>
                            <!--/.dropdown-menu -->
                            </li>
                            <a class="nav-link" href="/#tentangKami" data-bs-toggle="dropdown">Tentang Kami</a>
                            <ul class="dropdown-menu">
                                <ul class="dropdown-menu">
                                </ul>
                                </li>
                            </ul>
                            <a class="nav-link" href="/#layanan" data-bs-toggle="dropdown">Layanan</a>
                            <ul class="dropdown-menu">
                                <ul class="dropdown-menu">
                                </ul>
                                </li>
                            </ul>
                            <div class="dropdown-lg-content">
                                <div>
                                    <!-- /.column -->
                                </div>
                                <!-- /auto-column -->
                            </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/#" data-bs-toggle="dropdown">Mitra</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="/mitra-perusahaan">Mitra
                                            Perusahaan</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="/mitra-sekolah">Mitra
                                            Sekolah</a></li>
                                </ul>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link" href="/blog">Blog</a>
                                <!--/.mega-menu-content-->
                                </ul>
                                <!--/.dropdown-menu -->
                            </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other ms-lg-4">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-none d-md-block">
                                <a class="btn btn-sm btn-primary rounded-pill" href="/login">Login</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>

        @yield('isi')


    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-navy text-inverse">
      <div class="container pt-12 pt-lg-6 pb-13 pb-md-15">
        <div class="d-lg-flex flex-row align-items-lg-center">
          <h3 class="display-3 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">FATHWORK</h3>
          <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap">Coba Sekarang</a>
        </div>
        <!--/div -->
        <hr class="mt-11 mb-12" />
        <div class="row gy-6 gy-lg-0">
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <img class="mb-4" src="assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
              <p class="mb-4">© <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                  document.write(new Date().getUTCFullYear());
                </script> Fathwok <br class="d-none d-lg-block" />All rights reserved.</p>
              <nav class="nav social social-white">
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-youtube"></i></a>
                  <a href="#"><i class="bi bi-telegram"></i></a>
              </nav>
              <!-- /.social -->
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->

          <!-- /column -->
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Learn More</h4>
              <ul class="list-unstyled  mb-0">
                  <li><a href="/">Beranda</a></li>
                  <li><a href="/tentang-kami">Tentang Kami</a></li>
                <li><a href="/mitra-perusahaan">Mitra Perusahaan</a></li>
                <li><a href="/mitra-sekolah">Mitra Sekolah</a></li>
                <li><a href="/blog">Blog</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="col-md-12 col-lg-3">
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
              <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
              <div class="newsletter-wrapper">
                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup2">
                  <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll2">
                      <div class="mc-field-group input-group form-floating">
                        <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                        <label for="mce-EMAIL2">Email Address</label>
                        <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                      </div>
                      <div id="mce-responses2" class="clear">
                        <div class="response" id="mce-error-response2" style="display:none"></div>
                        <div class="response" id="mce-success-response2" style="display:none"></div>
                      </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                      <div class="clear"></div>
                    </div>
                  </form>
                </div>
                <!--End mc_embed_signup-->
              </div>
              <!-- /.newsletter-wrapper -->
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </footer>
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/plugins.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>


  <!-- Mirrored from sandbox.elemisthemes.com/demo21.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2024 12:54:49 GMT -->
  </html>
