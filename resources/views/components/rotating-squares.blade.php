{{-- @pushOnce('styles') --}}
    <style>
        .chancedbg{
            animation: changeBG 4s steps(1) infinite;
        }
        @keyframes changeBG {
            0% {
                background: #1B1B3A;
            }

            25% {
                background: #FF521B;
            }

            50% {
                background: #93032E;
            }

            75% {
                background: #034C3C;
            }
            100% {
                background: #1B1B3A;
            }
        }
    </style>
{{-- @endpushOnce('styles') --}}
<section class=" chancedbg flex justify-center items-center min-h-screen">

    <div class="loader animate-[rotate_1s_linear_infinite] animate-rotate relative bg-black before:absolute before:inset-0.5 before:bg-white"
        style="width:50px; height:50px; ">
        <div style=" background: #FF521B;"
            class="animate-[animated_1s_linear_infinite] border-black border-2 absolute w-full h-full bg-black origin-bottom-right -top-full -left-0.5 before:absolute before:inset-0.5  ">
        </div>
        <div style="background: #93032E;"
            class="animate-[animated_1s_linear_infinite] border-black border-2 absolute w-full h-full bg-black origin-bottom-left -right-full -top-0.5 before:absolute before:inset-0.5  ">
        </div>
        <div style="background: #034C3C;  "
            class="animate-[animated_1s_linear_infinite] border-black border-2 absolute w-full h-full bg-black origin-top-left -bottom-full left-0.5 before:absolute before:inset-0.5 ">
        </div>
        <div style="background: #1B1B3A; "
            class="animate-[animated_1s_linear_infinite] border-black border-2 absolute w-full h-full bg-black origin-top-right -left-full top-0.5 before:absolute before:inset-0.5 ">
        </div>

    </div>
</section>


@PushOnce('scripts')
@endPushOnce
