@extends('layout.guest.app')

@section('title', 'Home - Laundry Kita')

@section('content')

    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


<!-- header body / hero -->
<div id="home" class="overflow-hidden position-relative">

    <img
        src="{{ asset('assets-guest/img/bg/bg6.png') }}"
        class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover"
        alt="Laundry Kita"
    >

    <div
        class="overlay position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
    </div>

    <div class="container">
        <div class="min-vh-100 row align-items-center">

            <div class="col-12 col-xl-8">
                <div class="pt-9 pt-md-10 pt-xl-11 pb-7 pb-md-8 pb-xl-9 max-w-2xl mx-auto mx-xl-0">
                    <div class="mt-4 pt-2">
                        <div class="text-center text-xl-start">

                            <h1
                                class="m-0 text-white tracking-tight text-6xl fw-bold"
                                data-aos-delay="0"
                                data-aos="fade"
                                data-aos-duration="1500">
                                Laundry Bersih, Wangi, dan Praktis!
                            </h1>

                            <p
                                class="m-0 mt-4 text-white text-lg leading-8"
                                data-aos-delay="100"
                                data-aos="fade"
                                data-aos-duration="1500">
                                Laundry Kita siap membantu kebutuhan cucianmu dengan layanan
                                berkualitas, proses praktis, dan hasil yang bersih serta rapi.
                                Serahkan urusan cucianmu kepada kami!
                            </p>

                            <div class="mt-4 pt-3 d-flex align-items-center justify-content-center justify-content-xl-start column-gap-3">

                                <a
                                    href="#contact-us"
                                    class="btn btn-lg btn-primary text-white text-sm fw-semibold"
                                    data-aos-delay="200"
                                    data-aos="fade"
                                    data-aos-duration="1500">
                                    Contact us
                                </a>

                                <a
                                    href="#services"
                                    class="btn btn-lg text-white icon-link icon-link-hover bg-secondary-hover text-sm leading-6 fw-semibold"
                                    data-aos-delay="300"
                                    data-aos="fade"
                                    data-aos-duration="1500">
                                    Our Services
                                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video laundry -->
            <div class="col-12 col-xl-4">
                <div class="pt-3 pt-md-4 pt-xl-12 pb-2 pb-md-3 pb-xl-6">
                    <a
                        class="video-play-button video-btn-modal position-relative"
                        href="javascript:;"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        data-bs-src="https://www.youtube.com/embed/EX0TcLgOPv0"
                        aria-label="Putar video laundry">
                        <span class="top-50 start-50 translate-middle"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

	<!-- Modal to embed vidoes!! -->
	<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content border-0" style="border-radius: 0.75rem;">
				<div class="modal-header border-0 p-0">
					<button type="button" class="btn-close bg-white border position-absolute top-0 end-0 translate-middle me-n3 me-sm-n5 mt-n4 rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-0">
					<div class="ratio ratio-16x9">
						<iframe class="embed-responsive-item iframeVideo" style="border-radius: 0.75rem;" allow="autoplay"></iframe>
					</div>
				</div>

			</div>
		</div>
	</div>


