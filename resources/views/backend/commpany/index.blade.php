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
                <h1>Commpany Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">Commpany Profile</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.company.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Nama Commpany</label>
                                        <input type="text" name="nama_commpany" class="form-control"
                                            value="{{ $data->nama_commpany }}">
                                        @error('nama_commpany')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <small class="text-primary"><a
                                                href="{{ asset($data->logo) }}">{{ $data->logo }}</a></small>
                                        <input type="file" name="logo" class="form-control"
                                            value="{{ old('logo') }}">
                                        @error('logo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control"
                                            value="{{ $data->alamat }}">
                                        @error('alamat')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Telpone</label>
                                        <input type="text" name="telpone" class="form-control"
                                            value="{{ $data->telepon }}">
                                        @error('telpone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email Perusahaan</label>
                                        <input type="text" name="email_commpany" class="form-control"
                                            value="{{ $data->email_commpany }}">
                                        @error('email_commpany')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Deskripsi</label>
                                        <textarea class="summernote" name="deskripsi">{{ $data->deskripsi }}</textarea>
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
