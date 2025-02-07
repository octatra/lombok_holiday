@extends('frontend.index')

@section('meta')
    <title>Destinasi Wisata Terbaik Lombok, Flores dan Pulau Komodo
    </title>

    <meta name="description"
        content="Temukan destinasi wisata terbaik di Lombok, Flores, dan Pulau Komodo dengan keindahan alam nan eksotis">
@endsection


@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('frontend/asset/images/lht/dstinasi.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Destinasi <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-5 bread">Daftar Paket Wisata</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="#" class="search-property-1">
                            <div class="row no-gutters">
                                <div class="col-lg d-flex">
                                    <div class="form-group p-4 border-0">
                                        <label for="#">Destination</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="fa fa-search"></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search place">
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
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
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
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="{{ route('detail_destinasi', $item->slug_url) }}" class="img"
                                style="background-image: url({{ asset('public/' . $item->gambar) }});">
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
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