<!-- Services Laundry Kita -->
<div id="services" class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">

        <!-- Judul Services -->
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                Layanan Kami
            </h2>

            <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                Pilihan Layanan Laundry untuk Anda
            </p>

            <p class="m-0 mt-4 text-body text-lg leading-8">
                Kami menyediakan layanan laundry yang praktis untuk membantu
                pakaian Anda tetap bersih, rapi, dan nyaman digunakan.
            </p>
        </div>

        <!-- Daftar Layanan -->
        <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center">

            <!-- Layanan Cuci -->
            <div class="col pt-5 pt-xl-4">
                <div class="max-w-xl mx-auto mx-xl-0"
                     data-aos="fade" data-aos-duration="1000">

                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('assets-guest/img/bg/perlengkapan-laundry.png') }}"
                             class="object-fit-cover rounded-3"
                             alt="Layanan Cuci Laundry"
                             loading="lazy">
                    </div>

                    <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                        Cuci
                    </h3>

                    <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                        Layanan pencucian pakaian untuk membantu menghilangkan
                        kotoran dan menjaga pakaian tetap bersih serta segar.
                    </p>
                </div>
            </div>

            <!-- Layanan Cuci Gosok -->
            <div class="col pt-5 pt-xl-4">
                <div class="max-w-xl mx-auto mx-xl-0"
                     data-aos="fade" data-aos-delay="100"
                     data-aos-duration="1000">

                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('assets-guest/img/bg/cuci-gosok.png') }}"
                             class="object-fit-cover rounded-3"
                             alt="Layanan Cuci Gosok Laundry"
                             loading="lazy">
                    </div>

                    <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                        Cuci Gosok
                    </h3>

                    <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                        Layanan mencuci sekaligus menyetrika pakaian agar
                        bersih, rapi, dan siap digunakan kembali.
                    </p>
                </div>
            </div>

            <!-- Layanan Setrika -->
            <div class="col pt-5 pt-xl-4">
                <div class="max-w-xl mx-auto mx-xl-0"
                     data-aos="fade" data-aos-delay="200"
                     data-aos-duration="1000">

                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('assets-guest/img/bg/gosok.jpg') }}"
                             class="object-fit-cover rounded-3"
                             alt="Layanan Setrika Laundry"
                             loading="lazy">
                    </div>

                    <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                        Setrika
                    </h3>

                    <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                        Layanan menyetrika pakaian yang sudah dicuci agar
                        lebih halus, rapi, dan nyaman saat dikenakan.
                    </p>
                </div>
            </div>

        </div>

        <!-- Tombol -->
        <div class="text-center pt-7">
            <a href="{{ route('contact') }}"
               class="btn btn-lg btn-primary text-white icon-link icon-link-hover text-sm leading-6 fw-semibold">
                Hubungi Kami
                <span class="bi align-self-start" aria-hidden="true">→</span>
            </a>
        </div>

    </div>
</div>
<!-- End Services -->



<!-- About Us -->
<div id="about-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">

            <div class="col-12 col-xl-5 order-last">
                <div class="mx-auto max-w-2xl">

                    <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                        Tentang Kami
                    </h2>

                    <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                        Solusi Laundry Praktis untuk Pakaian Anda.
                    </p>

                    <p class="m-0 mt-4 text-body-secondary text-lg leading-8">
                        Selamat datang di Laundry Kita, layanan laundry yang
                        hadir untuk membantu Anda menjaga pakaian tetap bersih,
                        rapi, dan nyaman digunakan. Kami menyediakan tiga
                        pilihan layanan, yaitu Cuci, Cuci Gosok, dan Setrika Saja,
                        untuk memenuhi kebutuhan laundry Anda.
                    </p>

                    <div class="mt-4">
                        <a href="{{ url('/home') }}#services"
                           class="icon-link icon-link-hover text-decoration-none text-sm leading-6 fw-bold">
                            Lihat Layanan Kami
                            <span class="bi align-self-start left-to-right"
                                  aria-hidden="true">→</span>
                            <span class="bi align-self-start right-to-left"
                                  aria-hidden="true">←</span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="mx-auto max-w-2xl">
                    <div class="ratio ratio-4x3"
                         data-aos-delay="0"
                         data-aos="fade"
                         data-aos-duration="3000">

                        <img src="{{ asset('assets-guest/img/bg/laundry.webp') }}"
                             class="object-fit-cover rounded-3"
                             alt="Layanan Laundry Kita"
                             loading="lazy">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End About Us -->

