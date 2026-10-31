<section class="py-5" id="promo-laundry" style="background-color: #e1f2fc;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="h3 fw-bold mb-1">Promo Spesial</h2>
                <p class="text-muted mb-0">
                    Jangan lewatkan promo menarik untuk semua paket laundry!
                </p>
            </div>
        </div>

        <div class="row g-3">
            @forelse ($promoGuest as $item)
                @php
                    $gambar = match (strtolower($item->nama_promo)) {
                        'diskon paket komplit' => '04.png',
                        'promo pelanggan baru' => '05.png',
                        'promo laundry express' => '06.png',
                        default => '04.png',
                    };
                @endphp

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm rounded-3">
                        <div class="card-body p-3">
                            <div class="row g-3 align-items-center">

                                <div class="col-5">
                                    <img
                                        src="{{ asset('assets-guest/img/bg/' . $gambar) }}"
                                        alt="Promo {{ $item->nama_promo }}"
                                        class="img-fluid rounded-3 w-100"
                                        style="height: 140px; object-fit: cover;">
                                </div>

                                <div class="col-7">
                                    <span class="badge rounded-pill mb-2"
                                          style="background-color: #a77b57; color: white;">
                                        Promo Spesial
                                    </span>

                                    <h3 class="h6 fw-bold mb-2">
                                        {{ $item->nama_promo }}
                                    </h3>

                                    <div class="fw-bold fs-3 mb-2"
                                         style="color: #b86e3d;">
                                        {{ number_format($item->diskon_persen, 0) }}%
                                        <span class="fs-6">OFF</span>
                                    </div>

                                    <p class="small text-muted mb-2">
                                        {{ $item->deskripsi ?? '-' }}
                                    </p>

                                    <p class="small text-muted mb-0">
                                        <i class="bi bi-calendar-event me-1"></i>
                                        {{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d/m/Y') }}
                                        –
                                        {{ \Carbon\Carbon::parse($item->tanggal_berakhir)->format('d/m/Y') }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light border text-center">
                        Belum ada promo yang tersedia.
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</section>
