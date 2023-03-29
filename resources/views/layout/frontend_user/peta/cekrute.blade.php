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

  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css">
  <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>

  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
    rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
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
  <main id="main">
    <!-- ======= activity Details Section ======= -->
    <div class="d-grid gap-2 d-sm-flex justify-content-start">
      <a href="/map" class="btn btn-outline-danger btn-sm" style="margin-left: 20px; margin-top: 20px;" type="button"><i
          class='bx bx-x'></i></a>
    </div>
    <section id="activity-details" class="activity-details">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">{{ __('Cek Rute') }}</div>

              <div class="card-body">
                <div id="map" style="height: 500px;"></div>
              </div>
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

   // seperti di bawah
        if (!navigator.geolocation) {
            console.log("Browser doesn't support");
        } else {
            console.log(navigator.geolocation.getCurrentPosition(getPosition));
        }

        var data{{ $places->id }} = L.layerGroup();

        // fungsi ini untuk menampilkan map secara penuh pada browser
        var map = L.map('map', {
            center: [{{ $places->location }}],
            fullscreenControl: {
                pseudoFullscreen: false
            },
            zoom: 10,
            layers: [streets, data{{ $places->id }}]
        });

        // mengatur baselayer
        var baseLayers = {
            "Streets": streets,
            "Satellite": satellite,
            "Dark": dark,
        };


        L.control.layers(baseLayers).addTo(map);
        L.control.locate().addTo(map);
        L.marker([{{ $places->location }}]).bindPopup(
            "<div class='my-2'><img src='{{ $places->getImage() }}' class='img-fluid' width='700px'></div>" +
            "<div class='my-2'><strong>Nama Lokasi:</strong> <br>{{ $places->name }}</div>" +
            "<div class='my-2'><a href='{{ route('detail_lokasi', $places->id) }}' class='btn btn-outline-info btn-sm'>Detail Lokasi</a></div>"
            ).addTo(map);


        // Untuk bagian ini kita akan membuat function untuk mendapatkan lokasi koordinat user 
        // membuat variabel marker, circle,latPos (latitude position user),longPos(longitude position user)
        var marker, circle, latPos, longPos
        function getPosition(position) {
            // console.log("ini latitudenya", position.coords.latitude);
            // console.log("ini longitudenya", position.coords.longitude);

            // pada var latPos, longPos dan accuracy kita akan mengambil nilai latitude longitude dan accuracy
            // dengan sintaks position.coords di bawah kemudian memasukkannya pada variabel yang sudah di definisikan
            
            var latPos = position.coords.latitude
            var longPos = position.coords.longitude
            var accuracy = position.coords.accuracy

            if (marker) {
                map.removeLayer(circle)
            }

            // Kemudian membuat marker dan circle dari masing-masing nilai dari variabel latPos dan longPos
            // yang sudah kita definisikan diatas
            marker = L.marker([latPos, longPos])
            circle = L.circle([latPos, longPos]), {
                radius: accuracy
            }

            // membuat featureGrooup sehinggankita bisa menambahkan beberapa opsi pada layer
            // seperti di bawah kita menambahkan marker, circle, dan popup untuk di tampilkan pada peta
            var featureGroup = L.featureGroup([marker, circle])
            .bindPopup("<div class='text-center'><strong>My Location</strong></div>")
            .addTo(map)
            map.fitBounds(featureGroup.getBounds())

            // Setelah itu buat routing control untuk memuat waypoint (latitude dan longitude) 
            // yang pertama waypoint dari lokasi kita dan yang kedua waypoint lokasi tujuan
            // yang mana nilainya kita dapatkan dari $spots->location

            L.Routing.control({
                waypoints: [
                    L.latLng(latPos, longPos),
                    L.latLng({{ $places->location }}),
                ],
                // mengatur warna dan ukuran garis penghubung antara lokasi user dan tujuan
                lineOptions: {
                    styles: [{
                        color: 'red',
                        opacity: 1,
                        weight: 3
                    }]
                },
                createMarker: function() {return null}
            }).addTo(map);

        }
  </script>

</body>

</html>