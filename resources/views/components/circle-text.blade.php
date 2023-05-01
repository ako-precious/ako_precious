@pushOnce('scripts')
    <<style>
        .circular {
        /* font-size: 1em; */
        animation: animate 7.5s linear infinite;
        }

        @keyframes animate {
        0% {
        transform: rotate(360deg);
        color: #FF521B;
        }
        100% {
        transform: rotate(0deg);
        }
        }

        section .circular span {
        position: absolute;
        top: -100;
        left: -100;
        text-transform: uppercase;
        display: inline-block;
        transform-origin: 0 70px;
        }
        </style>
    @endpushOnce('styles')
    <section class="relative workssection  overflow-hidden py-7 lg:py-14 min-h-screen bg-darkblue">
        <h6 class="absolute text-white select-none pointer-events-none circular text-xs"> -Selected-Works</h6>
        <div class="container m-auto lg:py-6 bg-transparent flex flex-col lg:flex-row justify-center items-center">
            <div class=" w-full lg:w-6/12 relative">
                <div class="flex pl-5 m-auto flex-col justify-center">
                    <h1 data-replace="Selected Works." role="heading"
                        class="worksheader swap leading-10 pb-4 lg:text-7xl md:text-5xl text-white text-3xl font-bold capitalize transition-all delay-75 ">
                        <span>Selected Works.
                        </span>
                    </h1>
                </div>
            </div>
            <div class=" w-full lg:w-6/12 relative written-text">
            </div>
        </div>
        <div class="container works relative grid grid-cols-1 sm:grid-cols-2  gap-6 mt-8  lg:gap-4 lg:grid-cols-4 m-auto ">
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/alice-donovan-rouse-tMHAmxLyzvA-unsplash.jpg') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                           before:h-full before:bg-white before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                           group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                           group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                               group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-red">Post One</h3>
                        <p class=" text-sm font-light text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
                            nisi
                            eligendi perferendis
                            voluptatem dicta facilis tenetur magnam atque id doloribus alias optio odio quis earum modi
                            saepe.
                            Reiciendis, quidem beatae! </p>
                    </div>
                </div>
            </div>
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/alice-donovan-rouse-tMHAmxLyzvA-unsplash.jpg') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                           before:h-full before:bg-white before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                           group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                           group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                               group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-red">Post One</h3>
                        <p class=" text-sm font-light text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
                            nisi
                            eligendi perferendis
                            voluptatem dicta facilis tenetur magnam atque id doloribus alias optio odio quis earum modi
                            saepe.
                            Reiciendis, quidem beatae! </p>
                    </div>
                </div>
            </div>
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/alice-donovan-rouse-tMHAmxLyzvA-unsplash.jpg') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                          before:h-full before:bg-white before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                          group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                          group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                              group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-red">Post One</h3>
                        <p class=" text-sm font-light text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
                            nisi
                            eligendi perferendis
                            voluptatem dicta facilis tenetur magnam atque id doloribus alias optio odio quis earum modi
                            saepe.
                            Reiciendis, quidem beatae! </p>
                    </div>
                </div>
            </div>
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/alice-donovan-rouse-tMHAmxLyzvA-unsplash.jpg') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                            before:h-full before:bg-white before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                            group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                            group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                                group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-red">Post One</h3>
                        <p class=" text-sm font-light text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
                            nisi
                            eligendi perferendis
                            voluptatem dicta facilis tenetur magnam atque id doloribus alias optio odio quis earum modi
                            saepe.
                            Reiciendis, quidem beatae! </p>
                    </div>
                </div>
            </div>
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/alice-donovan-rouse-tMHAmxLyzvA-unsplash.jpg') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                        before:h-full before:bg-white before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                        group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                        group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                         group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-red">Post One</h3>
                        <p class=" text-sm font-light text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
                            nisi
                            eligendi perferendis
                            voluptatem dicta facilis tenetur magnam atque id doloribus alias optio odio quis earum modi
                            saepe.
                            Reiciendis, quidem beatae! </p>
                    </div>
                </div>
            </div>
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/alice-donovan-rouse-tMHAmxLyzvA-unsplash.jpg') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                          before:h-full before:bg-white before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                          group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                          group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                              group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-red">Post One</h3>
                        <p class=" text-sm font-light text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
                            nisi
                            eligendi perferendis
                            voluptatem dicta facilis tenetur magnam atque id doloribus alias optio odio quis earum modi
                            saepe.
                            Reiciendis, quidem beatae! </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @pushOnce('scripts')
        <script>
            //now, split text in letters

            const circular = document.querySelector('.circular');
            circular.innerHTML = circular.textContent.replace(/\S/g, `<span id="circular">$&</span>`);

            const element = document.querySelectorAll('#circular');
            for (let i = 0; i < element.length; i++) {
                element[i].style.transform = "rotate(" + i * 25 + "deg)"
            }
            document.addEventListener("mousemove", function(e) {
                circular.style.left = e.pageX + 'px';
                circular.style.top = e.pageY + 'px';

            })
            gsap.registerPlugin(ScrollTrigger);
            // gsap.from('.worksheader', {
            //     scrollTrigger: {
            //         trigger: '.workssection',
            //         start: 'top 70%',
            //          markers: true,
            //         scrub:1,
            //         end: ' bottom top',
            //         toggleActions: 'restart complete reverse reset ',
            //     },
            //     duration: 1,
            //     x: -1100,
            //     ease: "slow"
            // });
            // gsap.from('.works', {
            //     scrollTrigger: {
            //         trigger: '.workssection',
            //         start: 'top 40%',
            //          markers: true,
            //         scrub:1,
            //         end: ' bottom top',
            //         toggleActions: 'restart complete reverse reset ',
            //     },
            //     duration: 1,
            //     y: 1100,
            //     ease: "slow"
            // });
        </script>
    @endpushOnce
