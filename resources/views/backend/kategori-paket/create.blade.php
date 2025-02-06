@extends('backend.index')

@section('title')
    Tambah Paket Wisata | Lombok Tour Travel
@endsection

@section('cdn')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Kategori Wisata</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Kategori Wisata</a></div>
                    <div class="breadcrumb-item">Tambah Kategori Wisata</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.kategori-paket.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="text" name="nama_kategori" class="form-control"
                                            value="{{ old('nama_kategori') }}">
                                        @error('nama_kategori')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="gambar" class="form-control"
                                            value="{{ old('gambar') }}">
                                        @error('gambar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Deskripsi</label>
                                        <textarea class="summernote" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                        @error('deskripsi')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection()

@section('js')
    <script>
        var quill = new Quill('#deskripsi', {
            theme: 'snow'
        });

        var quill = new Quill('#fasilitas', {
            theme: 'snow'
        });
    </script>
@endsection
