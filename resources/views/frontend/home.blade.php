@extends('frontend.index')

@section('meta')
    <title>Paket Wisata Lombok, Flores & Komodo - Tour Murah & Terpercaya</title>

    <meta name="description"
        content="Temukan paket wisata terbaik ke Lombok, Flores, dan Pulau Komodo bersama Lombok Holiday Travel. Nikmati liburan eksotis dengan layanan terbaik dan harga terjangkau!">
@endsection


@section('content')
    <div class="hero-wrap js-fullheight"
        style="background-image: url('{{ asset('frontend/asset/images/lht/bg_rinjani.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Selamat datang di Lombok Holiday Tour & Travel </span>
                    <h1 class="mb-4">Temukan Tempat Favorit Anda bersama Kami</h1>
                    <p class="caps">Bepergian ke sudut mana pun di Lombok tanpa ragu</p>
                </div>
                {{-- <a href="https://vimeo.com/45830194"
            class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
            <span class="fa fa-play"></span>
        </a> --}}
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt" style="background: rgb(246, 243, 243)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                        href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                        aria-selected="true">Tour</a>

                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">

                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                        aria-labelledby="v-pills-nextgen-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Destinasi</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search place">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-in</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkin_date"
                                                                placeholder="Check In Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-out</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkout_date"
                                                                placeholder="Check Out Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Harga</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span>
                                                                </div>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">Rp. 100</option>
                                                                    <option value="">Rp. 10,000</option>
                                                                    <option value="">Rp. 50,000</option>
                                                                    <option value="">Rp. 100,000</option>
                                                                    <option value="">Rp. 200,000</option>
                                                                    <option value="">Rp. 300,000</option>
                                                                    <option value="">Rp. 400,000</option>
                                                                    <option value="">Rp. 500,000</option>
                                                                    <option value="">Rp. 600,000</option>
                                                                    <option value="">Rp. 700,000</option>
                                                                    <option value="">Rp. 800,000</option>
                                                                    <option value="">Rp. 900,000</option>
                                                                    <option value="">Rp. 1,000,000</option>
                                                                    <option value="">Rp. 2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Cari"
                                                                class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                        aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Destination</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search place">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-in</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkin_date"
                                                                placeholder="Check In Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-out</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkout_date"
                                                                placeholder="Check Out Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Harga</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="" id=""
                                                                    class="form-control">
                                                                    <option value="">Rp. 100</option>
                                                                    <option value="">Rp. 10,000</option>
                                                                    <option value="">Rp. 50,000</option>
                                                                    <option value="">Rp. 100,000</option>
                                                                    <option value="">Rp. 200,000</option>
                                                                    <option value="">Rp. 300,000</option>
                                                                    <option value="">Rp. 400,000</option>
                                                                    <option value="">Rp. 500,000</option>
                                                                    <option value="">Rp. 600,000</option>
                                                                    <option value="">Rp. 700,000</option>
                                                                    <option value="">Rp. 800,000</option>
                                                                    <option value="">Rp. 900,000</option>
                                                                    <option value="">Rp. 1,000,000</option>
                                                                    <option value="">Rp. 2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Cari"
                                                                class="align-self-stretch form-control btn btn-primary p-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section" style="background: rgb(246, 243, 243)">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Selamat datang Lombok Holiday Tour & Travel</span>
                        <h2 class="mb-2">Saatnya memulai petualangan Anda</h2>
                        <p>Pulau Lombok memiliki ribuan kilometer pantai, dan jutaan kilometer persegi perairan,
                            menjadikannya surga bagi para pecinta olahraga air sepanjang masa. Deburan ombak, laut yang
                            masih biru, terumbu karang yang masih alami, dan pulau-pulau terpencil yang belum dijelajahi
                            menciptakan lingkungan yang luar biasa untuk Berselancar, Berenang, Trekking , atau sekedar
                            Bersantai di pantai.</p>
                        {{-- <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend/asset/images/lht/IMG_20141224_144929.jpg') }}"
                        class="services services-1 color-1 d-block alt="" srcset=""
                        style="background: none; padding: 0">
                    {{-- <div class="row">
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-1 d-block img"
                        style="background-image: url('{{ asset('frontend/asset/images/lht/IMG_20141222_125337.jpg') }}');">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-paragliding"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Activities</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-2 d-block img"
                        style="background-image: url('{{ asset('frontend/asset/images/lht/IMG_20141223_120718.jpg') }}');">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-route"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Travel Arrangements</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-3 d-block img"
                        style="background-image: url('{{ asset('frontend/asset/images/lht/IMG_20141224_144929.jpg') }}');">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-tour-guide"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Private Guide</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                    <div class="services services-1 color-4 d-block img"
                        style="background-image: url('{{ asset('frontend/asset/images/lht/IMG_0023.JPG') }}');">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-map"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Location Manager</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-select-destination"
        style="background-image: url({{ asset('frontend/asset/images/Bg/9987357.png') }});">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Lombok Holiday Tour & Travel</span>
                    <h2 class="mb-4">Pilih Tujuan Anda</h2>
                </div>
            </div>
        </div>
        <div class="container container-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-destination owl-carousel ftco-animate">
                        @foreach ($kategori as $item)
                            <div class="item">
                                <div class="project-destination">
                                    <a href="#" class="img"
                                        style="background-image: url({{ asset($item->gambar) }});">
                                        <div class="text">
                                            <h3>{{ $item->nama }}</h3>
                                            {{-- <span>8 Tours</span> --}}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" style="background: rgb(246, 243, 243)">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Destinasi</span>
                    <h2 class="mb-4">Paket Wisata</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($paket as $item)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="{{ route('detail_destinasi', $item->slug_url) }}" class="img"
                                style="background-image: url({{ asset($item->gambar) }});">
                                <span class="price">Rp. {{ number_format($item->harga, 2, ',', '.') }} / Orang</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">{{ $item->kategoris->nama }}</span>
                                <h3><a href="{{ route('detail_destinasi', $item->slug_url) }}">{{ $item->nama_paket }}</a>
                                </h3>
                                {{-- <p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p> --}}
                                {{-- <ul>
                        <li><span class="flaticon-shower"></span>2</li>
                        <li><span class="flaticon-king-size"></span>3</li>
                        <li><span class="flaticon-mountains"></span>Near Mountain</li>
                    </ul> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section
        class="ftco-section ftco-about img"style="background-image: url('{{ asset('frontend/asset/images/lht/mount-rinjani-lake.jpg') }}');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    {{-- <a href="https://vimeo.com/45830194"
                        class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image:url('{{ asset('frontend/asset/images/lht/IMG_20150421_144942.jpg') }}');">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Tentang Kami</span>
                                    <h2 class="mb-4">Jadikan Perjalanan Wisata Anda Berkesan dan Aman Bersama Kami
                                    </h2>
                                    <p>Mulai dari Gili Trawangan, Gili Meno, Gili Air, Gili Nanggu serta masih banyak
                                        lagi Gili-gili yang lainnya . Gunung Rinjani yang merupakan Gunung Berapi
                                        tertinggi kedua di Indonesia dengan ketinggian puncaknya mencapai 3.726 m dpl
                                        merupakan magnet tersendiri bagi wisatawan yang mempunyai hobi trekking.</p>
                                    <p><a href="#" class="btn btn-primary">Pesan Destinasi Anda</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
