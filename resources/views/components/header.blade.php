{{-- @pushOnce('styles') --}}
<style>
    .waterlike {
        border-radius: 52% 48% 77% 23% / 45% 59% 41% 55%;
    }

    .outer:hover .waterlike {
        border-radius: 32% 68% 67% 33% / 56% 60% 40% 44%;
    }

    .outer {
        grid-template: 1fr / 1fr;
    }

    .outer>* {
        grid-column: 1 / 1;
        grid-row: 1 / 1;
    }
</style>
{{-- @endpushOnce('styles') --}}
<header style="background: #1B1B3A;"
    class="header fixed top-0 left-0 w-full flex justify-start items-center z-50 h-screen transition-all ">
    <div class="ml-6 h-12 w-12">
        <div onclick="menuOpener()"
            class="marks open group right-0 opacity-0 relative  h-12 flex flex-col items-center justify-center w-12   transition-all delay-75 duration-500">
            <div class="bg-white h-1 w-12 z-10 ">
            </div>
            <div
                class="bg-white mt-3 mr-4 h-1 w-8 z-10 transition-all delay-75 duration-500 group-hover:mr-0 group-hover:w-12">
            </div>
        </div>
        <div onclick="menuCloser()"
            class="marks group close -left-28 -top-full opacity-0 my-auto h-12 w-12 relative z-10 transition-all delay-75 duration-500">
            <div
                class=" absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 bg-white my-auto rotate-45 mr-6 h-8 w-1  z-10 transition-all delay-75 duration-500 group-hover:h-12  ">
            </div>
            <div
                class=" absolute top-2/4 left-2/4 -translate-y-2/4 hover: -translate-x-2/4 bg-white my-auto -rotate-45 mr-6 h-6 md:h-12 w-1 z-10 ">
            </div>
        </div>
    </div>
    <h1 class="typing hide absolute top-2/4 left-2/4  -translate-x-2/4  -translate-y-2/4  tracking-widest font-black unpercase text-white z-10 "
        style="font-size:4vw;">AKO's PORTFOLIO </h1>
</header>
{{-- <nav class="fixed inset-0 w-screen flex justify-center items-center h-screen z-10" style="margin-top:60px">
        <ul class="relative w-full  flex flex-col transition-all">
            <li class="list-none text-"><a class="text-center text-white inline-block p-4 hover:text-pink-700" href="#">home</a></li>
            <li class="list-none text-"><a class="text-center text-white inline-block p-4 hover:text-pink-700" href="#">home</a>
            </li>
            <li class="list-none text-"><a class="text-center text-white inline-block p-4 hover:text-pink-700" href="#">home</a>
            </li>
            <li class="list-none text-"><a class="text-center text-white inline-block p-4 hover:text-pink-700" href="#">home</a>
            </li>
        </ul>
    </nav> --}}
{{-- @PushOnce('scripts') --}}
<section class="min-h-screen w-full flex flex-col lg:flex-row justify-center items-center">
    <div class="flex w-6/12 flex-col justify-center px-8  items-center">
        <h1 role="heading"
            class="leading-10 text-gray-100 xl:text-7xl lg:text-8xl md:text-5xl text-2xl font-bold capitalize ">
            Full-Stack <br> developer.
        </h1>
        <p>I, as a full stack developer, can provide the technical expertise and creative solutions necessary to build a
            website that stands out from the competition.</p>
    </div>
    <div class="outer w-6/12 grid place-items-center ">
        <div class="waterlike z-20 bg-white w-80 h-80 overflow-hidden transition-all delay-75 duration-500">
            <img src="{{ asset('images/akoprecious.jpg') }}" class=" w-full h-full object-cover " alt="">
        </div>
        <div style="background-color: brown;"
            class="waterlike z-10 below bg-white w-80 h-80 overflow-hidden transition-all delay-75 duration-500 mt-8 mr-8 ">
            {{-- <img src="{{ asset('images/akoprecious.jpg') }}" class=" w-full h-full object-cover " alt=""> --}}

        </div>
    </div>
</section>

<script>
    var onButton = document.querySelector(".open")

    function menuOpener() {
        document.querySelector(".open").classList.toggle('right-28');
        document.querySelector(".open").classList.toggle('right-0');
        document.querySelector(".close").classList.toggle('left-0');
        document.querySelector(".close").classList.toggle('-left-28');
    }

    function menuCloser() {
        document.querySelector(".open").classList.toggle('right-28');
        document.querySelector(".open").classList.toggle('right-0');
        document.querySelector(".close").classList.toggle('left-0');
        document.querySelector(".close").classList.toggle('-left-28');
    }

    gsap
        .timeline()
        .from(".typing", {
            duration: 3,
            text: ""
        })
        .to(".header", {
            duration: 1,
            height: '65px'
        })
        .to(".hide", {
            duration: 1,
            fontSize: '14px'
        })
        .to(".marks", {
            duration: 1,
            opacity: 1
        })
</script>

{{-- @endPushOnce --}}
