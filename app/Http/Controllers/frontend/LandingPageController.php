<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        $paket = PaketWisata::paginate(6);
        $kategori = Kategori::all();

        return view('frontend.home', compact('paket', 'kategori'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function destinasi()
    {
        $data = PaketWisata::paginate(2); // 5 item per halaman
        return view('frontend.destinasi', compact('data'));
    }

    public function destinasiKategori($kategori)
    {
        // Cari ID kategori berdasarkan nama yang dikirimkan di URL
        $kategoriData = Kategori::where('nama', $kategori)->first();

        if (!$kategoriData) {
            abort(404, 'Kategori tidak ditemukan.');
        }

        // Ambil semua paket wisata berdasarkan kategori_id
        $data = PaketWisata::where('kategori_id', $kategoriData->id)->paginate(5);

        return view('frontend.destinasi', compact('data'));
    }

    public function hotel()
    {
        return view('frontend.about');
    }

    public function detail_destinasi($slug)
    {
        $paket = PaketWisata::where('slug_url', $slug)->firstOrFail();

        // Meta tags dinamis
        $meta = [
            'title' => "{$paket->nama_paket} | Paket Wisata Lombok",
            'description' => strip_tags($paket->deskripsi) ?: 'Paket wisata terbaik ke Lombok dengan harga terjangkau.',
            'url' => url("/paket-wisata/{$paket->slug_url}"),
            'image' => asset($paket->gambar ?: 'default-image.jpg'),
        ];

        return view('frontend.detail_destinasi', compact('paket', 'meta'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
