<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriPaketController extends Controller
{
    public function index()
    {
        $data = Kategori::all();
        return view('backend.kategori-paket.index', ['data' => $data]);
    }

    public function create()
    {
        return view('backend.kategori-paket.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $slug_name = strtolower($request->nama);

        $imageName = time() . '.' . $request->gambar->extension(); // Generate nama unik
        $request->gambar->move(public_path('assets/kategori'), $imageName); // Simpan ke folder 'public/images'

        // Proses penyimpanan
        $data = [
            'nama' => $request->nama_kategori,
            'gambar' => 'assets/kategori/' . $imageName,
            'deskripsi' => $request->deskripsi,
            'slug_url' => $slug_name,
        ];

        // Simpan ke database (contoh jika Anda menggunakan model Kategori)
        Kategori::create($data);

        return redirect()->route('admin.kategori-paket')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function detail($id)
    {
        $data = Kategori::findOrFail($id);
        return view('backend.kategori-paket.detail', compact('data'));
    }

    public function edit($id)
    {
        $data = Kategori::findOrFail($id);
        return view('backend.kategori-paket.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        }

        $kategori = Kategori::findOrFail($id);

        $slug_name = strtolower($request->nama);

        if ($request->hasFile('gambar')) {
            if ($kategori->gambar && file_exists(public_path($kategori->gambar))) {
                unlink(public_path($kategori->gambar));
            }
            // Simpan gambar baru
            $nama_gambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/kategori/'), $nama_gambar);
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $nama_gambar = $kategori->gambar;
        }

        // Proses penyimpanan
        $data = [
            'nama' => $request->nama,
            'gambar' => 'public/assets/kategori/' . $nama_gambar,
            'deskripsi' => $request->deskripsi,
            'slug_url' => $slug_name,
        ];

        // Simpan ke database (contoh jika Anda menggunakan model Kategori)
        $kategori->update($data);

        return redirect()->route('admin.kategori-paket')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function delet($id)
    {
        // Temukan data berdasarkan ID
        $kategori = Kategori::findOrFail($id);

        // Menghapus gambar yang terkait (jika ada)
        if ($kategori->gambar && file_exists(public_path($kategori->gambar))) {
            unlink(public_path($kategori->gambar));
        }

        // Hapus data dari database
        $kategori->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.kategori-paket')->with('success', 'Paket Wisata berhasil dihapus.');
    }
}
