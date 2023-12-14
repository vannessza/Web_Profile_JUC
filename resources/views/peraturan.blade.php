@extends('layouts.main')

@section('container')

<section>
    <div class="container">
        <div class="w-full mt-36 px-4 mb-10">
            <h1 class="text-[#008d8d]
            block font-bold text-2xl mb-4 lg:text-4xl">Peraturan</h1>
            <div>
                <a href="{{ route('bacaperaturan') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan Penarikan Dana Nasabah</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
                <a href="{{ route('bacakarir') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan Batas Waktu Maksimum Setoran Dana</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
                <a href="{{ route('bacakarir') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan Pelaporan ke Sistem Layanan Informasi Keuangan (SLIK)</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
                <a href="{{ route('bacakarir') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan Limit Trading</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
                <a href="{{ route('bacakarir') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan e-Ipo oleh PT Jasa Utama Capital Sekuritas</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
                <a href="{{ route('bacakarir') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan Exercise Rights dan Warrant</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
                <a href="{{ route('bacakarir') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan dan Tata Cara Transfer Efek</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
                <a href="{{ route('bacakarir') }}" class="flex justify-between p-2 hover:bg-slate-300 shadow mb-2 items-center">
                    <div class="max-w-xs md:max-w-xl lg:max-w-3xl md:mr-20 xl:mr-28">
                        <p class="font-bold lg:text-xl ml-2 my-2">Peraturan Dormant Account</p>
                    </div>
                    <p class="font-bold lg:text-xl my-2">
                        <img src="{{ asset('image/icon/arrow.png') }}" class="w-6 mx-auto" alt="">
                    </p>
                </a>
            </div>
        </div>

    </div>
</section>

@endsection