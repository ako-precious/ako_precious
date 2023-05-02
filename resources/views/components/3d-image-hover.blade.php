<style>
    .card:hover .box {
        transform: rotateY(180deg);
    }
</style>
<section class="relative overflow-hidden py-7 lg:py-14 min-h-screen">
    <div class="container m-auto lg:py-3 bg-transparent flex flex-col lg:flex-row justify-center items-center">
        <div class=" w-full lg:w-6/12 relative">
            <div class="flex pl-5 m-auto flex-col justify-center">
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
    <div class="container relative grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8  lg:gap-4 lg:grid-cols-4 m-auto ">
        <div style="transform-style: preserve-3d; perspective:1000px;"
            class="card group relative w-72 h-80 m-auto sm:m-6 ">
            <div style="transform-style: preserve-3d;  "
                class="box absolute top-0 left-0 w-full h-full bg-red shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/php.png') }}" alt="" />
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/python.png') }}"
                            alt="" />
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
                class="box absolute top-0 left-0 w-full h-full bg-red shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/Vue.png') }}" alt="" />
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/tailwind.png') }}"
                            alt="" />
                    </div>
                    <div class="flex w-full h-1/2 ">
                        <img class="   w-[100px] h-[100px] m-auto " src="{{ asset('images/html.png') }}"
                            alt="" />
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
                class="box absolute top-0 left-0 w-full h-full bg-red shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/laravel.png') }}"
                            alt="" />
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/livewire.png') }}"
                            alt="" />
                    </div>
                    <div class="flex w-full h-1/2 ">
                        <img class="   w-[100px] h-[100px] m-auto " src="{{ asset('images/mysql.png') }}"
                            alt="" />
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/css.png') }}" alt="" />
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
                class="box absolute top-0 left-0 w-full h-full bg-red shadow-2xl rounded-2xl transition-all duration-1000 ease-in">
                <div class="imgBx absolute flex flex-col  top-0 left-0 w-full h-full">
                    <div class="flex w-full h-1/2 ">
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/git.png') }}" alt="" />
                        <img class="w-[100px] h-[100px] m-auto" src="{{ asset('images/github.png') }}"
                            alt="" />
                    </div>
                    <div class="flex w-full h-1/2 ">
                        <img class="   w-[100px] h-[100px] m-auto " src="{{ asset('images/docker.png') }}"
                            alt="" />
                        <img class=" w-[100px] h-[100px] m-auto " src="{{ asset('images/vscode.png') }}"
                            alt="" />
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
    </div>
</section>
