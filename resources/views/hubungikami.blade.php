@extends('layouts.main')

@section('container')

{{-- <section>
    <div class="mt-28 w-full h-40 bg-[#008d8d] py-14 px-4">
        <div class="container">
            <h1 class="lg:ml-7 font-bold text-cyan-50 font-sans text-2xl lg:text-4xl">Hubungi Kami</h1>
        </div>
    </div>
</section> --}}
<section class="mt-32">
    <div class="container">
        <div class="w-full px-4 mb-10" id="app">
            <Gmap-map
            :center="{ lat: 10, lng: 10 }"
            :zoom="7"
            style="width: 100%; height: 320px;"
            ></Gmap-map>
            <div class="flex flex-wrap">
                <div class="mb-20 mx-auto xl:w-1/2 mr-2 xl:mx-0 text-center block lg:hidden">
                    <div class="mb-7">
                        <h1 class="font-sans"><span class="font-bold text-xl">PT Jasa Utama Capital Sekuritas</span></h1>
                    </div>
                    <div>
                        <p class="font-sans"><span class="font-bold">Kantor Pusat</span></p>
                        <p class="max-w-xs font-sans">
                            Gedung Kospin Jasa Lt. 7-8, Jl. Gatot Subroto, Daerah Khusus Ibukota Jakarta 12780
                        </p>
                        <p class="mb-7 font-sans">(021) 83789000</p>
                        <p class="font-sans"><span class="font-bold">Jam Operasional</span></p>
                        <p class="font-sans">Senin-Jumat 08.30 - 17.30 WIB</p>
                    </div>
                </div>
                <div class="mb-20 mx-auto xl:w-1/2 mr-2 xl:mx-0 hidden lg:block">
                    <div class="mb-7">
                        <h1 class="font-sans"><span class="font-bold text-xl">PT Jasa Utama Capital Sekuritas</span></h1>
                    </div>
                    <div>
                        <p class="font-sans"><span class="font-bold">Kantor Pusat</span></p>
                        <p class="max-w-xs font-sans">
                            Gedung Kospin Jasa Lt. 7-8, Jl. Gatot Subroto, Daerah Khusus Ibukota Jakarta 12780
                        </p>
                        <p class="mb-7 font-sans">(021) 83789000</p>
                        <p class="font-sans"><span class="font-bold">Jam Operasional</span></p>
                        <p class="font-sans">Senin-Jumat 08.30 - 17.30 WIB</p>
                    </div>
                </div>
                <form action="" class="xl:w-1/2">
                    <label for="email" class="w-full">
                        <span class="block font-semibold mb-1
                        text-slate-700 after:content-['*']
                        after:text-pink-500 after:ml-0.5" >Email</span>
                        <input type="email" id="email" placeholder="Masukkan email.."
                        class="px-3 py-2 border shadow rounded w-full block 
                        text-sm placeholder:text-slate-400
                        focus:outline-none focus:ring-1 focus:ring-sky-500
                        focus:border-sky-500 invalid:text-pink-600
                        invalid:focus:ring-pink-700
                        invalid:focus:border-pink-700 peer">
                        <p class="text-sm m-1 text-pink-700
                        invisible peer-invalid:visible">Email tidak valid</p>
                    </label>
                    <label for="email" class="mb-4 w-full">
                        <span class="block font-semibold mb-1
                        text-slate-700 after:content-['*']
                        after:text-pink-500 after:ml-0.5" >Nama</span>
                        <input type="text" id="email" placeholder="Masukkan Nama.."
                        class="px-3 py-2 border shadow rounded w-full block 
                        text-sm placeholder:text-slate-400
                        focus:outline-none focus:ring-1 focus:ring-sky-500
                        focus:border-sky-500 invalid:text-pink-600">
                    </label>
                    <label for="email" class="mb-4 w-full">
                        <span class="block font-semibold mb-1
                        text-slate-700 after:content-['*']
                        after:text-pink-500 after:ml-0.5" >No Telepon</span>
                        <input type="text" id="email" placeholder="Masukkan Nama.."
                        class="px-3 py-2 border shadow rounded w-full block 
                        text-sm placeholder:text-slate-400
                        focus:outline-none focus:ring-1 focus:ring-sky-500
                        focus:border-sky-500 invalid:text-pink-600">
                    </label>
                    <label for="email" class="mb-4 w-full ">
                        <span class="block font-semibold mb-1
                        text-slate-700 after:content-['*']
                        after:text-pink-500 after:ml-0.5" >Pertanyaan</span>
                        <textarea name="" placeholder="Masukan Pertanyaan" class="px-3 py-2 h-40 border shadow rounded w-full block 
                        text-sm placeholder:text-slate-400
                        focus:outline-none focus:ring-1 focus:ring-sky-500
                        focus:border-sky-500 invalid:text-pink-600" id="" cols="30" rows="10"></textarea>
                    </label>
                    <button class="bg-[#008d8d] px-5
                    py-2 rounded-full text-white font-semibold
                    font-inter block  w-full xl:w-56 hover:bg-[#006c6c]">Kirim</button>
                </form>
                
            </div>
        </div>
    </div>
</section>

@endsection