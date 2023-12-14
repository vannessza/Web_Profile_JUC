@extends('layouts.main')

@section('container')

<section>
    <div class="mt-28 w-full h-52 bg-[#008d8d] py-14 px-4">
        <div class="container px-[55px] md:px-[90px] lg:px-[360px]">
            <form action="">
                <label for="email">
                    <h1 class="font-bold text-cyan-50 font-sans text-2xl lg:text-3xl text-center mb-2">Pusat Bantuan</h1>
                    <div class="flex">
                        <input type="email" id="email" placeholder="Carilah Permasalahan Anda"
                        class="px-3 py-2 border rounded-l shadow w-60 md:w-[500px] block 
                        text-sm placeholder:text-slate-400
                        focus:outline-none focus:ring-1 focus:ring-sky-500
                        focus:border-sky-500 invalid:text-pink-600
                        invalid:focus:ring-pink-700
                        invalid:focus:border-pink-700 peer">
                        <button class="w-10  bg-slate-200 shadow px-2 rounded-r hover:bg-slate-400"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                            <path d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"></path>
                            </svg></button>
                    </div>
                </label>
            </form>
        </div>
    </div>
</section>
@yield('pusatbantuan')

@endsection