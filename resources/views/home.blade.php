@extends('layouts.main')

@section('container')
<section class="pt-24">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('image/banner/banner1.png') }}" class="d-block w-full h-52 md:h-[500px] lg:h-[700px]" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/banner/banner2.png') }}" class="d-block w-full h-52 md:h-[500px] lg:h-[700px]" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/banner/banner3.png') }}" class="d-block w-full h-52 md:h-[500px] lg:h-[700px]" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/banner/banner4.png') }}" class="d-block w-full h-52 md:h-[500px] lg:h-[700px]" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section id="home" class="pt-14">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class=" text-[#008d8d]
                block font-bold text-4xl mb-5 lg:text-6xl">Investasi Super App</h1>
                <p class="mb-10 md:text-[18px] lg:text-[20px]">JOIN adalah aplikasi untuk 
                    kamu yang ingin berdiskusi, 
                    analisa dan investasi saham 
                    dalam satu tempat.</p>
                <div>
                    <a href="" class="text-base font-semibold text-white bg-[#008d8d] py-3 px-8 
                    rounded-full hover:shadow-lg hover:bg-[#006c6c] trasition duration-300
                    ease-in-out">Register Now</a>
                    <a href="" class="text-base font-semibold text-[#fdc330] border-3 border-[#fdc330] py-3 px-8 
                    rounded-full hover:shadow-lg hover:bg-[#fdc330] trasition duration-300
                    ease-in-out group"><span class="group-hover:text-white">Daftar Trial</span></a>
                </div>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-9 lg:right-0">
                    <img src="{{ asset('image/device/apk.png') }}" alt="" class="max-w-full mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-36" >
    <div class="container">
        <div class="w-full px-4 mb-10">
            <h2 class="text-[#008d8d]
            block font-bold text-4xl mb-6 lg:text-5xl text-center">Feature</h2>
        </div>
        <div class="flex flex-wrap lg:justify-between">
            <div class="w-full h-50 lg:max-w-sm text-center mb-5">
                <div class="bg-[#fdc330] aspect-[1/1] w-50 lg:h-50 rounded-full mb-5 m-auto"></div>
                <H1 class="font-bold text-2xl mb:text-3xl">Lorem</H1>
                <p class="m-auto lg:w-52 font-medium text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati dignissimos amet harum velit illum</p>
            </div>
            <div class="w-full h-50 lg:max-w-sm text-center mb-5">
                <div class="bg-[#fdc330] aspect-[1/1] w-50 h-50 rounded-full mb-5 m-auto"></div>
                <H1 class="font-bold text-2xl mb:text-3xl">Lorem</H1>
                <p class="m-auto lg:w-52 font-medium text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati dignissimos amet harum velit illum</p>
            </div>
            <div class="w-full h-50 lg:max-w-sm text-center mb-5">
                <div class="bg-[#fdc330] aspect-[1/1] w-50 h-50 rounded-full mb-5 m-auto"></div>
                <H1 class="font-bold text-2xl mb:text-3xl">Lorem</H1>
                <p class="m-auto lg:w-52 font-medium text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati dignissimos amet harum velit illum</p>
            </div>
        </div>
    </div>
</section>
<section class="pt-36 ">
    <div class="container">
        <div class="w-full px-4 mb-10">
            <h2 class="text-[#008d8d]
            block font-bold text-4xl mb-5 lg:text-5xl text-center">Keunggulan Aplikasi</h2>
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="bg-[#fdc330] aspect-[1/1] w-100 h-50 rounded-3 mb-5 md:max-w-sm lg:max-w-sm m-auto"></div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="w-full h-50 lg:max-w-sm text-center mb-5 ">
                        <H1 class="font-bold text-3xl mb:text-4xl mb-5 lg:text-left">Lorem ipsum dolor sit amet.</H1>
                        <p class="font-medium text-base lg:text-left">
                            Lorem ipsum dolor sit amet, consectetur 
                            adipisicing elit. Dolore illo nisi atque, dolor fugiat consequuntur quam reprehenderit, impedit cum perferendis, distinctio 
                            suscipit cupiditate. Nam tenetur 
                            itaque id vero nulla a.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="bg-[#fdc330] aspect-[1/1] w-100 h-50 rounded-3 mb-5 md:max-w-sm lg:max-w-sm m-auto"></div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="w-full h-50 lg:max-w-sm text-center mb-5">
                        <h1 class="font-bold text-3xl lg:text-4xl mb-5 lg:text-left">Lorem ipsum dolor sit amet.</h1>
                        <p class="font-medium text-base lg:text-left">
                            Lorem ipsum dolor sit amet, consectetur 
                            adipisicing elit. Dolore illo nisi atque, dolor fugiat consequuntur quam reprehenderit, impedit cum perferendis, distinctio 
                            suscipit cupiditate. Nam tenetur 
                            itaque id vero nulla a.
                        </p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<section id="about" class="pt-36" >
    <div class="container">
        <div class="w-full px-4 mb-10">
            <h2 class="text-[#008d8d]
            block font-bold text-4xl mb-6 lg:text-5xl text-center">Fee Transaksi</h2>
        </div>
        <div class="flex flex-wrap lg:justify-center">
            <div class="w-full h-50 lg:max-w-sm text-center mb-5">
                <div class="rounded-full mb-5 m-auto">
                    <p class="text-[#fdc330] block font-bold text-6xl">0,151%</p>
                </div>
                <H1 class="font-bold text-2xl mb:text-3xl">Fee Beli</H1>
            </div>
            <div class="w-full h-50 lg:max-w-sm text-center mb-5">
                <div class=" rounded-full mb-5 m-auto">
                    <p class="text-[#fdc330] block font-bold text-6xl ">0.251%</p>
                </div>
                <H1 class="font-bold text-2xl mb:text-3xl">Fee Jual</H1>
            </div>
        </div>
    </div>
</section>

<section id="about" class="pt-36" >
    <div class="container">
        <div class="w-full px-4 mb-10">
            <h2 class="text-[#008d8d]
            block font-bold text-4xl mb-6 lg:text-5xl text-center">Pembukaan Rekening</h2>
        </div>
        <div class="mx-auto bg-center">
            <div class="h-[400px] bg-[#fdc330] rounded-3">
                <div class="text-center">
                    <div class="pt-[200px]">
                        <h1 class="block font-bold text-xl mb-5 lg:text-2xl">Gambar ilustrasi Pendaftaran 100% online cepat bis trading di hari yang sama</h1>
                        <a href="" class="text-base font-semibold text-white bg-[#008d8d] py-3 px-8 
                        rounded-full hover:shadow-lg hover:bg-[#006c6c] trasition duration-300
                        ease-in-out">Register Now</a>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="pt-36" >
    <div class="container">
        <div class="lg:flex justify-between mx-auto">
            <div class="lg:w-1/2 mb-10 lg:mb-0">
                <div class="flex justify-between lg:w-[610px]">
                    <H1 class="font-bold text-2xl mb:text-3xl">Riset</H1>
                    <a href="" class="hover"><span class="hover:text-[#008d8d]">See All</span></a>
                </div>
                <div class="lg:flex">
                    <div class="mb-2">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-72 h-40">
                            <div class="">
                                <p class="font-sans font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                                <p class="text-slate-500 text-[11px]">2 November 2023</p>
                            </div>
                    </div>
                    <div class="">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-72 h-40">
                            <div class="">
                                <p class="font-sans font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                                <p class="text-slate-500 text-[11px]">2 November 2023</p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2  mb-10 lg:mb-0">
                <div class="flex justify-between lg:w-[610px]">
                    <H1 class="font-bold text-2xl mb:text-3xl">Pengumuman</H1>
                    <a href="" class="hover"><span class="hover:text-[#008d8d]">See All</span></a>
                </div>
                <div class="lg:flex">
                    <div class="mb-2">
                        <img src="{{ asset('image/artikel/artikel2.png') }}" alt="" class="w-72 h-40">
                            <div class="">
                                <p class="font-sans font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                                <p class="text-slate-500 text-[11px]">2 November 2023</p>
                            </div>
                    </div>
                    <div class="">
                        <img src="{{ asset('image/artikel/artikel3.png') }}" alt="" class="w-72 h-40">
                            <div class="">
                                <p class="font-sans font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                                <p class="text-slate-500 text-[11px]">2 November 2023</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="pt-36" >
    <div class="container">
        <div class="mx-auto bg-center">
            <div class="h-[400px] bg-[#fdc330] rounded-3">
                <div class="text-center">
                    <div class="pt-[200px]">
                        <h1 class="block font-bold text-2xl mb-5 lg:text-3xl">Ingin Bertemu Degan Customer Service kami</h1>
                        <a href="" class="text-base font-semibold text-white bg-[#008d8d] py-3 px-8 
                        rounded-full hover:shadow-lg hover:bg-[#006c6c] trasition duration-300
                        ease-in-out">Virtual Office</a>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection