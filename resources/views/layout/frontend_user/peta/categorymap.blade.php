<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dhaharan</title>
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

    {{-- cdn leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    {{-- cdn leaflet my location --}}
    <script src="
    https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css
    " rel="stylesheet">

    {{-- cdn leaflet fullscreen --}}
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
        rel='stylesheet' />

    {{-- cdn leaflet search --}}
    <script src="//unpkg.com/@sjaakp/leaflet-search/dist/leaflet-search.js"></script>
    {{--
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script> --}}

    <style>
        #map {
            height: 500px
        }
    </style>
    <!-- =======================================================
  * Template Name: Mymap - v4.10.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-map/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li>
                    <a href="#peta" class="nav-link scrollto"><i class="bx bx-map-alt"></i> <span>Maps</span></a>
                </li>
                <li>
                    <a href="/map" class="nav-link scrollto"><i class='bx bx-log-out'></i></i>
                        <span>Back</span></a>
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </header>
    <!-- End Header -->


    <main id="main">
        <!-- ======= map Section ======= -->
        <section id="peta" class="map">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>PETA {{ $category->name }}</h2>
                    <div class="row" style="margin-top: 10px">
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="" id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End map Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Mymap</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX moreinfo form: https://bootstrapmade.com/free-html-bootstrap-template-my-map/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

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

<script>
    var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            mbUrl =
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWF1bGF5eWFjeWJlciIsImEiOiJja3N5bTU2ZTkxZGMyMnZsZ2V2aTc5enlrIn0.AoQDAKuMyXgRBRptUQ-8Bw';

        // membuat var satellite, dark, dan streets agar layer map kita punya beberapa opsi tampilan yang bisa kita ubah 
        var satellite = L.tileLayer(mbUrl, {
                id: 'mapbox/satellite-streets-v10',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            }),
            dark = L.tileLayer(mbUrl, {
                id: 'mapbox/dark-v11',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            }),
            streets = L.tileLayer(mbUrl, {
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            });

        // mendefinisikan var map. Menambahkan opsi seperti center untuk menentukan latitude dan longitude,
        // mengantur zoom map saat di load dan memuat layer yang di inginkan.
        // Untuk nilai dari latitude longitude bisa disesuaikan dengan lokasi yang di inginkan 
        // nilai latitude dan longitude bisa di ambil dari google map
        var map = L.map('map', {
            center: [-7.841615185204699, 110.34667968750001],
            zoom: 8,
            layers: [satellite]
        });

        // set baselayer yang ingin digunakan
        var baseLayers = {
            //"Grayscale": grayscale,
            "Streets": streets,
            "Satellite":satellite,
            "Dark":dark
        };
       
  
        L.control.layers(baseLayers).addTo(map);
        L.control.locate().addTo(map);
        L.control.search({ position: 'topleft' }).addTo(map);
    
        @foreach ($place as $item)
            L.marker([{{ $item->location }}])
            .bindPopup(
                    "<div class='my-2'><img src='{{ $item->getImage() }}' class='img-fluid' width='700px'></div>" +
                    "<div class='my-2'><strong>Nama Spot:</strong> <br>{{ $item->name }}</div>"+
                    "<div class='my-2'><a href='{{ route('cek-rute', $item->id) }}' class='btn btn-outline-primary btn-sm'>Lihat Rute</a> <a href='{{ route('detail_lokasi', $item->id) }}' class='btn btn-outline-info btn-sm'>Detail Lokasi</a></div>" +
                    "<div class='my-2'></div>"
                )
            .addTo(map);
        @endforeach
</script>

</html>