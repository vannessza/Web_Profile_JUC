<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/buttom_menu.css">
    @vite('resources/css/app.css')
    <style>
        .navbar.sticky .navbar-brand img {
            width: 80px; /* Ubah lebar gambar logo saat di-scroll */
            height: 80px; /* Ubah tinggi gambar logo saat di-scroll */
        }
    </style>
</head>
<body>
    @include('layouts.header')
    @yield('container')
    @include('layouts.buttom')
</body>
<script>
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 50) {
            // Ketika di-scroll lebih dari 50px dari atas, ubah gambar logo
            $('#navbar-logo').attr('src', '{{ asset('image/logo/logo2.png') }}');
        } else {
            // Jika di-scroll kembali ke atas, kembalikan gambar logo ke semula
            $('#navbar-logo').attr('src', '{{ asset('image/logo/logo1.png') }}');
        }
    });
</script>
<script>
//Nvabar Fixed
window.onscroll = function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav){
        header.classList.add('navbar-fixed');
    }else{
        header.classList.remove('navbar-fixed');
    }
}

//Menuline
const menuline = document.querySelector('#menuline');
const navMenu = document.querySelector('#nav-menu');

menuline.addEventListener('click', function(){
    menuline.classList.toggle('menuline-active');
    navMenu.classList.toggle('hidden');
});
</script>
<script src="{{ asset('path-to-bootstrap-js/bootstrap.min.js') }}"></script>
<script src="{{ asset('path-to-jquery/jquery.min.js') }}"></script>

<script>
export default function Carousel({ slides}){
    return <div>
        {slides.map((s)=>{
            return <img src={s}/>;
        })}
        </div>;
}
</script>
<script>
    // Fungsi untuk menginisialisasi carousel
    function initCarousel() {
      $('.carousel').carousel({
        interval: 5000 // Ganti angka ini dengan interval dalam milidetik sesuai dengan keinginan Anda
      });
    }
  
    // Panggil fungsi initCarousel saat dokumen siap
    $(document).ready(function() {
      initCarousel();
    });
  </script>
  <script src="{{ mix('js/app.js') }}"></script>
  <!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        var arrowIcons = document.querySelectorAll('.arrow-icon');
        var dropdownContents = document.querySelectorAll('.dropdown-content');

        dropdownToggles.forEach(function (toggle, index) {
            toggle.addEventListener('click', function () {
                // Toggle the 'hidden' class to show/hide the dropdown content
                dropdownContents[index].classList.toggle('hidden');

                // Rotate the arrow icon based on the dropdown visibility
                arrowIcons[index].style.transform = dropdownContents[index].classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            });
        });

        // Close dropdowns when clicking outside of them
        document.addEventListener('click', function (event) {
            dropdownToggles.forEach(function (toggle, index) {
                var isClickInside = toggle.contains(event.target) || dropdownContents[index].contains(event.target);
                if (!isClickInside) {
                    dropdownContents[index].classList.add('hidden');
                    arrowIcons[index].style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>
</html>