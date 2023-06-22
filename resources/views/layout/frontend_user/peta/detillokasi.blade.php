<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Location Details</title>
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

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

  <script src="
  https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js
  "></script>
  <link href="
  https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css
  " rel="stylesheet">
  <style>
    #map {
      height: 280px
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
  <main id="main">
    <!-- ======= activity Details Section ======= -->
    <div class="d-grid gap-2 d-sm-flex justify-content-start">
      <a href="/map/#peta" class="btn btn-outline-danger btn-sm" style="margin-left: 20px; margin-top: 20px;"
        type="button"><i class='bx bx-x'></i></a>
    </div>
    <section id="activity-details" class="activity-details">
      <div class="container" style="background-color: #eeeeed; max-width: 1400px">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="activity-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                @if (count($places->images)>0)
                @foreach ($places->images as $img)
                <div class="swiper-slide">
                  <img src="/imageplace/{{$img->image }}" alt="" />
                </div>
                @endforeach
                @endif
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="activity-info" style="background-color: #9db7b3">
              <h3>Informasi Lokasi</h3>
              <ul>
                <li><strong>Nama Lokasi</strong>: {{ $places->name }}</li>
                <li><strong>Kategori Kegiatan</strong>: {{ $places->categoryPlace->name }}</li>
                <li><strong>Lokasi</strong>: {{ $places->location }}</li>
              </ul>
            </div>
            <div class="card" style="margin-top: 10px">

              {{-- untuk memunculkan map kita menggunakan tag div yang memiliki id map --}}
              <div class="" id="map"></div>

            </div>
          </div>
        </div>
      </div>
      <div class="container" style="background-color: #f6f6f6; max-width: 1400px">
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="activity-description" style="text-align: justify; margin: 20px">
              <h2>Detail Informasi</h2>
              <p>
                {!! $places->PlaceInfo !!}
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
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script>
    // membuat variabel untuk load attribute dan url pada map
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
      center: [{{ $places->location }}],
      zoom: 23,
      layers: [satellite]
  });

  // set baselayer yang ingin digunakan
  var baseLayers = {
      //"Grayscale": grayscale,
      "Streets": streets,
      "Satellite":satellite,
      "Dark":dark
  };

  // // set overlayer yang ingin digunakan
  // var overlays = {
  //     "Streets": streets
  // };

  // menambahkan baselayer dan overlays tadi ke dalam control dan di tampilkan ke tag map
  L.control.layers(baseLayers).addTo(map);
  L.control.locate().addTo(map);

  // set koordinat lokasi ke dalam curLocation yang mana nilai dari curLocation juga akan
  // digunakan untuk menampilkan marker pada map
  var curLocation = [{{ $places->location }}];
  map.attributionControl.setPrefix(false);

  var marker = new L.marker(curLocation, {
      draggable: 'true',
  });
  map.addLayer(marker);

  // dan ketika marker tersebut di geser akan mendapatkan titik koordinat yaitu latitude  dan longitudenya
  // lalu menambahkan titik koordinat tersebut ke dalam tag input dengan namenya location 
  marker.on('dragend', function(event) {
      var location = marker.getLatLng();
      marker.setLatLng(location, {
          draggable: 'true',
      }).bindPopup(location).update();

      $('#location').val(location.lat + "," + location.lng).keyup()
  });

  // selain itu dengan fungsi di bawah juga bisa mendapatkan nilai latitude dan longitude
  // dengan cara klik lokasi pada map maka nilai latitude dan longitudenya juga akan
  // langsung muncul pada input text location

  var loc = document.querySelector("[name=location]");
  map.on("click", function(e) {
      var lat = e.latlng.lat;
      var lng = e.latlng.lng;

      if (!marker) {
          marker = L.marker(e.latlng).addTo(map);
      } else {
          marker.setLatLng(e.latlng);
      }
      loc.value = lat + "," + lng;
  });
  </script>

</body>

</html>