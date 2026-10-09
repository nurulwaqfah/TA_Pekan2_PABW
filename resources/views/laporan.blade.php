@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')

<div class="container">

    <div class="page-header">

        <h1>Daftar Laporan Banjir</h1>

        <p>
            Berikut beberapa laporan banjir yang telah diterima.
        </p>

    </div>


    <div class="laporan-list">

        @forelse ($laporan as $item)

            @include('partials.laporan-card', [
                'laporan' => $item
            ])

        @empty

            <p class="empty">
                Belum ada laporan banjir.
            </p>

        @endforelse

    </div>

</div>

@endsection