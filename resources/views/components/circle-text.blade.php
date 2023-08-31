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
        .hover-3 {
        --b: 0.1em; /* the thickness of the line */
        --c: #93032E; /* the color */

        color: #fff;
        padding-block: var(--b);
        background:
        linear-gradient(var(--c) 50%,#fff 0) 0% calc(100% - var(--_p,0%))/100% 200%,
        linear-gradient(var(--c) 0 0) 0% var(--_p,0%)/var(--_p,0%) var(--b) no-repeat;
        -webkit-background-clip: text,padding-box;
        background-clip: text,padding-box;
        transition: .5s var(--_s,0s) linear,background-size .3s calc(.3s - var(--_s,0s));
        }
        .hover-3:hover {
        --_p: 100%;
        --_s: .3s;
        color: var(--c)
        }
        </style>
    @endpushOnce('styles')
    <section class="relative workssection  overflow-hidden py-12 min-h-screen" id="works">
        {{-- <h6 class="absolute text-white select-none pointer-events-none circular text-xs"> -Selected-Works</h6> --}}
       
        <div class="container m-auto  bg-transparent flex flex-col lg:flex-row justify-center items-center">
            <div class=" w-full lg:w-6/12 relative">
                <div class="flex w-64 md:w-96 m-auto flex-col justify-center items-center md:items-start">
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
        <div class="container works relative grid grid-cols-1 sm:grid-cols-2  gap-6 mt-6  lg:hidden m-auto ">
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/booking.png') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                            before:h-full before:bg-red before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                            group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                            group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                                group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white">A Room Reservation System.</h3>
                        <p style="text-overflow:ellipsis" class=" text-sm font-light text-white overflow-hidden ">I
                            created a room reservation system that allows users to reserve rooms for
                            various purposes such as conferences, meetings, events, and accommodations. The system
                            typically consists of several modules that work together to manage the entire reservation
                            process. </p>
                    </div>
                </div>
            </div>
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/registration.png') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                          before:h-full before:bg-red before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                          group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                          group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                              group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white">A Medical Registration System.
                        </h3>
                        <p style="text-overflow:ellipsis" class=" text-sm font-light text-white overflow-hidden ">
                            I created a medical registration system manages the registration and
                            tracking of patients,and medical professionals. The system typically
                            includes a database that stores information about patients, for a medical NGO. </p>
                    </div>
                </div>
            </div>

            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full " src="{{ asset('images/loan.png') }}"
                        alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                        before:h-full before:bg-red before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                        group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                        group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                         group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white"> A Loan Processing System</h3>
                        <p style="text-overflow:ellipsis" class=" text-sm font-light text-white overflow-hidden ">
                            I built loan processing system is that automates the loan application, approval, and
                            disbursal process. It allows lenders to manage loan applications and borrowers to apply for
                            loans online, providing a more efficient and convenient experience for both parties. </p>
                    </div>
                </div>
            </div>
            <div class="card group relative overflow-hidden w-72 h-80 m-auto sm:m-6">
                <div class="imgBx absolute top-0 left-0 w-full h-full">
                    <img class=" object-cover absolute top-0 left-0 w-full h-full "
                        src="{{ asset('images/qrcode.png') }}" alt="" />
                </div>
                <div
                    class="contentBx absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:w-full 
                          before:h-full before:bg-red before:scale-x-0 before:transition-transform before:duration-700 before:origin-right before:delay-75
                          group-hover:before:scale-x-100  group-hover:before:transition-transform group-hover:before:duration-700 group-hover:before:origin-left
                          group-hover:flex group-hover:justify-center group-hover:items-center">
                    <div
                        class="content relative p-8 z-10 transition-transform -translate-x-80 delay-0
                              group-hover:translate-x-0 group-hover:delay-75">
                        <h3 class="uppercase text-lg font-bold leading-loose text-white">A qr code sytem</h3>
                        <p style="text-overflow:ellipsis" class=" text-sm font-light text-white overflow-hidden ">I
                            created a QR code attendance system that allows individuals to check in to a
                            class by scanning a unique QR code using a mobile device or scanner.
                            The system records attendance information automatically, providing an accurate and efficient
                            way to track attendance and manage records. </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="container relative hidden lg:flex flex-col  justify-center items-center m-auto">
            <div class="my-[60px]">
                <h1 data-jarallax-element="0 -200"
                    class="hover-3 leading-10 text-right mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75 ">
                    <span>A Room Reservation System.
                    </span>
                </h1>
                <div class="box relative flex justify-between w-[1000px] items-center">
                    <div class="imgBx group relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax">
                        <img class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500
                        group-hover:rotate-0 group-hover:scale-100"
                            src="{{ asset('images/booking.png') }}" alt="">
                    </div>
                    <div
                        class="content absolute right-0 mt-[200px] mb-[40px] p-10 bg-darkblue z-10 max-w-[400px] text-white shadow-xl ease-in-out
                       before:absolute before:w-full before:h-3 before:bg-red before:bottom-0 before:right-0 before:origin-right before:scale-x-0 before:transition-transform before:delay-75 before:duration-500
                        hover:before:origin-left hover:before:scale-x-100 ">
                        <p> I created a room reservation system that allows users to reserve rooms for
                            various purposes such as conferences, meetings, events, and accommodations. The system
                            typically consists of several modules that work together to manage the entire reservation
                            process. <br> Users select a specific room from the list of available rooms and view its
                            details. They provide their personal information and reservation details such as the purpose
                            of the reservation, the number of guests, and any additional requirements. They then proceed
                            to make payment after which the
                            reservation is made
                        </p>

                    </div>
                </div>
            </div>
            <div class="my-[60px]">
                <h1 data-jarallax-element="0 -200"
                    class="hover-3 my-4 leading-10 text-left mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75 ">
                    <span>A Medical Registration System.
                    </span>
                </h1>
                <div class="box relative flex flex-row-reverse justify-between w-[1000px] items-center">
                    <div class="imgBx group  relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax">
                        <img class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500
                        group-hover:rotate-0 group-hover:scale-100"
                            src="{{ asset('images/registration.png') }}" alt="">
                    </div>
                    <div
                        class="content absolute left-0 mt-[200px] mb-[40px] p-10 bg-darkblue z-10 max-w-[400px] text-white shadow-xl ease-in-out
                       before:absolute before:w-full before:h-3 before:bg-red before:bottom-0 before:right-0 before:origin-right before:scale-x-0 before:transition-transform before:delay-75 before:duration-500
                        hover:before:origin-left hover:before:scale-x-100 ">
                        <p> I created a medical registration system manages the registration and
                            tracking of patients,and medical professionals. The system typically
                            includes a database that stores information about patients, for a medical NGO. <br>
                            The system allows new patients to register themselves by filling out a registration form
                            with their personal and medical information such as their name, address, age, gender,
                            medical history, and other related details. The system then assigns a unique identification
                            number to the patient which helps the medical professionals track the the patients health
                        </p>

                    </div>
                </div>
            </div>
            <div class="my-[60px]">
                <h1 data-jarallax-element="0 -200"
                    class="hover-3 leading-10 text-right mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75 ">
                    <span> A Loan Processing System
                    </span>
                </h1>
                <div class="box relative flex justify-between w-[1000px] items-center">
                    <div class="imgBx group relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax">
                        <img class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500
                        group-hover:rotate-0 group-hover:scale-100"
                            src="{{ asset('images/loan.png') }}" alt="">
                    </div>
                    <div
                        class="content absolute right-0 mt-[200px] mb-[40px] p-10 bg-darkblue z-10 max-w-[400px] text-white shadow-xl ease-in-out
                       before:absolute before:w-full before:h-3 before:bg-red before:bottom-0 before:right-0 before:origin-right before:scale-x-0 before:transition-transform before:delay-75 before:duration-500
                        hover:before:origin-left hover:before:scale-x-100 ">
                        <p> I built loan processing system is that automates the loan application, approval, and
                            disbursal process. It allows lenders to manage loan applications and borrowers to apply for
                            loans online, providing a more efficient and convenient experience for both parties.
                            <br> Borrowers submit their loan applications online, filling out a form that asks for
                            personal information, employment details, and loan requirements. This information is
                            captured and stored in a database, the system checks if they are eligble and then tells the
                            borrower to accept the terms. After which the money will be sent them.
                        </p>

                    </div>
                </div>
            </div>
            <div class="my-[60px]">
                <h1 data-jarallax-element="0 -200"
                    class="hover-3 my-4 leading-10 text-left mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75 ">
                    <span>A QR Code Attendance System.
                    </span>
                </h1>
                <div class="box relative flex flex-row-reverse justify-between w-[1000px] items-center">
                    <div class="imgBx group  relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax">
                        <img class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500
                        group-hover:rotate-0 group-hover:scale-100"
                            src="{{ asset('images/qr-code.png') }}" alt="">
                    </div>
                    <div
                        class="content absolute left-0 mt-[200px] mb-[40px] p-10 bg-darkblue z-10 max-w-[400px] text-white shadow-xl ease-in-out
                       before:absolute before:w-full before:h-3 before:bg-red before:bottom-0 before:right-0 before:origin-right before:scale-x-0 before:transition-transform before:delay-75 before:duration-500
                        hover:before:origin-left hover:before:scale-x-100 ">
                        <p> I created a QR code attendance system that allows individuals to check in to a
                            class by scanning a unique QR code using a mobile device or scanner.
                            The system records attendance information automatically, providing an accurate and efficient
                            way to track attendance and manage records. <br> An administrator creates a unique QR code.
                            The
                            QR code is displayed in a visible location, such as screen in a classroom.Attendees scan the
                            QR code using their mobile devices. Once the QR code is scanned, attendance information is
                            recorded automatically in a digital system, which can be accessed and managed by an
                            administrator. </p>

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
            //         scrub:true,
            //         end: ' bottom top',
            //         toggleActions: 'restart complete reverse reset ',
            //     },
            //     duration: 1,
            //     y: 1100,
            //     ease: "slow"
            // });
        </script>
    @endpushOnce
