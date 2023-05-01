{{-- @Push('styles') --}}
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<style>
    .waterlike {
        border-radius: 52% 48% 77% 23% / 45% 59% 41% 55%;
    }

    .outer:hover .waterlike {
        animation: watery 6s ease-in-out infinite;

    }

    @keyframes watery {
        0% {
            background: #1B1B3A;
            border-radius: 32% 68% 67% 33% / 56% 60% 40% 44%;
        }

        25% {
            background: #FF521B;
            border-radius: 33% 70% 54% 46% / 40% 34% 66% 60%;
        }

        50% {
            background: #93032E;
            border-radius: 36% 64% 29% 71% / 63% 32% 68% 37%;
        }

        75% {
            background: #034C3C;
            border-radius: 48% 52% 55% 45% / 32% 49% 51% 68%;
        }

        100% {
            background: #1B1B3A;
            border-radius: 32% 68% 67% 33% / 56% 60% 40% 44%;
        }
    }

    .outer {
        grid-template: 1fr / 1fr;
    }

    .outer>* {
        grid-column: 1 / 1;
        grid-row: 1 / 1;
    }

    /* smoke animation */
    section .text span {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    section .text span.active {
        animation: smoke 3s linear forwards;
        transform-origin: bottom;
    }


    @keyframes smoke {

        0% {
            opacity: 1;
            filter: blur(0);
            transform: translatex(0) translateY(0) rotate(0deg) scale(1);
        }

        50% {
            /* opacity: 1;
                pointer-events: none; */
            opacity: 0;
            filter: blur(20px);
            transform: translatex(300px) translateY(-300px) rotate(740deg) scale(4);

        }

        100% {
            /* opacity: 0;
                filter: blur(20px);
                transform: translatex(300) translateY(-300) rotate(740deg) scale(4); */
            opacity: 1;
            filter: blur(0);
            transform: translatex(0) translateY(0) rotate(0deg) scale(1);

        }

    }

    /* end of smoke animation */

    /* link text swap */
    .swap {
        overflow: hidden;
        position: relative;
        display: inline-block;
    }

    .swap::before,
    .swap::after {
        content: '';
        position: absolute;
        width: 100%;
        left: 0;
    }

    .swap::before {
        background-color: #93032E;
        height: 2px;
        bottom: 0;
        transform-origin: 100% 50%;
        transform: scaleX(0);
        transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
    }

    .swap::after {
        content: attr(data-replace);
        height: 100%;
        top: 0;
        transform-origin: 100% 50%;
        transform: translate3d(200%, 0, 0);
        transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
        color: #93032E;
    }

    .swap:hover::before {
        transform-origin: 0% 50%;
        transform: scaleX(1);
    }

    .swap:hover::after {
        transform: translate3d(0, 0, 0);
    }

    .swap span {
        display: inline-block;
        transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
    }

    .swap:hover span {
        transform: translate3d(-200%, 0, 0);
    }


    /* End of swap animation */
</style>
{
{{-- @endPush --}}

<header
    class="header bg-darkblue fixed top-0 left-0 w-full flex justify-start items-center z-50 h-screen transition-all ">
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
<section class="min-h-screen banner py-20 overflow-hidden relative w-full m-auto">
    @include('includes.parrallex')
    <div class="container m-auto bg-transparent flex flex-col lg:flex-row justify-center items-center">
        <div class=" w-full lg:w-6/12 relative written-text">
            <div class="flex w-64 md:w-96 m-auto flex-col justify-center">
                <h1 data-replace="Full-Stack developer." role="heading"
                    class="swap leading-10 pb-4 lg:text-7xl md:text-5xl text-darkblue text-3xl font-bold capitalize transition-all delay-75 ">
                    <span>Full-Stack <br> developer.
                    </span>
                </h1>
                <p class="text pb-4 text-darkblue text-base">I, as a full stack developer, can provide the
                    technical
                    expertise and creative solutions necessary to
                    build a website that stands out by reflexing how you want the world to see you.</p>
                <a 
                class="group text-white link bg-darkblue overflow-hidden relative w-40 h-14 flex justify-center items-center ease-in-out transition-all
                        before:absolute before:top-0 before:left-0 before:w-1 before:h-full before:delay-500 before:duration-700 before:bg-red
                        after:absolute after:top-0 after:right-0 after:w-1 after:h-full after:delay-500 after:duration-700 after:bg-red
                        hover:after:w-6/12 hover:before:w-6/12 hover:after:delay-500 hover:before:delay-500"
                    href="#contact">
                    <span
                        class="absolute text-white text-lg transition-all duration-500 delay-700 group-hover:scale-0 group-hover:delay-0">Contact
                        Me</span>
                    <span
                        class="absolute text-white text-lg transition-all duration-500 delay-0 scale-300 opacity-0
                    group-hover:scale-1 group-hover:z-10 group-hover:opacity-1 group-hover:delay-500">Contact
                        Me</span>
                </a>
            
            </div>
        </div>
        <div class="w-full lg:w-6/12 pt-3 m-auto relative my-image">
            <div class="outer w-64 md:w-80 h-64 md:h-80 m-auto grid place-items-center layer "data-speed="0">
                <div class="waterlike z-20 bg-red w-full h-full overflow-hidden transition-all delay-75 duration-500">
                    <img src="{{ asset('images/akoprecious.jpg') }}" class=" w-full h-full object-cover "
                        alt="">
                </div>
                <div
                    class="waterlike z-10 below bg-red w-full h-full overflow-hidden transition-all delay-100 duration-700 mt-8 mr-8 ">

                </div>
            </div>
        </div>
    </div>
</section>
@pushOnce('scripts')
    <script>
        // Creating a smoke animation
        const text = document.querySelector('.text');
        text.innerHTML = text.textContent.replace(/\S/g, `<span class="smoke">$&</span>`);

        // now, add active class on hovered <span> tag const letters = document.querySelectorAll('span');
        const letters = document.querySelectorAll('.smoke');
        for (let i = 0; i < letters.length; i++) {
            letters[i].addEventListener("mouseover", function() {
                letters[i].classList.toggle('active')
            })
        }

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
                height: '60px'
            })
            .to(".hide", {
                duration: 1,
                fontSize: '14px'
            })
            .to(".marks", {
                duration: 1,
                opacity: 1,
                ease: "bounce"
            })
            .from(".banner", {
                duration: 1.5,
                opacity: 0,
                top: -100,
                ease: "slow"
            })
            .from(".written-text", {
                duration: 1,
                opacity: 0,
                left: -100
            })
            .from(".my-image", {
                duration: 1,
                opacity: 0,
                right: -100
            })
        // parallax animation
        document.addEventListener("mousemove", parallax);

        function parallax(e) {
            this.querySelectorAll('.layer').forEach(layer => {
                const speed = layer.getAttribute('data-speed')
                const x = (window.innerWidth - e.pageX * speed) / 100
                const y = (window.innerHeight - e.pageY * speed) / 100
                layer.style.transform = `translateX(${x}px) translateY(${y}px)`
            })
        }
    </script>
@endpushOnce
