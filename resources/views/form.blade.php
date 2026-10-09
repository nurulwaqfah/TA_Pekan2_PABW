@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

<div class="container">

    <div class="form-card">

        <h1>Form Laporan Banjir</h1>

        <p>
            Silakan isi data kejadian banjir berikut.
        </p>


        @if ($errors->any())

            <div class="error-box">

                <strong>
                    Terdapat kesalahan:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('laporan.kirim') }}"
            method="POST"
        >

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
                    placeholder="Masukkan nama pelapor"
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
                >

            </div>


            <button type="submit" class="button">
                Kirim Laporan
            </button>

        </form>

    </div>

</div>

@endsection