<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketwisataController extends Controller
{
    public function index()
    {
        $data = PaketWisata::all();
        return view('backend.paket-wisata.index', compact('data'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('backend.paket-wisata.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_paket' => 'required',
                'kategori' => 'required',
                'harga' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048',
                'deskripsi' => 'required',
                'fasilitas' => 'required',
            ],
            [
                // Custom messages for validation errors
                'nama_paket.required' => 'Nama paket harus diisi.',
                'kategori.required' => 'Kategori paket harus dipilih.',
                'harga.required' => 'Harga paket harus diisi.',
                'gambar.required' => 'Gambar paket wajib diupload.',
                'gambar.image' => 'File yang diupload harus berupa gambar.',
                'gambar.mimes' => 'Gambar harus dalam format jpeg, png, jpg, atau gif.',
                'gambar.max' => 'Ukuran gambar maksimal 2MB.',
                'deskripsi.required' => 'Deskripsi harus diisi.',
                'fasilitas.required' => 'Fasilitas harus diisi.',
            ]
        );
        // dd($request);

        $slug_name = strtolower(str_replace(' ', '_', $request->nama_paket));

        $nama_gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/paket/'), $nama_gambar);

        PaketWisata::create([
            'nama_paket' => $request->nama_paket,
            'kategori_id' => $request->kategori,
            'harga' => $request->harga,
            'gambar' => 'assets/paket/' . $nama_gambar,
            'slug_url' => $slug_name,
            'fasilitas' => $request->fasilitas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.paket-wisata');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/quill/'), $imageName);

            return response()->json(['url' => asset('uploads/quill/' . $imageName)]);
        }

        return response()->json(['error' => 'Upload gagal'], 400);
    }


    public function edit($id)
    {
        $data = PaketWisata::findOrFail($id);
        $kategori = Kategori::all();

        return view('backend.paket-wisata.edit', compact('data', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        }

        $paket_wisata = PaketWisata::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($paket_wisata->gambar && file_exists(public_path($paket_wisata->gambar))) {
                unlink(public_path($paket_wisata->gambar));
            }
            // Simpan gambar baru
            $nama_gambar = 'assets/paket/' . time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/paket/'), $nama_gambar);
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $nama_gambar = $paket_wisata->gambar;
        }

        $paket_wisata->update([
            'nama_paket' => $request->nama_paket,
            'kategori_id' => $request->kategori,
            'harga' => $request->harga,
            'gambar' =>  $nama_gambar,
            'deskripsi' => $request->deskripsi,
            'fasilitas' => $request->fasilitas,
        ]);

        return redirect()->route('admin.paket-wisata');
    }

    public function delet($id)
    {
        // Temukan data berdasarkan ID
        $paket_wisata = PaketWisata::findOrFail($id);

        // Menghapus gambar yang terkait (jika ada)
        if ($paket_wisata->gambar && file_exists(public_path($paket_wisata->gambar))) {
            unlink(public_path($paket_wisata->gambar));
        }

        // Hapus data dari database
        $paket_wisata->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.paket-wisata')->with('success', 'Paket Wisata berhasil dihapus.');
    }
}
