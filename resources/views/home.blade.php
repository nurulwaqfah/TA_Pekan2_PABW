@extends('layout')

@section('title', 'LaporBanjir - Beranda')

@section('content')

<section class="hero">
    <div class="container">

        <div class="hero-content">
            <span class="badge">BPBD Kabupaten Bandung</span>

            <h1>Lapor Banjir dengan Cepat</h1>

            <p>
                Bantu melaporkan kejadian banjir di wilayah Anda
                agar informasi dapat diterima dengan cepat.
            </p>

            <a href="{{ route('lapor.form') }}" class="button">
                Buat Laporan
            </a>
        </div>

    </div>
</section>

<section class="info">
    <div class="container">

        <h2>Cara Melapor</h2>

        <div class="cards">

            <div class="card">
                <h3>1. Isi Form</h3>
                <p>
                    Masukkan nama, lokasi kejadian,
                    dan tinggi genangan air.
                </p>
            </div>

            <div class="card">
                <h3>2. Kirim Laporan</h3>
                <p>
                    Tekan tombol kirim untuk
                    mengirimkan laporan.
                </p>
            </div>

            <div class="card">
                <h3>3. Konfirmasi</h3>
                <p>
                    Data laporan akan ditampilkan
                    sebagai konfirmasi.
                </p>
            </div>

        </div>

    </div>
</section>

@endsection