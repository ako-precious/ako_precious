<style>
    .circle {
        box-shadow: 0 20px var(--clr),
            0 0 60px var(--clr),
            40px -70px 0 var(--clr),
            40px -70px 20px var(--clr),
            70px -70px 0 var(--clr),
            70px -70px 20px var(--clr),
            -70px -150px 0 var(--clr),
            -70px -150px 20px var(--clr);
        animation: animate 15s linear infinite, particle 4s ease-in infinite;
    }

    .circle:nth-child(2) {
        animation: animate 5s linear infinite, particle 6s ease-in infinite;
    }

    .circle:nth-child(3) {
        animation: animate 10s linear infinite, particle 8s ease-in infinite;
    }

    .circle:nth-child(4) {
        animation: animate 5s linear infinite, particle 10s ease-in infinite;
    }
    section .whyme span {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    section .whyme span.active {
        animation: smoke 3s linear forwards;
        transform-origin: bottom;
    }

    @keyframes particle {

        0%,
        100% {
            scale: 0.5;
        }

        50% {
            scale: 1.5;
        }
    }
</style>
<section class="relative overflow-hidden py-12 lg:py-20 min-h-screen">
    <div class="container m-auto lg:py-3 bg-transparent flex flex-col lg:flex-row justify-center items-center">
        <div class=" w-full lg:w-6/12 relative">
            {{-- <div class="flex pl-5  m-auto  flex-col justify-center items-center md:items-start"> --}}

            <div class="flex w-64 md:w-96 m-auto flex-col justify-center">
                <h1 data-replace="Why Me." role="heading"
                    class="worksheader swap leading-10 pb-4 lg:text-7xl md:text-5xl text-darkblue text-3xl font-bold capitalize transition-all delay-75 ">
                    <span> Why Me.
                    </span>
                </h1>
                <div class="relative w-full h-[100px] ">
                    <p class="text-white py-4 absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4">
                        With my experience in front-end and back-end development, I can ensure that the website is not only
                        visually appealing but also functional, user-friendly, and optimized for search engines.
                        Additionally, I can work closely with the client to understand your specific needs and goals for
                        the website, and tailor the development process accordingly.
                        <br>
                        My portfolio showcases my ability to create responsive designs that are accessible on a variety of
                        devices, as well as my proficiency in using a range of programming languages, frameworks, and tools.
                        From developing custom WordPress themes to building complex web applications from scratch, I have
                        the expertise to handle any project.
                        <br>
                        By choosing me as your full stack developer, the client can be confident that they will receive a
                        website that not only meets your expectations but exceeds them in terms of both form and function.
                    </p>
                    <p class="text-white py-4 absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4">
                        With my experience in front-end and back-end development, I can ensure that the website is not only
                        visually appealing but also functional, user-friendly, and optimized for search engines.
                        Additionally, I can work closely with the client to understand your specific needs and goals for
                        the website, and tailor the development process accordingly.
                        <br>
                        My portfolio showcases my ability to create responsive designs that are accessible on a variety of
                        devices, as well as my proficiency in using a range of programming languages, frameworks, and tools.
                        From developing custom WordPress themes to building complex web applications from scratch, I have
                        the expertise to handle any project.
                        <br>
                        By choosing me as your full stack developer, the client can be confident that they will receive a
                        website that not only meets your expectations but exceeds them in terms of both form and function.
                    </p>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <div class=" w-full lg:w-6/12 relative ">
            <div style=" box-shadow: inset 0 25px 70px rgba(255,255,255,0.15);"
                class="glow relative w-[500px] h-[500px] flex justify-center items-center rounded-full">
                <div style=" --clr: #FF521B;"
                    class="circle absolute w-[20px] h-[20px] flex justify-end items-start rounded-full before:absolute before:top-0 before:left-0 before:w-[7px] before:h-[7px] before:rounded-full">
                </div>
                <div style="--clr: #93032E;"
                    class="circle absolute w-[20px] h-[20px] flex justify-end items-start rounded-full before:absolute before:top-0 before:left-0 before:w-[7px] before:h-[7px] before:rounded-full ">
                </div>
                <div style="--clr: #034C3C;  "
                    class="circle absolute w-[15px] h-[15px] flex justify-end items-start rounded-full before:absolute before:top-0 before:left-0 before:w-[7px] before:h-[7px] before:rounded-full">
                </div>
                <div style="--clr: #1B1B3A; "
                    class="circle absolute w-[15px] h-[15px] flex justify-end items-start rounded-full before:absolute before:top-0 before:left-0 before:w-[7px] before:h-[7px] before:rounded-full">
                </div>
            </div>
        </div>
    </div>

</section>

@push('script')
    <script>
        
        this function keeps the circle tracked to mouse movement by moving it every time the cursor moves
document.addEventListener("mousemove", (e) => {
  // create variables for circle and 50% of circle diameter:
  const circle = document.getElementById("circle");
  const halfCircleSize = circle.offsetHeight / 2;

  //get cursor location:
  const mouse_x = e.clientX;
  const mouse_y = e.clientY;

  // move the circle to the cursor's location and offset the circle by 50% of its diameter so that it is centered with the cursor:
  circle.style.left = `${mouse_x - halfCircleSize}px`;
  circle.style.top = `${mouse_y - halfCircleSize}px`;
});

    </script>
@endpush