<!-- Contact Us -->
<div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row gy-5 gx-sm-5 align-items-stretch">

            <!-- Form Contact Us -->
            <div class="col-12 col-xl-7 pt-4">
                <div class="mx-auto">
                    <h2 class="m-0 text-primary fw-semibold fs-5">
                        Hubungi Kami
                    </h2>

                    <p class="mt-2 mb-0 text-body-emphasis fs-2 fw-bold">
                        Ada pertanyaan tentang layanan laundry kami?
                        Kami siap membantu!
                    </p>
                </div>

                <div class="mt-5">
                    <form class="row g-4 needs-validation" id="myForm" novalidate>
                        <div class="col-md-6">
                            <label for="nameForm" class="form-label">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control"
                                   name="nameForm" id="nameForm"
                                   placeholder="Masukkan nama lengkap" required>
                            <div class="invalid-feedback">
                                Silakan masukkan nama lengkap.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="emailForm" class="form-label">
                                Alamat Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control"
                                   name="emailForm" id="emailForm"
                                   placeholder="Masukkan alamat email" required>
                            <div class="invalid-feedback">
                                Silakan masukkan alamat email yang valid.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="phoneForm" class="form-label">
                                Nomor Telepon <span class="text-danger">*</span>
                            </label>
                            <input type="tel" class="form-control"
                                   name="phoneForm" id="phoneForm"
                                   placeholder="Masukkan nomor telepon" required>
                            <div class="invalid-feedback">
                                Silakan masukkan nomor telepon.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="subjectForm" class="form-label">
                                Topik Pesan <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="subjectForm"
                                    id="subjectForm" required>
                                <option value="" selected disabled>
                                    Pilih topik pesan
                                </option>
                                <option value="layanan">Informasi Layanan</option>
                                <option value="harga">Informasi Harga</option>
                                <option value="pesanan">Status Pesanan</option>
                                <option value="keluhan">Keluhan atau Saran</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">
                                Silakan pilih topik pesan.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="messageForm" class="form-label">
                                Pesan Anda <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control"
                                      name="messageForm" id="messageForm"
                                      rows="4"
                                      placeholder="Tuliskan pesan Anda di sini..."
                                      required></textarea>
                            <div class="invalid-feedback">
                                Silakan tuliskan pesan Anda.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    Saya menyetujui syarat dan ketentuan serta
                                    kebijakan privasi
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="invalid-feedback">
                                    Silakan setujui syarat dan ketentuan.
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-2">
                            <button type="submit"
                                    class="btn btn-primary btn-lg w-100 fw-semibold"
                                    id="sendMessage">
                                Kirim Pesan
                            </button>
                        </div>

                        <div class="col-12" id="yourMessageIsSent"></div>
                    </form>
                </div>
            </div>

            <!-- Gambar Laundry -->
            <div class="d-none d-xl-block col-xl-5"
                 data-aos="fade" data-aos-duration="1500">
                <div class="h-100">
                    <img src="{{ asset('assets-guest/img/bg/contact.jpg') }}"
                         class="w-100 h-100 rounded-4 object-fit-cover"
                         style="min-height: 650px;"
                         loading="lazy"
                         alt="Layanan Laundry Kita">
                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('myForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (!form.checkValidity()) {
            event.stopPropagation();
            form.classList.add('was-validated');
            return;
        }

        document.getElementById('yourMessageIsSent').innerHTML = `
            <div class="alert alert-success mt-3">
                Form berhasil divalidasi. Untuk mengirim pesan,
                hubungkan formulir ke backend terlebih dahulu.
            </div>
        `;

        form.classList.add('was-validated');
    });
});
</script>

