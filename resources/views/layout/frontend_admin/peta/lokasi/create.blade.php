@extends('layout.master_admin.create')
@section('title')
<title>Create Place</title>
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
                    class="zmdi zmdi-arrow-left zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                ADD LOCATION
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card" style="margin-bottom: -5px">
                        <div class="card-body">
                            {{-- untuk memunculkan map kita menggunakan tag div yang memiliki id map --}}
                            <div class="" id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="Name" class="form-label"><b>Location Name</b></label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" placeholder="Masukan Nama Lokasi"
                                                    style="font-size: small" />
                                                <!-- error message untuk title -->
                                                @error('name')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="category" class="form-label"><b>Map Category</b></label>
                                                <select class="form-control @error('category_id') is-invalid @enderror"
                                                    name="category_id" id="category_id" style="font-size: small">
                                                    <option value="" selected disabled style="font-size: small">Pilih
                                                        Kategori Lokasi</option>
                                                    {{-- melakukan looping data category yang sbelumnya sudah kita
                                                    panggil
                                                    dari controller spot pada method create. Dan kita juga name pada
                                                    class
                                                    select yaitu category_id supaya bisa memuat fungsi select2 --}}
                                                    @forelse ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @empty
                                                    <option value="">Kategori tidak ditemukan</option>
                                                    @endforelse
                                                </select>
                                                @error('category_id')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: -15px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="location" class="form-label"><b>Location</b></label>
                                                <input type="text" name="location" id="location" readonly
                                                    class="form-control  @error('location') is-invalid @enderror"
                                                    value="{{ old('location') }}">
                                                @error('location')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: -15px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="" class="form-label"><b>More Info</b></label>
                                                <textarea
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    name="PlaceInfo" rows="5" placeholder="PlaceInfo"></textarea>
                                                @error('PlaceInfo')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: -10px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"><b>Image Cover</b></label>
                                                <input class="form-control @error('cover') is-invalid @enderror"
                                                    name="cover" type="file" style="font-size: small" />
                                                @error('cover')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"><b>Gambar Kegiatan</b></label>
                                                <input class="form-control @error('image_places') is-invalid @enderror"
                                                    name="image_places[]" multiple type="file"
                                                    style="font-size: small" />
                                                @error('image_places')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                Save
                            </button>
                            <button type="reset" class="btn btn-warning btn-sm">
                                Riset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('js')
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace("PlaceInfo");
        </script>
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


        // menambahkan baselayer dan overlays tadi ke dalam control dan di tampilkan ke tag map
        L.control.layers(baseLayers).addTo(map);
        

        // set koordinat lokasi ke dalam curLocation yang mana nilai dari curLocation juga akan
        // digunakan untuk menampilkan marker pada map
        var mapcenter = map.getCenter();
        map.attributionControl.setPrefix(false);

        var marker = new L.marker(mapcenter, {
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
        
        // Menambahkan kontrol lokasi ke dalam peta
        L.control.locate().addTo(map);

        // Menambahkan event listener untuk mengikuti lokasi terkini pengguna
        map.on('locationfound', function(e) {
            // Mengubah posisi marker ke lokasi terkini pengguna
            marker.setLatLng(e.latlng);

            // Mengarahkan peta ke lokasi terkini pengguna
            map.setView(e.latlng, 20);

            // Mengisi nilai koordinat pada form dengan name dan id 'location'
            const locationInput = document.querySelector('input[name="location"]');
            locationInput.value = e.latlng.lat + ', ' + e.latlng.lng;
        });

        // Menambahkan event listener untuk menangani kesalahan dalam mengikuti lokasi pengguna
        map.on('locationerror', function(e) {
            alert("Tidak dapat menemukan lokasi Anda");
        });

        </script>

        @endsection