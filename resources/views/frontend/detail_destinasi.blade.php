@extends('frontend.index')

@section('cdn')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection

@section('meta')
    <title>{{ $paket->nama_paket }}</title>


    <meta name="description" content="{{ $meta['description'] }}" />
    <link rel="canonical" href="{{ $meta['url'] }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $meta['title'] }}" />
    <meta property="og:description" content="{{ $meta['description'] }}" />
    <meta property="og:url" content="{{ $meta['url'] }}" />
    <meta property="og:image" content="{{ $meta['image'] }}" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $meta['title'] }}" />
    <meta name="twitter:description" content="{{ $meta['description'] }}" />
    <meta name="twitter:image" content="{{ $meta['image'] }}" />
@endsection

@section('cdn')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .ql-editor {
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        .ql-editor img {
            max-width: 100%;
            height: auto;
        }

        .ql-editor ul,
        .ql-editor ol {
            padding-left: 20px;
        }
    </style>
@endsection


@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('frontend/asset/images/lht/kontak.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Tentang Kami</span></p>
                    <h1 class="mb-0 bread">{{ $paket->nama_paket }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section mt-4">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100" style="color: black; text-align: justify">
                        <h2 class="mb-4">{{ $paket->nama_paket }}</h2>
                        <img src="{{ asset('public/' . $paket->gambar) }}" alt="" srcset="" width="80%">
                        <div class="ql-editor p-0">
                            {!! $paket->deskripsi !!}
                            {!! $paket->fasilitas !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".ql-editor").forEach(function(el) {
                el.classList.add("ql-snow");
            });
        });
    </script>
@endsection
