<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Menampilkan halaman awal
    public function home()
    {
        return view('home');
    }

    // Menampilkan form laporan
    public function form()
    {
        return view('form');
    }

    // Memproses data dari form
    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tinggi_air' => 'required|numeric|min:0',
        ]);

        $data = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi_air' => $request->tinggi_air,
        ];

        return view('konfirmasi', compact('data'));
    }
}