<!-- Testimonials -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-secondary">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide pb-5">

            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <!-- Testimoni 1 -->
                <div class="carousel-item active">
                    <div class="mx-auto max-w-4xl text-center">
                        <h2 class="text-primary-emphasis text-base fw-semibold">
                            Testimoni Pelanggan
                        </h2>

                        <figure class="m-0 mt-5">
                            <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                <p class="m-0">
                                    “Pelayanan Laundry Kita sangat memuaskan.
                                    Pakaian dicuci dengan bersih dan hasilnya
                                    wangi. Prosesnya juga praktis sehingga
                                    sangat membantu aktivitas sehari-hari saya.”
                                </p>
                            </blockquote>

                            <figcaption class="m-0 mt-5">
                                <img class="mx-auto rounded-circle"
                                     width="40" height="40"
                                     src="{{ asset('assets-guest/img/small-team/st1.jpg') }}"
                                     alt="Pelanggan Laundry Kita"
                                     loading="lazy">

                                <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                    <div class="fw-semibold text-body-emphasis">
                                        Pelanggan Laundry
                                    </div>
                                    <svg viewBox="0 0 2 2" width="3" height="3"
                                         aria-hidden="true"
                                         class="mx-3 text-body-emphasis"
                                         fill="currentColor">
                                        <circle cx="1" cy="1" r="1"/>
                                    </svg>
                                    <div class="text-body-secondary">
                                        Layanan Cuci
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="carousel-item">
                    <div class="mx-auto max-w-4xl text-center">
                        <h2 class="text-primary-emphasis text-base fw-semibold">
                            Testimoni Pelanggan
                        </h2>

                        <figure class="m-0 mt-5">
                            <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                <p class="m-0">
                                    “Saya suka menggunakan layanan Cuci Gosok
                                    di Laundry Kita. Pakaian bersih dan rapi,
                                    jadi saya tidak perlu repot mencuci dan
                                    menyetrika sendiri di rumah.”
                                </p>
                            </blockquote>

                            <figcaption class="m-0 mt-5">
                                <img class="mx-auto rounded-circle"
                                     width="40" height="40"
                                     src="{{ asset('assets-guest/img/small-team/st2.jpg') }}"
                                     alt="Pelanggan Laundry Kita"
                                     loading="lazy">

                                <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                    <div class="fw-semibold text-body-emphasis">
                                        Pelanggan Laundry
                                    </div>
                                    <svg viewBox="0 0 2 2" width="3" height="3"
                                         aria-hidden="true"
                                         class="mx-3 text-body-emphasis"
                                         fill="currentColor">
                                        <circle cx="1" cy="1" r="1"/>
                                    </svg>
                                    <div class="text-body-secondary">
                                        Layanan Cuci Gosok
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="carousel-item">
                    <div class="mx-auto max-w-4xl text-center">
                        <h2 class="text-primary-emphasis text-base fw-semibold">
                            Testimoni Pelanggan
                        </h2>

                        <figure class="m-0 mt-5">
                            <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                <p class="m-0">
                                    “Layanan Setrika Saja sangat membantu
                                    ketika pakaian sudah dicuci tetapi belum
                                    sempat disetrika. Hasilnya rapi dan
                                    pakaian siap digunakan kembali.”
                                </p>
                            </blockquote>

                            <figcaption class="m-0 mt-5">
                                <img class="mx-auto rounded-circle"
                                     width="40" height="40"
                                     src="{{ asset('assets-guest/img/small-team/st3.jpg') }}"
                                     alt="Pelanggan Laundry Kita"
                                     loading="lazy">

                                <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                    <div class="fw-semibold text-body-emphasis">
                                        Pelanggan Laundry
                                    </div>
                                    <svg viewBox="0 0 2 2" width="3" height="3"
                                         aria-hidden="true"
                                         class="mx-3 text-body-emphasis"
                                         fill="currentColor">
                                        <circle cx="1" cy="1" r="1"/>
                                    </svg>
                                    <div class="text-body-secondary">
                                        Layanan Setrika Saja
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>

            <!-- Tombol navigasi carousel -->
            <button class="carousel-control-prev d-none d-xl-inline"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon rtl-flip"
                      aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>

            <button class="carousel-control-next d-none d-xl-inline"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon rtl-flip"
                      aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>

        </div>
    </div>
</div>
<!-- End Testimonials -->



	<!-- Back to top button -->
	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
	</button>
@endsection
