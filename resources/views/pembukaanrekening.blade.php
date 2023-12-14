@extends('layouts.main')

@section('container')

<section class="pt-36">
    <div class="container">
        <div class="w-full px-4 mb-10">
            <h1 class="text-[#008d8d]
            block font-bold text-3xl mb-5 lg:text-4xl">Pembukaan Rekening</h1>
            <div class="">
                <ul class="flex">
                    <li class="group">
                        <a href="{{ route('pembukaanindividu') }}" class="mr-14 font-bold group-hover:text-[#fdc330] <?php echo Request::is('Pembukaan Rekening/Rekening Individu') ? ' text-[#fdc330] lg:border-b-2 lg:border-[#fdc330] pb-2' : ''; ?> ">Rekening Individu</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('pembukaaninstitusi') }}" class="group-hover:text-[#fdc330] font-bold mr-14 <?php echo Request::is('Pembukaan Rekening/Rekening Institusi') ? ' text-[#fdc330] lg:border-b-2 lg:border-[#fdc330] pb-2' : ''; ?>"> Rekening Institusi</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('pembukaanmarjin') }}" class="group-hover:text-[#fdc330] font-bold mr-14 <?php echo Request::is('Pembukaan Rekening/Rekening Marjin') ? ' text-[#fdc330] lg:border-b-2 lg:border-[#fdc330] pb-2' : ''; ?>"> Rekening Marjin</a>
                    </li>
                </ul>
            </div>
            @yield('pembukaanrekening')
        </div>
    </div>
</section>

@endsection