<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function laporan()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Kecamatan Baleendah',
                'tinggi_air' => 20
            ],
            [
                'nama' => 'Siti',
                'lokasi' => 'Kecamatan Dayeuhkolot',
                'tinggi_air' => 50
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Kecamatan Bojongsoang',
                'tinggi_air' => 85
            ],
        ];

        return view('laporan', compact('laporan'));
    }

    public function form()
    {
        return view('form');
    }

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