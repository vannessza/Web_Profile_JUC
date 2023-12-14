<Header class="bg-white absolute top-0 left-0 w-full flex
items-center z-10 h-[100px]">
 <div class="container">
    <div class="flex items-center justify-between relative">
        <div class="px-4">
            <a href="/"><img src="{{ asset('image/logo/logo1.png') }}" class="w-20 py-6" alt=""></a>
        </div>
        <div class="flex items-center px-4">
            <Button id="menuline" name="menuline" type="button" 
            class="block absolute right-4 lg:hidden">
                <span class="menuline bg-[#008d8d] transition duration-300
                ease-in-out origin-top-left"></span>
                <span class="menuline bg-[#fdc330] transition duration-300
                ease-in-out"></span>
                <span class="menuline bg-[#008d8d] transition duration-300
                ease-in-out origin-bottom-left"></span>
            </Button>
            

            <nav id= "nav-menu" class="hidden absolute py-full bg-white
            rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static
            lg:bg-transparent lg:max-w-full">

                <ul class="block lg:flex font-bold">
                    
                    <li class="group">
                        <a href="{{ route('tentangkami.siapakita') }}" class="text-base py-2 mx-8 flex group-hover:text-[#008d8d]{{ Request::is('Tentang Kami/Siapa Kita') ? ' text-[#008d8d] lg:border-b-2 lg:border-[#008d8d]' : (Request::is('Tentang Kami/Tata Kelola') ? ' text-[#008d8d]' : '') }}">Tentang Kami</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('riset') }}" class="text-base py-2 mx-8
                        flex group-hover:text-[#008d8d] <?php echo Request::is('Riset') ? ' text-[#008d8d] lg:border-b-2 lg:border-[#008d8d]' : ''; ?>">Blog</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('hubungikami') }}" class="text-base py-2 mx-8
                        flex group-hover:text-[#008d8d] <?php echo Request::is('Hubungi Kami') ? ' text-[#008d8d] lg:border-b-2 lg:border-[#008d8d]' : ''; ?>">Hubungi Kami</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('pusatbantuan') }}" class="text-base py-2 mx-8
                        flex group-hover:text-[#008d8d] <?php echo Request::is('Pusat Bantuan') ? ' text-[#008d8d] lg:border-b-2 lg:border-[#008d8d]' : ''; ?>">Pusat Bantuan</a>
                    </li>
                    <li class="group lg:mr-4 lg:-mt-[8px]">
                        <a href="#" class="text-base py-2 mx-8
                        flex group-hover:text-[#008d8d] lg:hidden">Register</a>
                        <a href="" class="text-base font-semibold text-white bg-[#008d8d] py-[12px] px-8 
                        rounded-full hover:shadow-lg hover:bg-[#006c6c] trasition duration-300
                        ease-in-out hidden lg:block">Register</a>
                    </li>
                    <li class="group lg:-mt-[8px]">
                        <a href="#" class="text-base py-2 mx-8
                        flex group-hover:text-[#008d8d] lg:hidden">JOIN WebTrade</a>
                        <a href="" class="text-base font-semibold text-[#fdc330] border-3 border-[#fdc330] py-[10px] px-8 
                        rounded-full hover:shadow-lg hover:bg-[#fdc330] trasition duration-300
                        ease-in-out group hidden lg:block"><span class="group-hover:text-white">JOIN WebTrade</span></a>
                    </li>
                    <li class="group">
                        <a href="{{ route('pusatbantuan') }}" class="text-base py-2 ml-8
                        flex group-hover:text-[#008d8d] <?php echo Request::is('') ? ' text-[#008d8d] border-b-2 border-[#008d8d]' : ''; ?>">ID | EN</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
 </div>
</Header>

