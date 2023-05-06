<style>
    /* 3d animation */
    /* .card:hover .box {
        transform: rotateY(180deg);
    } */
    :root {
        --color-text: navy;
        --color-bg: papayawhip;
        --color-bg-accent: #1B1B3A;
        --size: clamp(7rem, 1rem + 40vmin, 30rem);
        --gap: calc(var(--size) / 10);
        --duration: 60s;
        --scroll-start: 0;
        --scroll-end: calc(-100% - var(--gap));
    }


    .marquee {
        display: flex;
        overflow: hidden;
        user-select: none;
        gap: var(--gap);
        mask-image: linear-gradient(var(--mask-direction, to right),
                hsl(0 0% 0% / 0),
                hsl(0 0% 0% / 1) 20%,
                hsl(0 0% 0% / 1) 80%,
                hsl(0 0% 0% / 0));
    }

    .marquee__group {
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: var(--gap);
        min-width: 100%;
        animation: scroll-x var(--duration) linear infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .marquee__group {
            animation-play-state: paused;
        }
    }

    .marquee--reverse .marquee__group {
        animation-direction: reverse;
        animation-delay: -3s;
    }

    @keyframes scroll-x {
        from {
            transform: translateX(var(--scroll-start));
        }

        to {
            transform: translateX(var(--scroll-end));
        }
    }

  

    /* Element styles */
   

    /* Parent wrapper */
    .wrapper {
        display: flex;
        flex-direction: column;
        gap: var(--gap);
        margin: auto;
        max-width: 100vw;
    }


    /* Toggle direction button */
    .toggle {
        --size: 3rem;
        position: relative;
        position: fixed;
        top: 1rem;
        left: 1rem;
        width: var(--size);
        height: var(--size);
        font: inherit;
        text-align: center;
        cursor: pointer;
        outline: none;
        border: none;
        border-radius: 50%;
        color: inherit;
        background-color: var(--color-bg-accent);
        z-index: 1;
    }

    .toggle:focus-visible {
        box-shadow: 0 0 0 2px var(--color-text);
    }

    .toggle span {
        position: absolute;
        display: inline-block;
        top: 50%;
        left: calc(100% + 0.4em);
        width: fit-content;
        white-space: nowrap;
        transform: translateY(-50%);
        animation: fade 400ms 4s ease-out forwards;
        user-select: none;
    }


    /* Element styles */
    .marquee img {
        display: grid;
        place-items: center;
        width: 250px;
        height: 150px;
        fill: var(--color-text);
        background: var(--color-bg-accent);
        aspect-ratio: 16/9;
        padding: calc(var(--size) / 10) calc(var(--size) / 5);
        border-radius: 0.5rem;
    }



    /* Parent wrapper */
    .wrapper {
        display: flex;
        flex-direction: column;
        gap: var(--gap);
        margin: auto;
        max-width: 100vw;
    }


    /* Toggle direction button */
    .toggle {
        --size: 3rem;
        position: relative;
        position: fixed;
        top: 1rem;
        left: 1rem;
        width: var(--size);
        height: var(--size);
        font: inherit;
        text-align: center;
        cursor: pointer;
        outline: none;
        border: none;
        border-radius: 50%;
        color: inherit;
        background-color: var(--color-bg-accent);
        z-index: 1;
    }

    .toggle:focus-visible {
        box-shadow: 0 0 0 2px var(--color-text);
    }

    .toggle span {
        position: absolute;
        display: inline-block;
        top: 50%;
        left: calc(100% + 0.4em);
        width: fit-content;
        white-space: nowrap;
        transform: translateY(-50%);
        animation: fade 400ms 4s ease-out forwards;
        user-select: none;
    }

    .toggle img {
        --size: 1.5rem;
        position: absolute;
        top: 50%;
        left: 50%;
        width: var(--size);
        height: var(--size);
        fill: currentcolor;
        transform: translate(-50%, -50%);
        transition: transform 300ms cubic-bezier(0.25, 1, 0.5, 1);
    }



    @keyframes fade {
        to {
            opacity: 0;
            visibility: hidden;
        }
    }
