@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="container">

    <div class="confirmation-card">

        <x-alert title="Laporan Berhasil Dikirim">
            Terima kasih. Laporan banjir Anda berhasil diproses.
        </x-alert>


        <h2>Data Laporan</h2>


        <div class="report-data">

            <p>
                <strong>Nama Pelapor:</strong>
                {{ $data['nama'] }}
            </p>

            <p>
                <strong>Lokasi Kejadian:</strong>
                {{ $data['lokasi'] }}
            </p>

            <p>
                <strong>Tinggi Genangan:</strong>
                {{ $data['tinggi_air'] }} cm
            </p>

        </div>


        <p class="note">
            Data laporan hanya diproses sementara
            dan tidak disimpan ke database.
        </p>


        <a
            href="{{ route('laporan.form') }}"
            class="button"
        >
            Buat Laporan Baru
        </a>

    </div>

</div>

@endsection