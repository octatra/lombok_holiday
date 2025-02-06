@extends('backend.index')

@section('title')
    Paket Wisata | Lombok Tour Travel
@endsection

@section('cdn')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Paket Wisata</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Paket Wisata</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.paket-wisata.create') }}" class="btn btn-primary">Tambah Paket
                                    Wisata</i></a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket Wisata</th>
                                        <th>Kategori Paket</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($data as $indeks => $item)
                                        <tr>
                                            <td>{{ $indeks++ }}</td>
                                            <td>{{ $item->nama_paket }}</td>
                                            <td>{{ $item->kategoris->nama }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td> <a href="{{ asset($item->gambar) }}" target="_blank">Lihat Gambar</a>
                                            <td>
                                                <button onclick="confirmDelete({{ $item->id }})"
                                                    class="btn btn-danger">Delete</button>
                                                {{-- <a href="{{ url('user/delete/' . $item->id) }}" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pertanyaan ini?')">Hapus</a> --}}
                                                <a href="{{ route('admin.paket-wisata.edit', $item->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
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
        function confirmDelete(id) {
            Swal.fire({
                title: "Apakah kamu yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/admin/paket-wisata/delet/" + id;
                }
            });
        }
    </script>
@endsection
