@extends('frontend.index')

@section('meta')
    <title>Hubungi Lombok Holiday Travel untuk pemesanan</title>

    <meta name="description" content="Hubungi kami hari ini dan kami membantu anda untuk Liburan yang berkesan">
@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('frontend/asset/images/lht/kontak.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Kontak</span></p>
                    <h1 class="mb-0 bread">Kontak</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100" style="color: black; text-align: justify">
                        <h2>
                            CV . LOMBOK HOLIDAY TOUR & TRAVEL
                        </h2>
                        <h3 class="mb-4">JL.Raya Senggigi Km 12 - Lombok - NTB - Indonesia</h3>
                        <p>Nomer Telpone <a href="">081 805 712 752</a></p>
                        <p>Alamat Email : <a href="mailto:lombokholidaytour@gmail.com">lombokholidaytour@gmail.com</a></p>
                        <p>Website : <a href="https://lombokholidaytravel.com/">lombokholidaytravel.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12 d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2346.306767640664!2d116.04764846108712!3d-8.499194617022404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc27153365239%3A0xfc1027b8cd41e5fa!2sLombok%20Holiday%20Tour!5e0!3m2!1sen!2sid!4v1738154319433!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
