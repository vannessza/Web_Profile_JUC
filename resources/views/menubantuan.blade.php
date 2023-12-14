@extends('headerpusatbantuan')

@section('pusatbantuan')

<section>
    <div class="container">
        <div class="w-full mt-20 px-4 mb-10">
            <h1 class="text-[#008d8d]
            block font-bold text-xl mb-4 lg:text-2xl">Kategori</h1>
            <div class="flex flex-wrap">
                <div class="mr-40">
                    <div class="font-bold mb-2">
                        <a href="">General</a>
                    </div>
                    <div class="font-bold mb-2">
                        <a href="">Pembukaan Account</a>
                    </div>
                    <div class="font-bold mb-2">
                        <a href="">Pemindahan Saham</a>
                    </div>
                    <div class="font-bold mb-2">
                        <a href="">Penarikan Dana</a>
                    </div>
                    <div class="font-bold mb-2">
                        <a href="">Online Trading Account</a>
                    </div>
                    <div class="font-bold mb-2">
                        <a href="">Corporate Actions</a>
                    </div>
                    <div class="font-bold mb-2">
                        <a href="">e-Ipo</a>
                    </div>
                    <div class="font-bold mb-2">
                        <a href="">JOIN</a>
                    </div>
                </div>
                <div>
                    <a href="{{ route('bacabantuan') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-xs md:max-w-xl md:mr-3 lg:max-w-3xl xl:mr-7">
                            <p class="font-bold lg:text-xl ml-2 my-2">Apa sih KSEI itu?</p>
                            <hr>
                            <p class="font-thin ml-2 my-2">PT Kustodian Sentral Efek Indonesia (KSEI) didirikan di Jakarta pada tanggal 23 Desember 1997.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                    <a href="" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-xs md:max-w-xl md:mr-3 lg:max-w-3xl xl:mr-7">
                            <p class="font-bold lg:text-xl ml-2 my-2">Apakah Fasilitas AKSes KSEI ini diwajibkan?</p>
                            <hr>
                            <p class="font-thin ml-2 my-2">Semua investor yang telah dibukakan Sub Rekening Efek di KSEI berhak mendapatkan akses atas Fasilitas AKSes KSEI melalui Perusahaan Efek atau Bank Kustodian dimana investor terdaftar menjadi nasabah. </p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                    <a href="" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                        <div class="max-w-xs md:max-w-xl md:mr-3 lg:max-w-3xl xl:mr-7">
                            <p class="font-bold lg:text-xl ml-2 my-2">Apa saja manfaat Fasilitas AKSes KSEI?</p>
                            <hr>
                            <p class="font-thin ml-2 my-2">Investor dapat mengakses secara real time data kepemilikan Efek serta mutasinya dalam Sub Rekening Efek yang disimpan di sistem KSEI (C-BEST) hingga 30 hari terakhir.</p>
                        </div>
                        <p class="font-bold lg:text-xl my-2">
                            <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                        </p>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection