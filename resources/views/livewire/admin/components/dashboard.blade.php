<div>
    <div class="row row-cols-sm-12" wire:poll>
        <div class="col mt-4">
            <div class="card text-center">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <div class="card-text">{{ $cToday ?? 0 }}</div>
                </div>
                <div class="card-footer">
                    Pengunjung Hari Ini
                </div>
            </div>
        </div>
        <div class="col mt-4">
            <div class="card text-center">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <div class="card-text">{{ $cWeek ?? 0 }}</div>
                </div>
                <div class="card-footer">
                    Pengunjung Minggu Ini
                </div>
            </div>
        </div>
        <div class="col mt-4">
            <div class="card text-center">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <div class="card-text">{{ $cMonth ?? 0 }}</div>
                </div>
                <div class="card-footer">
                    Pengunjung Bulan Ini
                </div>
            </div>
        </div>
        <div class="col mt-4">
            <div class="card text-center">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <div class="card-text">{{ $cYear ?? 0 }}</div>
                </div>
                <div class="card-footer">
                    Pengunjung Tahun Ini
                </div>
            </div>
        </div>
        {{-- <div class="col mt-4">
            <div class="card text-center">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <div class="card-text">{{ $antrian }} jam</div>
                </div>
                <div class="card-footer">
                    Rata Antrian
                </div>
            </div>
        </div> --}}
    </div>
    {{-- end card --}}


    {{-- chart --}}

    {{-- <div class="row row-cols-sm-12 justify-content-center">
            <div class="col-6">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="card-title">Statistik Circle Chart Pengunjung</div>
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}
</div>
