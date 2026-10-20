<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Update the 'content' attribute to reflect the actual content description -->
    <meta name="description" content="your_description_goes_here">

    <!-- Modify the 'content' attribute to include appropriate keywords -->
    <meta name="keywords" content="your_keywords_goes_here">

    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">

    <!-- Change the text within the <title> tag to match the webpage's content -->
    <title> your_title_goes_here </title>

    <!--
        Set the website's favicon and Apple touch icon using the files in the assets/logo folder. You can change these files to your own icons by replacing them with the same names and sizes.

        Be careful if you change the site.webmanifest file, as you need to update the src attribute of the icons array to match the new path of your icon files. Otherwise, your icons may not display correctly on some devices.
    -->


    <!-- Open Graph Meta Tags for Social Sharing -->
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta property="og:title" content="your_title_goes_here">
    <meta property="og:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta property="og:image" content="your_absolute_image_url_goes_here">
    <!-- Update with the absolute URL of the content like: https://example.com/index.html -->
    <meta property="og:url" content="your_absolute_content_url_goes_here">
    <!-- Update with the type of object you’re sharing. (e.g., article, website, etc.) -->
    <meta property="og:type" content="website">
    <!-- Defines the content language -->
    <meta property="og:locale" content="en_US">


    <!-- X/Twitter Card Meta Tags for Social Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- Update with your X/Twitter handle -->
    <meta name="twitter:site" content="@yourtwitterhandle">
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta name="twitter:title" content="your_title_goes_here">
    <meta name="twitter:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta name="twitter:image" content="your_absolute_image_url_goes_here">

    <!--
        The following line specifies the canonical URL for this page.
        Replace your_canonical_url_goes_here with the actual canonical URL if needed like: https://example.com/index.html
        Or just remove it!!!!
    -->
    <link rel="canonical" href="your_canonical_url_goes_here">

</head>
<body>

    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
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


	<!-- services -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
	    <div class="container">
	        <div>
	            <div class="mx-auto max-w-2xl text-center">
					<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
						Our services
					</h2>
	                <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
	                    Convenient Laundry Services in NYC
	                </p>
	                <p class="m-0 mt-4 text-body text-lg leading-8">
	                    Experience the power of eco-friendly laundry with our premium detergents
	                </p>
	            </div>
	        </div>
	        <div>
	            <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                               <img src="{{ asset('assets-guest/img/bg/bg2.jpg') }}" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Eco-Friendly Dry Cleaning
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Safely clean your delicate garments with our eco-friendly dry cleaning services, leaving them fresh and free from harsh chemicals.
                            </p>
	                    </div>
	                </div>

      				<div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="{{ asset('assets-guest/img/bg/bg3.jpg') }}" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Wash & Fold Service
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Save time by letting us handle your laundry needs with our efficient wash & fold service, ensuring your clothes are clean and neatly folded.
                            </p>
	                    </div>
	                </div>

	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="{{ asset('assets-guest/img/bg/bg4.jpg') }}" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Same-Day Pickup & Delivery
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Forget about waiting – our same-day pickup and delivery service ensures your laundry is promptly picked up, cleaned, and returned to you on time.
                            </p>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="text-center pt-7">
	            <a href="javascript:;" class="btn btn-lg btn-primary text-white icon-link icon-link-hover text-sm leading-6 fw-semibold">
                    Learn more
                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                </a>
	        </div>
	    </div>
	</div>



	<!-- About Us -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5 order-last">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							About Us
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							Making laundry a breeze, one clean garment at a time.
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8">
							Welcome to Freshen, your premier laundry service in New York, NY. We are dedicated to providing top-quality, convenient, and affordable laundry solutions to our valued customers.
						</p>
						<div class="mt-4">
							<a href="javascript:;" class="icon-link icon-link-hover text-decoration-none text-sm leading-6 fw-bold">
			                    Learn more
			                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
			                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
			                </a>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="{{ asset('assets-guest/img/bg/bg5.jpg') }}" class="object-fit-cover rounded-3" alt="about us" loading="lazy">
                        </div>
					</div>
				</div>
			</div>

			<!-- big image -->
		    <div class="ratio ratio-16x9 mt-7 mt-sm-8 mt-xl-9">
               <img src="{{ asset('assets-guest/img/bg/bg6.jpg') }}" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
            </div>
		</div>
	</div>



    <!-- Testimonials -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-secondary">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide pb-5">
                <div class="carousel-indicators mb-0">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo1.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is friendly and professional. I was impressed by the quality of their work and their attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st1.jpg" alt="Clinet Name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">John Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Aven</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo2.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is friendly and professional. I was impressed by the quality of their work and their attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st2.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Judith Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Circle</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo3.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is friendly and professional. I was impressed by the quality of their work and their attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st3.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Alex Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Amara</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>



	<!-- Client -->
	<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
		<div class="container">
			<div class="max-w-2xl">
				<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
					Our Clients
				</h2>
				<div class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
					We're fortunate to have incredible clients.
				</div>
			</div>

			<div class="mt-4">
				<div class="glide glideHighLinear">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides align-items-center">
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo1.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo2.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo3.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo4.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo5.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo6.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo7.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo8.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo9.png" class="img-fluid" alt="clients">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Back to top button -->
	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
	</button>


</body>
</html>
