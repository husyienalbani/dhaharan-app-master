<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Activity Details</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="{{ asset('/assets/user/img/favicon.png') }}" rel="icon" />
  <link href="{{ asset('/assets/user/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/assets/user/vendor/aos/aos.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/user/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('/assets/user/css/style.css') }}" rel="stylesheet" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />


  <!-- =======================================================
  * Template Name: Mymap - v4.10.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-map/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <main id="main">
    <!-- ======= activity Details Section ======= -->
    <div class="d-grid gap-2 d-sm-flex justify-content-start">
      <a href="/" class="btn btn-outline-danger btn-sm" style="margin-left: 20px; margin-top: 20px;" type="button"><i
          class='bx bx-x'></i></a>
    </div>
    <section id="activity-details" class="activity-details">
      <div class="container" style="background-color: #eeeeed; max-width: 1400px">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="activity-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                @if (count($activities->images)>0)
                @foreach ($activities->images as $img)
                <div class="swiper-slide">
                  <img src="/images/{{$img->image }}" alt="" />
                </div>
                @endforeach
                @endif
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="activity-info" style="background-color: #9db7b3">
              <h3>Informasi Kegitan</h3>
              <ul>
                <li><strong>Nama Kegiatan</strong>: {{ $activities->name }}</li>
                <li><strong>Kategori Kegiatan</strong>: {{ $activities->category->name }}</li>
                <li><strong>Lokasi</strong>: {{ $activities->address }}</li>
                <li><strong>Tanggal</strong>: {{ $activities->date }}</li>
                <li><strong>Pengeluaran</strong>: {{ $activities->cost }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="background-color: #f6f6f6; max-width: 1400px">
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="activity-description" style="text-align: justify; margin: 25px">
              <h2>Detail Kegiatan</h2>
              <p>
                {!! $activities->activityinfo !!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End activity Details Section -->
  </main>
  <!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/assets/user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/assets/user/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/assets/user/js/main.js') }}"></script>

</body>

</html>