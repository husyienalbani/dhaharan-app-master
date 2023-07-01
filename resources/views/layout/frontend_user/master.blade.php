<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dhaharan.id</title>
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
                    <a href="#home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li>
                    <a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                </li>
                <li>
                    <a href="#activity" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Activity</span></a>
                </li>
                <li>
                    <a href="#finance" class="nav-link scrollto"><i class="bx bx-money-withdraw"></i>
                        <span>Finance</span></a>
                </li>
                <li>
                    <a href="#moreinfo" class="nav-link scrollto"><i class="bx bx-info-circle"></i> <span>More
                            Info</span></a>
                </li>
                <li>
                    <a href="/map" class="nav-link scrollto"><i class="bx bx-map-alt"></i> <span>Maps</span></a>
                </li>
                <li>
                    <a href="/login" class="nav-link scrollto"><i class="bx bx-user-circle"></i> <span>Login</span></a>
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </header>
    <!-- End Header -->

    <!-- ======= home Section ======= -->
    <section id="home" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Dhaharan.id</h1>
            <br />
            <h5>"Urun Kabagyan Lumantar Dhaharan"</h5>
            <p>
                <i>Social Comunity</i>
                <span class="typed" data-typed-items="
                <i> that love goodness, through sharing food from the results of cooking together </i>"></span>
            </p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/dhaharan.id/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </section>
    <!-- End home -->

    <main id="main">
        <!-- ======= about Section ======= -->
        <section id="about" class="about" style="background-color: #8fa8a4de;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>ABOUT</h2>
                    <p>
                        <i>Dhaharan.id is a social community that has a vision and goal of providing benefits by holding
                            social activities where it is needed. The dhaharan.id community opens all donations to be
                            distributed by food.</i>
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('/assets/user/img/About/A1.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Openness to Change</i></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/user/img/About/A2.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Openness to Change</i></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/user/img/About/A3.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Openness to Change</i></h5>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('/assets/user/img/About/C1.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Spirit of Togetherness</i></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/user/img/About/C3.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Spirit of Togetherness</i></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/user/img/About/C2.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i> Spirit of Togetherness</i></h5>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('/assets/user/img/About/B1.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Sympaty to Each Other</i></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/user/img/About/B2.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Sympaty to Each Other</i></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('/assets/user/img/About/B3.jpg') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><i>Sympaty to Each Other</i></h5>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End about Section -->

        <!-- ======= tim Section ======= -->
        <section id="tim" class="tim">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>team</h2>
                </div>

                <div class="tim-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tim-item">
                                <img src="{{ asset('/assets/user/img/tim/tim-3.jpg') }}" class="tim-img" alt="" />
                                <h3>M Noval Abdul</h3>
                                <h4>CEO (Chief Executive Officer) </h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Bersama dhaharan jadi belajar banyak tentang kesenjangan pangan dan hal tersebut
                                    meningkatkan kepedulian kita untuk terus berbagi dan mengedukasi.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="tim-item">
                                <img src="{{ asset('/assets/user/img/tim/tim-4.jpg') }}" class="tim-img" alt="" />
                                <h3>Esa Akbar</h3>
                                <h4>COO (Chief Operating Officer)</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Coba dulu aja sekali kalo tuman gasskeun ikut dhaharan...dhaharan merupakan wadah yg
                                    asyik & unik untuk belajar masak dan berbagi kepada sesama.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="tim-item">
                                <img src="{{ asset('/assets/user/img/tim/tim-2.jpg') }}" class="tim-img" alt="" />
                                <h3>Indah Permata</h3>
                                <h4>CFO (Chief Financial Officer)</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Semoga Dhaharan bisa lebih luas dalam menebar kebaikan.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="tim-item">
                                <img src="{{ asset('/assets/user/img/tim/tim-5.jpg') }}" class="tim-img" alt="" />
                                <h3>Dwi Ria Rizkiana</h3>
                                <h4>Head of Kitchen</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Kegiatan dhaharan sangat menyenangkan dan membawa banyak manfaat, selain bisa
                                    bertemu banyak teman baru, di dhaharan kita juga bisa belajar memasak dan membuat
                                    makanan ringan. Poin plusnya lagi dhaharan bisa menambah rasa syukur kita karena
                                    telah diberikan banyak rezeki untuk bisa saling berbagi. Semoga kegiatan dhaharan
                                    bisa terus berlanjut sampai
                                    kapanpun, bisa menyebarkan banyak manfaat pada lebih banyak orang yang membutuhkan
                                    dan juga bisa lebih tepat sasaran sesuai tujuan dhaharan.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="tim-item">
                                <img src="{{ asset('/assets/user/img/tim/tim-1.jpg') }}" class="tim-img" alt="" />
                                <h3>Tasya Ayu</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Dhaharan mengajak kita melihat banyak ‘kekurangan’ sehingga memantik kita untuk
                                    mengupayakan lebih banyak kebaikan, salah satunya melalui program belajar memasak
                                    dan berbagi makanan sehat.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End tim Section -->

        <!-- ======= activity Section ======= -->
        <section id="activity" class="activity section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>ACTIVITY</h2>
                    <p>
                        <i>The activities of dhaharan.id community include social activities, skills training, and
                            learning to cook. Everyone can join the activity.</i>
                    </p>
                </div>


                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-sosial-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-sosial" type="button" role="tab" "
                                    aria-selected=" true"><b>SOSIAL</b></button>
                        <button class="nav-link" id="nav-edukasi-tab" data-bs-toggle="tab" data-bs-target="#nav-edukasi"
                            type="button" role="tab"" aria-selected=" false"><b>EDUKASI</b></button>
                        <button class="nav-link" id="nav-tutorial-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-tutorial" type="button" role="tab" "
                                    aria-selected=" false"><b>TUTORIAL</b></button>
                    </div>
                </nav>


                <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
                    <div class="tab-pane fade show active" id="nav-sosial" role="tabpanel">
                        <div class="row">
                            @foreach ($cover_sosials as $cover_sosial)
                            <div class="col-lg-4 col-md-6 kegiatan-item" style="padding: 10px;">
                                <div class="activity-wrap">
                                    <img src="/cover/{{$cover_sosial->cover }}" class="img-fluid" alt="" />
                                    <div class="activity-info">
                                        <h4>{{ $cover_sosial->name }}</h4>
                                        <p>{{ $cover_sosial->date}}</p>
                                        <div class="activity-links">
                                            <a href="{{ route('detail', $cover_sosial->id) }}"
                                                title="activity Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-edukasi" role="tabpanel">
                        <div class="row">
                            @foreach ($cover_educations as $cover_edukasi)
                            <div class="col-lg-4 col-md-6">
                                <div class="activity-wrap">
                                    <img src="/cover/{{$cover_edukasi->cover }}" class="img-fluid" alt="" />
                                    <div class="activity-info">
                                        <h4>{{ $cover_edukasi->name }}</h4>
                                        <p>{{ $cover_edukasi-> date }}</p>
                                        <div class="activity-links">
                                            <a href="{{ route('detail', $cover_edukasi->id) }}"
                                                title="activity Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-tutorial" role="tabpanel">
                        <div class="row">
                            @foreach ($cover_tutorials as $cover_tutorial)
                            <div class="col-lg-4 col-md-6">
                                <div class="activity-wrap">
                                    <img src="/cover/{{$cover_tutorial->cover }}" class="img-fluid" alt="" />
                                    <div class="activity-info">
                                        <h4>{{ $cover_tutorial->name }}</h4>
                                        <p>{{ $cover_tutorial->date }}</p>
                                        <div class="activity-links">
                                            <a href="{{ route('detail', $cover_tutorial->id) }}"
                                                title="activity Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>



        </section>
        <!-- End activity Section -->

        <!-- ======= finance Section ======= -->
        <section id="finance" class="finance">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>FINANCE</h2>
                    <p>
                        <i>All the financial income of the dhaharan community comes from the donations of helpful
                            people.</i>
                    </p>
                </div>

                <div class="table-responsive" style="margin-left: 30px; margin-right: 30px">
                    <h5 style="margin-bottom: 30px;"">
                        <b>Informasi Donasi</b>
                    </h5>
                    <table id=" tabeldonasi" class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Nominal</th>
                                <th>More Info</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->donation_name }}</td>
                                <td>{{ $post->donation_category}}</td>
                                <td>{{ $post->donation_nominal}}</td>
                                <td>{{ $post->donation_information}}</td>
                                <td>{{ $post->donation_date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
                {{$posts->links()}}

                <div class="table-responsive" style="margin-left: 30px; margin-right: 30px; margin-top: 50px">
                    <h5 style="margin-bottom: 30px;"">
                        <b>Informasi Pengeluaran</b>
                    </h5>
                    <table id=" tabelpengeluaran" class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Cost</th>
                                <th>Date</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts2 as $post2)
                            <tr>
                                <td>{{ $post2->expense_name }}</td>
                                <td>{{ $post2->expense_date }}</td>
                                <td>{{ $post2->expense_nominal }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
                {{$posts2->links()}}

                <div class="table-responsive" style="margin-left: 30px; margin-right: 30px; margin-top: 50px">
                    <h5 style="margin-bottom: 30px;"">
                        <b>Informasi Saldo</b>
                    </h5>
                    <table id=" tabelsaldo" class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Income</th>
                                <th>Expense</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts3 as $post3)
                            <tr>
                                <td>{{ $post3->date }}</td>
                                <td>{{ $post3->income }}</td>
                                <td>{{ $post3->expense }}</td>
                                <td>{{ $post3->saldo }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
                {{$posts3->links()}}
            </div>
        </section>
        <!-- End finance Section -->

        <!-- ======= moreinfo Section ======= -->
        <section id="moreinfo" class="moreinfo section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>MORE INFO</h2>
                    <p>
                        <i>Here is our contact information. Please register as a member of dhaharan.id to be able to add
                            location information for people who need help</i>
                    </p>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Surakarta Regency</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>dhaharanid.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 812 3137 0015</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="alert alert-warning text-center" role="alert">
                            <h4 class="alert-heading"><b>ANNOUNCEMENT!</b></h4>
                            <p><i>Please register here</i></p>
                            <a href="/register" class="btn btn-danger" tabindex="-1" role="button">REGISTRASI</a>
                            <hr><i>If you do good, you do good for your own souls”</i> (QS. Al-Isra:7)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/dhaharan.id/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Dhaharan.id</span></strong>. All Rights Reserved
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

    {{-- <script src="{{ asset('/assets/user/js/datatables.js') }}"></script> --}}
</body>

</html>