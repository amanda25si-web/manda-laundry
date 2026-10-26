@extends('layout.guest.app')

@section('title', 'Contact Us - Laundry Kita')

@section('content')
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
                    <img src="{{ asset('assets-guest/img/bg/bg7.jpg') }}"
                         class="w-100 h-100 rounded-4 object-fit-cover"
                         style="min-height: 650px;"
                         loading="lazy"
                         alt="Layanan Laundry Kita">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Validasi Form -->
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
@endsection
