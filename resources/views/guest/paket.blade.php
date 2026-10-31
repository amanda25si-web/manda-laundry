<section class="py-5 bg-white" id="paket-laundry">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="h3 fw-bold mb-1">Paket Laundry</h2>
                <p class="text-muted mb-0">
                    Paket hemat dengan layanan terbaik untuk pakaian Anda.
                </p>
            </div>
        </div>

        <div class="row g-3">
            @forelse ($paketGuest as $item)
                @php
                    $gambar = match (strtolower($item->nama_paket)) {
                        'paket hemat' => '01.png',
                        'paket komplit' => '02.png',
                        'paket express' => '03.png',
                        default => '01.png',
                    };
                @endphp

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card h-100 border rounded-3 shadow-sm">
                        <div class="card-body p-3">
                            <div class="row g-3 align-items-center">

                                <div class="col-5">
                                    <img
                                        src="{{ asset('assets-guest/img/bg/' . $gambar) }}"
                                        alt="Paket {{ $item->nama_paket }}"
                                        class="img-fluid rounded-3 w-100"
                                        style="height: 125px; object-fit: cover;">
                                </div>

                                <div class="col-7">
                                    <span class="badge rounded-pill mb-2"
                                          style="background-color: #f3e2d5; color: #956746;">
                                        Paket Laundry
                                    </span>

                                    <h3 class="h6 fw-bold mb-2">
                                        {{ $item->nama_paket }}
                                    </h3>

                                    <p class="small text-muted mb-1">
                                        {{ $item->layanan->nama_layanan ?? '-' }}
                                        {{ $item->berat_kg }} kg
                                    </p>

                                    <p class="small text-muted mb-2">
                                        {{ $item->deskripsi ?? '-' }}
                                    </p>

                                    <div class="fw-bold mb-2" style="color: #a77b57;">
                                        Rp {{ number_format($item->harga_paket, 0, ',', '.') }}
                                    </div>

                                    <a href="{{ url('/home') }}#contact-us"
                                       class="btn btn-sm rounded-pill text-white px-3"
                                       style="background-color: #a77b57;">
                                        Pilih Paket
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light border text-center">
                        Belum ada paket laundry.
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</section>
