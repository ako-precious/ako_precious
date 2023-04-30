{{-- @pushOnce('styles') --}}
<style>
    .waterlike {
        border-radius: 52% 48% 77% 23% / 45% 59% 41% 55%;
        background-color: #93032E;
    }

    .outer:hover .waterlike {
        border-radius: 32% 68% 67% 33% / 56% 60% 40% 44%;
        background-color: #1B1B3A;
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
        animation: smoke 2.5s linear forwards;
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
        transition: transform .3s cubic-bezier(0.76, 0, 0.24, 1);
    }

    .swap::after {
        content: attr(data-replace);
        height: 100%;
        top: 0;
        transform-origin: 100% 50%;
        transform: translate3d(200%, 0, 0);
        transition: transform .3s cubic-bezier(0.76, 0, 0.24, 1);
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
        transition: transform .3s cubic-bezier(0.76, 0, 0.24, 1);
    }

    .swap:hover span {
        transform: translate3d(-200%, 0, 0);
    }


    a::before {
        content: "";
        background: #93032E;        
    } 
     a::after {
        content: "";
        background: #93032E;
        
    }
    a span {
            position: absolute;
            z-index: 1;
            color: #fff;
            font-size: 18px;
            transition: 0.5s;
        }

        a span:nth-child(1) {
            transition-delay: 0.75s;
        }

        a:hover span:nth-child(1) {
            transform: scale(0);
            transition-delay: 0s;
        }

        a span:nth-child(2) {
            transition-delay: 0s;
            transform: scale(3);
            opacity: 0;
        }

        a:hover span:nth-child(2) {
            transform: scale(1);
            transition-delay: 0s;
            z-index: 10;
            color: #fff;
            opacity: 1;
            transition-delay: 0.5s;
        }
   
    /* End of swap animation */
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
<section
    class="min-h-screen banner py-20 overflow-hidden relative w-full flex flex-col lg:flex-row justify-center items-center">
    @include('includes.parrallex')
    <div class=" w-11/12 lg:w-6/12 relative written-text">
        <div class="flex w-64 md:w-96 m-auto flex-col justify-center">
            <h1 data-replace="Full-Stack developer." role="heading" style="color:#1B1B3A;"
                class="swap leading-10 pb-4 lg:text-7xl md:text-5xl text-3xl font-bold capitalize transition-all delay-75 ">
                <span>Full-Stack <br> developer.
                </span>
            </h1>
            <p style="color:#1B1B3A;" class="text pb-4  text-base">I, as a full stack developer, can provide the
                technical
                expertise and creative solutions necessary to
                build a website that stands out by reflexing how you want the world to see you.</p>
            <a style="background: #1B1B3A; "
                class="text-white overflow-hidden relative w-40 h-14 flex justify-center items-center ease-in-out transition-all
                before:absolute before:top-0 before:left-0 before:w-1 before:h-full   before:delay-500 before:duration-700 
                after:absolute after:top-0 after:right-0 after:w-1 after:h-full  after:delay-500 after:duration-700 
                hover:after:w-6/12 hover:before:w-6/12 hover:after:delay-500 hover:before:delay-500"
                href="">
                <span>Contact Me</span>                           
                <span>Contact Me</span>                           
                
            </a>
        </div>
    </div>
    <div class="w-11/12 lg:w-6/12 pt-3 m-auto relative my-image">
        <div class="outer grid place-items-center layer "data-speed="0">
            <div
                class="waterlike z-20 bg-white w-64 md:w-80 h-64 md:h-80 overflow-hidden transition-all delay-75 duration-500">
                <img src="{{ asset('images/akoprecious.jpg') }}" class=" w-full h-full object-cover " alt="">
            </div>
            <div
                class="waterlike z-10 below bg-white w-64 md:w-80 h-64 md:h-80 overflow-hidden transition-all delay-100 duration-700 mt-8 mr-8 ">

            </div>
        </div>
    </div>
</section>
<script>
    // Creating a smoke animation
    const text = document.querySelector('.text');
    text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");

    // now, add active class on hovered <span> tag const letters = document.querySelectorAll('span');
    const letters = document.querySelectorAll('span');
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
            opacity: 1
        })
        .from(".banner", {
            duration: 2,
            opacity: 0
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

{{-- @endPushOnce --}}
