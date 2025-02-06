@extends('backend.index')

@section('title')
    Detail Kategori Paket
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Detail Kategori Paket</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Kategori</a></li>
                                <li class="breadcrumb-item active">Detail Kategori Paket</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Kategori Paket</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Nama Kategori</label>
                                    <input class="form-control" type="text" placeholder="Nama Kategori" name="nama"
                                        value="{{ $data->nama }}" disabled>
                                    @error('nama')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <img src="{{ $data->nama }}" alt="Gambar Tidak Ditemukan" srcset="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" disabled>{{ $data->deskripsi }}</textarea>
                                </div>
                                <a href="{{ route('admin.kategori-paket') }}" class="btn btn-outline-primary">Kembali</a>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