</style>
<section class="relative overflow-hidden py-12 lg:py-20 min-h-screen">
    <div class="container m-auto lg:py-3 bg-transparent flex flex-col lg:flex-row justify-center items-center">
        <div class=" w-full lg:w-6/12 relative">
            <div class="flex pl-5 m-auto flex-col justify-center items-center md:items-start">
                <h1 data-replace="Skills." role="heading"
                    class="worksheader swap leading-10 pb-4 lg:text-7xl md:text-5xl text-darkblue text-3xl font-bold capitalize transition-all delay-75 ">
                    <span>Skills.
                    </span>
                </h1>
            </div>
        </div>
        <div class=" w-full lg:w-6/12 relative ">

        </div>
    </div>
    <div class="container relative m-auto px-5 ">
           
        <article class="wrapper">
            <div class="marquee">
                <div class="marquee__group">
                    <img class="m-auto" src="{{ asset('images/Vue.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/tailwind.png') }}" />
                    <img class="m-auto " src="{{ asset('images/html.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/css.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/php.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/python.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/js.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/laravel.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/livewire.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/mysql.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/jetstream.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/git.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/github.png') }}"alt="" />
                    <img class="m-auto " src="{{ asset('images/docker.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/vscode.png') }}"alt="" />
                </div>
                <div class="marquee__group">
                    <img class="m-auto" src="{{ asset('images/Vue.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/tailwind.png') }}" />
                    <img class="m-auto " src="{{ asset('images/html.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/css.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/php.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/python.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/js.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/laravel.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/livewire.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/mysql.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/jetstream.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/git.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/github.png') }}"alt="" />
                    <img class="m-auto " src="{{ asset('images/docker.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/vscode.png') }}"alt="" />
                </div>
            </div>

            <div class="marquee marquee--reverse">
                <div class="marquee__group">
                    <img class="m-auto" src="{{ asset('images/Vue.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/tailwind.png') }}" />
                    <img class="m-auto " src="{{ asset('images/html.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/css.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/php.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/python.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/js.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/laravel.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/livewire.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/mysql.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/jetstream.png') }}"alt="" />
                    <img class="m-auto" src="{{ asset('images/git.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/github.png') }}"alt="" />
                    <img class="m-auto " src="{{ asset('images/docker.png') }}"alt="" />
                    <img class="m-auto " src="{{ asset('images/vscode.png') }}"alt="" />

                </div>
                <div class="marquee__group">
                    <img class="m-auto" src="{{ asset('images/Vue.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/tailwind.png') }}" />
                    <img class="m-auto " src="{{ asset('images/html.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/css.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/php.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/python.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/js.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/laravel.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/livewire.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/mysql.png') }}" alt="" />
                    <img class="m-auto " src="{{ asset('images/jetstream.png') }}"alt="" />
                    <img class="m-auto" src="{{ asset('images/git.png') }}" alt="" />
                    <img class="m-auto" src="{{ asset('images/github.png') }}"alt="" />
                    <img class="m-auto " src="{{ asset('images/docker.png') }}"alt="" />
                    <img class="m-auto " src="{{ asset('images/vscode.png') }}"alt="" />

                </div>
            </div>
        </article>
    </div>
    {{-- #d animation --}}
    {{-- <div class="container relative grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8  lg:gap-4 lg:grid-cols-4 m-auto ">
        <div style="transform-style: preserve-3d; perspective:1000px;"
            class="card group relative w-72 h-80 m-auto sm:m-6 ">
            <div style="transform-style: preserve-3d;  "
                class="box absolute top-0 left-0 w-full h-full bg-darkblue shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/php.png') }}" alt="" />
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/python.png') }}" alt="" />
                    </div>
                    <div class="flex w-6/12 h-1/2 ">
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/js.png') }}" alt="" />
                    </div>
                </div>
                <div style="backface-visibility: hidden; transform-style:preserve-3d; transform: rotateY(180deg); "
                    class="contentBx absolute top-0 left-0 w-full h-full bg-darkblue flex justify-center items-center ">

                    <div style=" transform-style:preserve-3d; transform:translateZ(120px)  "
                        class="content p-5 bg-gradient-to-r from-red  ">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white">Language</h3>
                        <p class=" text-sm font-light text-white"> These are the languages I employ while system
                            programming, software engineering, creating websites, conducting data science, and analysing
                            data.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="transform-style: preserve-3d; perspective:1000px;"
            class="card group relative w-72 h-80 m-auto sm:m-6 ">
            <div style="transform-style: preserve-3d;  "
                class="box absolute top-0 left-0 w-full h-full bg-darkblue shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/Vue.png') }}" alt="" />
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/tailwind.png') }}"
                            alt="" />
                    </div>
                    <div class="flex w-full h-1/2 ">
                        <img class="   w-[100px] h-[100px] m-auto " src="{{ asset('images/html.png') }}" alt="" />
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/css.png') }}" alt="" />
                    </div>
                </div>
                <div style="backface-visibility: hidden; transform-style:preserve-3d; transform: rotateY(180deg); "
                    class="contentBx absolute top-0 left-0 w-full h-full bg-darkblue flex justify-center items-center ">

                    <div style=" transform-style:preserve-3d; transform:translateZ(120px)  "
                        class="content p-5 bg-gradient-to-r from-red  ">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white">Front-End</h3>
                        <p class=" text-sm font-light text-white">These are the technologies I employ for component
                            design, component construction, and front-end development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="transform-style: preserve-3d; perspective:1000px;"
            class="card group relative w-72 h-80 m-auto sm:m-6 ">
            <div style="transform-style: preserve-3d;  "
                class="box absolute top-0 left-0 w-full h-full bg-darkblue shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/laravel.png') }}" alt="" />
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/livewire.png') }}"  alt="" />
                    </div>
                    <div class="flex w-full h-1/2 ">
                        <img class="   w-[100px] h-[100px] m-auto " src="{{ asset('images/mysql.png') }}"  alt="" />
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/jetstream.png') }}" alt="" />
                    </div>
                </div>
                <div style="backface-visibility: hidden; transform-style:preserve-3d; transform: rotateY(180deg); "
                    class="contentBx absolute top-0 left-0 w-full h-full bg-darkblue flex justify-center items-center ">

                    <div style=" transform-style:preserve-3d; transform:translateZ(120px)  "
                        class="content p-5 bg-gradient-to-r from-red  ">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white">Back-End</h3>
                        <p class=" text-sm font-light text-white"> These are the technologies I employ for designing
                            database architectures and back-end development.</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="transform-style: preserve-3d; perspective:1000px;"
            class="card group relative w-72 h-80 m-auto sm:m-6 ">
            <div style="transform-style: preserve-3d;  "
                class="box absolute top-0 left-0 w-full h-full bg-darkblue shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/git.png') }}" alt="" />
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/github.png') }}"alt="" />
                    </div>
                    <div class="flex w-full h-1/2 ">
                        <img class="   w-[100px] h-[100px] m-auto " src="{{ asset('images/docker.png') }}" alt="" />
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/vscode.png') }}"alt="" />
                    </div>
                </div>
                <div style="backface-visibility: hidden; transform-style:preserve-3d; transform: rotateY(180deg); "
                    class="contentBx absolute top-0 left-0 w-full h-full bg-darkblue flex justify-center items-center ">

                    <div style=" transform-style:preserve-3d; transform:translateZ(120px)  "
                        class="content p-5 bg-gradient-to-r from-red  ">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white">Tools</h3>
                        <p class=" text-sm font-light text-white"> These are the tools I use for container
                            orchestration, code editing, and version control.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>

@pushOnce('scripts')
    <script></script>
@endpushOnce
