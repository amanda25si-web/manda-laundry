@extends('guest.layouts.app')

@section('title', 'Login - Laundry Kita')

@section('content')
    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Get in touch
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight fw-bold">
                            Have any questions or need assistance? Contact us today!
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6">
                        <form class="row g-4 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="nameForm" class="form-label text-sm">
                                    Full name
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="nameForm" id="nameForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your full name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="emailForm" class="form-label text-sm">
                                    Email address
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="email" class="form-control form-control-sm" name="emailForm" id="emailForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your email address.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="phoneForm" class="form-label text-sm">
                                    Phone number
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="phoneForm" id="phoneForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your phone number.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subjectForm" class="form-label text-sm">
                                    Subject
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="subjectForm" id="subjectForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter a subject for your message.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="messageForm" class="form-label text-sm">
                                    Your message
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <textarea class="form-control form-control-sm" name="messageForm" id="messageForm" rows="3" required></textarea>
                                <div class="invalid-feedback text-xs">
                                    Please enter a message.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label text-sm" for="gridCheck">
                                        I agree to the terms &amp; conditions and privacy policy
                                        <span class="text-danger-emphasis">*</span>
                                    </label>
                                    <div class="invalid-feedback text-xs">
                                        Please agree to the terms &amp; conditions and privacy policy.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center pt-3">
                                <button type="submit" class="btn btn-lg btn-primary text-white text-sm fw-semibold" id="sendMessage">
                                    Send message
                                </button>
                            </div>

                            <!-- Alert message  -->
                            <div class="col-12" id="yourMessageIsSent"></div>
                        </form>
                    </div>
                </div>

                <div class="d-none d-xl-block col-12 col-xl-7" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div class="h-100 position-relative ms-xxl-5">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n1 rounded-5">
                            <img src="{{ asset('assets-guest/img/bg/bg7.jpg') }}" class="w-100 h-100 rounded-3 object-fit-cover" loading="lazy" alt="Image description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
