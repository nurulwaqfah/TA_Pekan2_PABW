<div class="laporan-card">

    <div class="laporan-header">

        <h3>
            {{ $laporan['nama'] }}
        </h3>

        @if ($laporan['tinggi_air'] < 30)

            <span class="status waspada">
                Waspada
            </span>

        @elseif ($laporan['tinggi_air'] <= 70)

            <span class="status siaga">
                Siaga
            </span>

        @else

            <span class="status awas">
                Awas
            </span>

        @endif

    </div>


    <div class="laporan-content">

        <p>
            <strong>Lokasi:</strong>
            {{ $laporan['lokasi'] }}
        </p>

        <p>
            <strong>Tinggi Genangan:</strong>
            {{ $laporan['tinggi_air'] }} cm
        </p>

    </div>

</div>