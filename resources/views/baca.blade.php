@extends('layouts.main')

@section('container')
<section class="pt-24">
    <div class="container lg:px-60">
        <div class="mb-16">
            <p class="text-slate-400 italic text-[13px] mb-16">Home / Riset / Lorem ipsum dolor sit amet.</p>
            <h1 class="font-bold text-4xl lg:text-5xl mb-2">Lorem ipsum dolor sit amet</h1>
            <p class="text-slate-400 italic text-[13px]">2 November 2023 By <span class="text-slate-500">Jasa Utama Capital</span></p>
        </div>
        <div class="mb-16">
            <img src="{{ asset('image/artikel/artikel.png') }}" alt="" class="max-w-full lg:max-w-4xl">
        </div>
        <div class="font-thin max-w-full lg:max-w-4xl lg:text-xl mb-16">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Earum veritatis quisquam cum eaque alias esse, eum et 
                recusandae modi delectus aliquam quos, consequatur 
                quasi dolores perspiciatis quas tempora quod laborum 
                voluptatibus optio quae nihil accusamus rerum! Dolorum 
                deserunt qui itaque ea optio tenetur voluptatum ullam maiores 
                doloremque non assumenda, dolorem veniam? Dicta, qui iusto 
                facilis sed molestias unde ipsam eius rem rerum recusandae 
                velit quod perspiciatis quos sapiente animi aspernatur 
                doloremque tempora ad et assumenda? Fugit soluta odit commodi 
                ea expedita provident nulla, impedit, libero culpa illum 
                praesentium velit! Fuga soluta quos sit expedita amet at, 
                aut quaerat fugit assumenda atque veritatis itaque illo. Id 
                amet eos pariatur molestias libero illo ab saepe atque, nemo 
                delectus unde labore minima, sapiente, eaque architecto maxime 
                cupiditate cum. Cum dolorem dolor autem molestias totam! 
                Aspernatur, magni reiciendis! Qui nam neque quibusdam, voluptas 
                in magni debitis ut consectetur quo, illo maxime rerum corrupti 
                temporibus modi architecto. Expedita nemo molestias cum iure maiores
                rerum. Error voluptatum veritatis minus tempore incidunt obcaecati
                repellat enim vero numquam nemo animi, dicta libero cum maiores 
                impedit laudantium quis, odit consequuntur. Non nulla aliquam
                qui quod voluptatem maiores facere ex, iure aspernatur sint
                consectetur at error rem repellat adipisci ipsa.</p>
        </div>
        <div>
            <h2 class="block font-bold text-2xl mb-5 lg:text-4xl">Terkait</h2>
            <div>
                <a href="" class="flex mb-3 group">
                    <img src="{{ asset('image/artikel/artikel.png') }}" class="w-[110px] mr-5" alt="">
                    <div class="group-hover:text-[#008d8d]">
                        <p class="font-bold text-[16px] lg:text-2xl">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        <p class="text-slate-400 italic text-[13px]">2 November 2023 By <span class="text-slate-500">Jasa Utama Capital</span></p>
                    </div>
                </a>
                <a href="" class="flex mb-3 group">
                    <img src="{{ asset('image/artikel/artikel3.png') }}" class="w-[110px] mr-5" alt="">
                    <div class="group-hover:text-[#008d8d]">
                        <p class="font-bold text-[16px] lg:text-2xl">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        <p class="text-slate-400 italic text-[13px]">2 November 2023 By <span class="text-slate-500">Jasa Utama Capital</span></p>
                    </div>
                </a>
                <a href="" class="flex mb-3 group">
                    <img src="{{ asset('image/artikel/artikel2.png') }}" class="w-[110px] mr-5" alt="">
                    <div class="group-hover:text-[#008d8d]">
                        <p class="font-bold text-[16px] lg:text-2xl">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        <p class="text-slate-400 italic text-[13px]">2 November 2023 By <span class="text-slate-500">Jasa Utama Capital</span></p>
                    </div>
                </a>
                <a href="" class="flex mb-3 group">
                    <img src="{{ asset('image/artikel/artikel4.png') }}" class="w-[110px] mr-5" alt="">
                    <div class="group-hover:text-[#008d8d]">
                        <p class="font-bold text-[16px] lg:text-2xl">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        <p class="text-slate-400 italic text-[13px]">2 November 2023 By <span class="text-slate-500">Jasa Utama Capital</span></p>
                    </div>
                </a>
                <a href="" class="flex mb-3 group">
                    <img src="{{ asset('image/artikel/artikel5.png') }}" class="w-[110px] mr-5" alt="">
                    <div class="group-hover:text-[#008d8d]">
                        <p class="font-bold text-[16px] lg:text-2xl">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        <p class="text-slate-400 italic text-[13px]">2 November 2023 By <span class="text-slate-500">Jasa Utama Capital</span></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection