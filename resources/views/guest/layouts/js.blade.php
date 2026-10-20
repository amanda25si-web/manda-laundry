<!-- Bootstrap JavaScript: Bundle with Popper -->
	<script src="{{ asset('assets-guest/libraries/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-guest/libraries/glide/glide.min.js') }}"></script>
    <script src="{{ asset('assets-guest/libraries/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-guest/js/scripts.js') }}"></script>
    <script src="{{ asset('assets-guest/php/contact/script.js') }}"></script>
<!-- Include JavaScript for color modes -->
   <script src="{{ asset('assets-guest/js/color-modes.js') }}"></script>
<script>
    window.addEventListener('load', function () {
        const loader = document.querySelector('.loader-wrapper');

        if (loader) {
            loader.style.display = 'none';
        }
    });
</script>
