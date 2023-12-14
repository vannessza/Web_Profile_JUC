@extends('headerpusatbantuan')

@section('pusatbantuan')
<section>
    <div class="container">
        <div class="w-full mt-10 px-4 mb-10">
            <h2 class="text-[#008d8d]
            block font-bold text-xl mb-4 lg:text-2xl">Permasalahan Yang sering di Cari</h2>
            <div>
                <div class="flex flex-wrap lg:justify-between">
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                </div>
                <div class="flex flex-wrap lg:justify-between">
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                </div>
                <div class="flex flex-wrap lg:justify-between">
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                </div>
                <div class="flex flex-wrap lg:justify-between">
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                    <a href="" class="flex justify-between w-full lg:max-w-md p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-sm">
                            <p class="font-thin lg:text-xl ml-2 my-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                </div>
            </div>
                <h2 class="text-[#008d8d]
                block font-bold text-xl mb-4 lg:text-2xl mt-7">Kategori Pertanyaan</h2>
            <div class="hidden lg:block">
                <div class="flex flex-wrap justify-between mb-20">
                    <a href="{{ route('menubantuan') }}" class="w-1/3">
                        <div class="flex">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/general.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">General</h1>
                            </div>
                        </div>
                    </a>
                    <a href="" class="w-1/3">
                        <div class="flex">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/pembukaan-account.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">Pembukaan Account</h1>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/pemindahan-saham.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">Pemindahan Saham</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex flex-wrap justify-between mb-20">
                    <a href="" class="w-1/3">
                        <div class="flex">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/penarikan-dana.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">Penarikan Dana</h1>
                            </div>
                        </div>
                    </a>
                    <a href="" class="w-1/3">
                        <div class="flex">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/online-trading-account.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">Online trading Account</h1>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex mr-5">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/corporate-actions.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">Corporate Actions</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex flex-wrap">
                    <a href="" class="w-[455px]">
                        <div class="flex">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/e-ipo.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">e-IPO</h1>
                            </div>
                        </div>
                    </a>
                    <a href="" class="w-1/3">
                        <div class="flex">
                            <div class="my-auto">
                                <img src="{{ asset('image/pusatbantuan/join.png') }}" class="mr-6 w-20" alt="">
                            </div>
                            <div class="my-auto">
                                <h1 class="font-bold text-center text-2xl">JOIN</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="lg:hidden font-inter grid grid-cols-2 gap-2 md:grid-cols-3 lg:px-20">
            
                <div class="w-48 h-32 mb-4">
                    <a href="{{ route('menubantuan') }}">
                        <img src="{{ asset('image/pusatbantuan/general.png') }}" class="ml-14 w-20" alt="">
                        <h1 class="font-bold text-center text-lg">General</h1>
                    </a>
                </div>
                <div class="w-48 h-32 mb-4">
                    <img src="{{ asset('image/pusatbantuan/pembukaan-account.png') }}" class="ml-14 w-20" alt="">
                    <h1 class="font-bold text-center text-lg">Pembukaan Account</h1>
                </div>
                <div class="w-48 h-32 mb-4">
                    <img src="{{ asset('image/pusatbantuan/pemindahan-saham.png') }}" class="ml-14 w-20" alt="">
                    <h1 class="font-bold text-center text-lg">Pemindahan Saham</h1>
                </div>
                <div class="w-48 h-32 mb-4">
                    <img src="{{ asset('image/pusatbantuan/penarikan-dana.png') }}" class="ml-14 w-20" alt="">
                    <h1 class="font-bold text-center text-lg">Penarikan Dana</h1>
                </div>
                <div class="w-48 h-32 mb-4">
                    <img src="{{ asset('image/pusatbantuan/online-trading-account.png') }}" class="ml-14 w-20" alt="">
                    <h1 class="font-bold text-center text-lg">Online Trading Account</h1>
                </div>
                <div class="w-48 h-32 mb-4">
                    <img src="{{ asset('image/pusatbantuan/corporate-actions.png') }}" class="ml-14 w-20" alt="">
                    <h1 class="font-bold text-center text-lg">Corporate Actions</h1>
                </div>
                <div class="w-48 h-32 mb-4">
                    <img src="{{ asset('image/pusatbantuan/e-ipo.png') }}" class="ml-14 w-20" alt="">
                    <h1 class="font-bold text-center text-lg">e-IPO</h1>
                </div>
                <div class="w-48 h-32 mb-4">
                    <img src="{{ asset('image/pusatbantuan/join.png') }}" class="ml-14 w-20" alt="">
                    <h1 class="font-bold text-center text-lg">JOIN</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="w-full mt-36 px-4 mb-10">
            <div class="flex flex-wrap justify-between">
                <div>
                    <h1 class="font-bold ">Tidak dapat menemukan yang dibutuhkan ?</h1>
                    <p>Telp kami atau kirim email.</p>
                </div>
                <div class="flex mt-2">
                    <a href="" class="px-3 py-3 bg-[#008d8d] mr-2 rounded-lg flex text-white">
                        Telp
                    </a>
                    <a href="" class="px-3 py-3 bg-[#008d8d] rounded-lg flex text-white" >
                        Email
                    </a>
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