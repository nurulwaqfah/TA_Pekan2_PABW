@extends('layout')

@section('title', 'Form Laporan Banjir')

@section('content')

<style></style>

<div class="container form-container">

    <div class="form-card">

        <h1>Form Laporan Banjir</h1>

        <p class="description">
            Silakan isi data kejadian banjir dengan lengkap.
        </p>

        @if ($errors->any())
            <div class="error-box">
                <strong>Data belum lengkap:</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('lapor.kirim') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="nama">
                    Nama Pelapor
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    placeholder="Masukkan nama Anda"
                    required
                >
            </div>

            <div class="form-group">
                <label for="lokasi">
                    Lokasi Kejadian
                </label>

                <input
                    type="text"
                    id="lokasi"
                    name="lokasi"
                    value="{{ old('lokasi') }}"
                    placeholder="Contoh: Kecamatan Baleendah"
                    required
                >
            </div>

            <div class="form-group">
                <label for="tinggi_air">
                    Tinggi Genangan Air (cm)
                </label>

                <input
                    type="number"
                    id="tinggi_air"
                    name="tinggi_air"
                    value="{{ old('tinggi_air') }}"
                    placeholder="Contoh: 50"
                    min="0"
                    required
                >
            </div>

            <button type="submit" class="button submit-button">
                Kirim Laporan
            </button>

        </form>

    </div>

</div>

@endsection