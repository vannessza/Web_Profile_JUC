@extends('layouts.main')

@section('container')

<section class="pt-36">
    <div class="container">
        <div class="w-full px-4 mb-10">
            <h1 class="text-[#008d8d]
            block font-bold text-3xl mb-5 lg:text-4xl">Tentang Kami</h1>
            <div>
                <ul class="flex">
                    <li class="group">
                        <a href="{{ route('tentangkami.siapakita') }}" class="mr-14 font-bold group-hover:text-[#fdc330] <?php echo Request::is('Tentang Kami/Siapa Kita') ? ' text-[#fdc330] border-b-2 border-[#fdc330] pb-2' : ''; ?> ">Siapa Kita</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('tentangkami.tatakelola') }}" class="group-hover:text-[#fdc330] font-bold <?php echo Request::is('Tentang Kami/Tata kelola') ? ' text-[#fdc330] border-b-2 border-[#fdc330] pb-2' : ''; ?>"> Tata Kelola</a>
                    </li>
                </ul>
            </div>
            @yield('tentangkami')
        </div>
    </div>
</section>


@endsection