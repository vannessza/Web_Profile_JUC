@extends('layouts.main')

@section('container')

<section>
    <div class="mt-28">
        <div class="container px-[90px] md:px-[90px] lg:pl-[400px]">
            <form action="">
                <label for="email">
                    <h1 class="font-bold font-sans lg:w-96 text-[40px] lg:text-[50px] text-left mb-6">Informasi Update Terkini</h1>
                    <h2 class="font-bold mb-6 text-[15px] lg:text-xl">Riset • Pengumuman • Artikel • Event</h2>
                    <div class="flex">
                        <input type="email" id="email" placeholder="Informasi Terkini"
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
<section>
    <div class="container">
        <div class="w-full px-4 mb-10">
            <div>
                <div class="flex mt-24">
                    <div class="mr-5">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="lg:w-[700px] hidden lg:block">
                    </div>
                    <div>
                        <p class="font-sans font-semibold text-xl  lg:text-3xl text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                        <p class="text-slate-500 text-sm lg:text-[15px] mt-2">2 November 2023 by Jasa Utama Capital Sekuritas</p>
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-96 block lg:hidden mt-4 mx-auto">
                        <p class="mt-4 font-thin max-w-7xl mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit porro animi voluptates fugit aperiam dolore ipsum perspiciatis soluta iusto, temporibus placeat et blanditiis, corporis minus nobis dolorum iste eveniet, delectus vitae expedita a. Eius animi possimus minima alias facere a officiis omnis, labore nemo dolor, molestiae iure quae nam.</p>
                        <a href="{{ route('riset.baca') }}" class="hover mt-2"><span class="hover:bg-[#006c6c] py-3 px-2 bg-[#008d8d] text-white rounded-xl">More Read</span></a>
                    </div>
                </div>
                <div class="flex mt-24">
                    <div class="mr-5">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="lg:w-[700px] hidden lg:block">
                    </div>
                    <div>
                        <p class="font-sans font-semibold text-xl  lg:text-3xl text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                        <p class="text-slate-500 text-sm lg:text-[15px] mt-2">2 November 2023 by Jasa Utama Capital Sekuritas</p>
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-96 block lg:hidden mt-4 mx-auto">
                        <p class="mt-4 font-thin max-w-7xl mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit porro animi voluptates fugit aperiam dolore ipsum perspiciatis soluta iusto, temporibus placeat et blanditiis, corporis minus nobis dolorum iste eveniet, delectus vitae expedita a. Eius animi possimus minima alias facere a officiis omnis, labore nemo dolor, molestiae iure quae nam.</p>
                        <a href="{{ route('riset.baca') }}" class="hover mt-2"><span class="hover:bg-[#006c6c] py-3 px-2 bg-[#008d8d] text-white rounded-xl">More Read</span></a>
                    </div>
                </div>
                <div class="flex mt-24">
                    <div class="mr-5">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="lg:w-[700px] hidden lg:block">
                    </div>
                    <div>
                        <p class="font-sans font-semibold text-xl  lg:text-3xl text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                        <p class="text-slate-500 text-sm lg:text-[15px] mt-2">2 November 2023 by Jasa Utama Capital Sekuritas</p>
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-96 block lg:hidden mt-4 mx-auto">
                        <p class="mt-4 font-thin max-w-7xl mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit porro animi voluptates fugit aperiam dolore ipsum perspiciatis soluta iusto, temporibus placeat et blanditiis, corporis minus nobis dolorum iste eveniet, delectus vitae expedita a. Eius animi possimus minima alias facere a officiis omnis, labore nemo dolor, molestiae iure quae nam.</p>
                        <a href="{{ route('riset.baca') }}" class="hover mt-2"><span class="hover:bg-[#006c6c] py-3 px-2 bg-[#008d8d] text-white rounded-xl">More Read</span></a>
                    </div>
                </div>
                <div class="flex mt-24">
                    <div class="mr-5">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="lg:w-[700px] hidden lg:block">
                    </div>
                    <div>
                        <p class="font-sans font-semibold text-xl  lg:text-3xl text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                        <p class="text-slate-500 text-sm lg:text-[15px] mt-2">2 November 2023 by Jasa Utama Capital Sekuritas</p>
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-96 block lg:hidden mt-4 mx-auto">
                        <p class="mt-4 font-thin max-w-7xl mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit porro animi voluptates fugit aperiam dolore ipsum perspiciatis soluta iusto, temporibus placeat et blanditiis, corporis minus nobis dolorum iste eveniet, delectus vitae expedita a. Eius animi possimus minima alias facere a officiis omnis, labore nemo dolor, molestiae iure quae nam.</p>
                        <a href="{{ route('riset.baca') }}" class="hover mt-2"><span class="hover:bg-[#006c6c] py-3 px-2 bg-[#008d8d] text-white rounded-xl">More Read</span></a>
                    </div>
                </div>
                <div class="flex mt-24">
                    <div class="mr-5">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="lg:w-[700px] hidden lg:block">
                    </div>
                    <div>
                        <p class="font-sans font-semibold text-xl  lg:text-3xl text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                        <p class="text-slate-500 text-sm lg:text-[15px] mt-2">2 November 2023 by Jasa Utama Capital Sekuritas</p>
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-96 block lg:hidden mt-4 mx-auto">
                        <p class="mt-4 font-thin max-w-7xl mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit porro animi voluptates fugit aperiam dolore ipsum perspiciatis soluta iusto, temporibus placeat et blanditiis, corporis minus nobis dolorum iste eveniet, delectus vitae expedita a. Eius animi possimus minima alias facere a officiis omnis, labore nemo dolor, molestiae iure quae nam.</p>
                        <a href="{{ route('riset.baca') }}" class="hover mt-2"><span class="hover:bg-[#006c6c] py-3 px-2 bg-[#008d8d] text-white rounded-xl">More Read</span></a>
                    </div>
                </div>
                <div class="flex mt-24">
                    <div class="mr-5">
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="lg:w-[700px] hidden lg:block">
                    </div>
                    <div>
                        <p class="font-sans font-semibold text-xl  lg:text-3xl text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, provident?</p>
                        <p class="text-slate-500 text-sm lg:text-[15px] mt-2">2 November 2023 by Jasa Utama Capital Sekuritas</p>
                        <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="w-96 block lg:hidden mt-4 mx-auto">
                        <p class="mt-4 font-thin max-w-7xl mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit porro animi voluptates fugit aperiam dolore ipsum perspiciatis soluta iusto, temporibus placeat et blanditiis, corporis minus nobis dolorum iste eveniet, delectus vitae expedita a. Eius animi possimus minima alias facere a officiis omnis, labore nemo dolor, molestiae iure quae nam.</p>
                        <a href="{{ route('riset.baca') }}" class="hover mt-2"><span class="hover:bg-[#006c6c] py-3 px-2 bg-[#008d8d] text-white rounded-xl">More Read</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection