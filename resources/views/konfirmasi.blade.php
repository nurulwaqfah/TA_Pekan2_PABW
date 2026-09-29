@extends('layout')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="container confirmation-container">

    <div class="confirmation-card">

        <div class="success-icon">
            ✓
        </div>

        <h1>Laporan Berhasil Dikirim</h1>

        <p>
            Berikut adalah data laporan yang telah Anda kirimkan.
        </p>

        <div class="report-data">

            <div class="data-row">
                <span>Nama Pelapor</span>
                <strong>{{ $data['nama'] }}</strong>
            </div>

            <div class="data-row">
                <span>Lokasi Kejadian</span>
                <strong>{{ $data['lokasi'] }}</strong>
            </div>

            <div class="data-row">
                <span>Tinggi Genangan</span>
                <strong>{{ $data['tinggi_air'] }} cm</strong>
            </div>

        </div>

        <div class="warning">
            <strong>Catatan:</strong>
            Data ini hanya ditampilkan sebagai konfirmasi
            dan tidak disimpan secara permanen.
        </div>

        <a href="{{ route('lapor.form') }}" class="button">
            Buat Laporan Baru
        </a>

    </div>

</div>

@endsection