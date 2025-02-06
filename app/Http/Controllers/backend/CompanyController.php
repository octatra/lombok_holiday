<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $data = User::findOrFail(Auth::user()->id);
        return view('backend.commpany.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_commpany' => 'required',
            'alamat' => 'required',
            'telpone' => 'required',
            'email_commpany' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $request->validate([
                'logo' => 'required|image',
            ]);
        }

        $data_user = User::findOrFail(Auth::user()->id);

        if ($request->hasFile('logo')) {
            if ($data_user->logo && file_exists(public_path($data_user->logo))) {
                unlink(public_path($data_user->logo));
            }

            $nama_logo = 'assets/commpany/' . time() . $request->logo->extension();
            $request->logo->move(public_path('assets/commpany/'), $nama_logo);
        } else {
            $nama_logo = $data_user->logo;
        }

        $data_user->update([
            'nama_commpany' => $request->nama_commpany,
            'alamat' => $request->alamat,
            'logo' => $nama_logo,
            'telepon' => $request->telpone,
            'email_commpany' => $request->email_commpany,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.company');
    }
}
