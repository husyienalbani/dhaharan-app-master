@extends('layout.master_admin.create')
@section('title')
<title>Show</title>
@endsection
@section('styles')

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
        height: 400px
    }
</style>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/places" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-close zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                DETIL INFORMASI
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding: 10px">
                        <div class="card-body">
                            {{-- untuk memunculkan map kita menggunakan tag div yang memiliki id map --}}
                            <div class="" id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card" style="padding: 10px;">
                        <img src="/coverplace/{{$post->cover }}" class="card-img-top"
                            style="padding: 10px; display:block; margin-right:auto; margin-left:auto; width:75%">
                        <div class="card-body" style="padding:5px">
                            <h7 class="card-title" style="font-size: 13px">Gambar Cover</h7>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card" style="padding: 10px;">
                        @if (count($post->images)>0)
                        @foreach ($post->images as $img)
                        <img src="/imageplace/{{$img->image }}" class="card-img-top"
                            style="padding: 10px; display:block; margin-right:auto; margin-left:auto; width:75%">
                        @endforeach
                        @endif
                        <div class="card-body" style="padding:5px">
                            <h7 class="card-title" style="font-size: 13px">Gambar Kegiatan</h7>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 100%; margin-left:10px; margin-right:10px; margin-top:-10px;">
                    <ul class="list-group" style="margin-left: 30px; margin-right: 30px;">
                        <p class="card-text" style="margin-top: 10px;"> <b>Nama Lokasi</b></p>
                        <li class="list-group-item"
                            style="font-size: small; background-color: rgba(255, 255, 255, 0.257);">{{ $post->name
                            }}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Kategori</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">{{
                            $post->categoryPlace->name}}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Lokasi</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">
                            {{ $post->location}}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Deskripsi</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257); margin-bottom:20px;">
                            {!!$post->PlaceInfo !!}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endsection
        @section('maps')
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

        // // set overlayer yang ingin digunakan
        // var overlays = {
        //     "Streets": streets
        // };

        // menambahkan baselayer dan overlays tadi ke dalam control dan di tampilkan ke tag map
        L.control.layers(baseLayers).addTo(map);
        L.control.locate().addTo(map);

        // set koordinat lokasi ke dalam curLocation yang mana nilai dari curLocation juga akan
        // digunakan untuk menampilkan marker pada map
        var curLocation = [{{ $post->location }}];
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

        @endsection