
@PushOnce('scripts')
<style>
    .text {
        
        font-size: 1em;
        animation: animate 7.5s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: rotate(360deg);
            color: blue;
        }
        100% {
            transform: rotate(0deg);
        }
    }

    section .text span {
        position: absolute;
        top: -100px;
        text-transform: uppercase;
        display: inline-block;
        transform-origin: 0 100px;
    }
</style>
@endPushOnce('styles')
<section class="relative overflow-hidden flex justify-center h-screen bg-white">
    <h6 class="absolute text-black select-none pointer-events-none text"> --Ako--Precious--</h6>
</section>


@PushOnce('scripts')
<script>
    //now, split text in letters

    const text = document.querySelector('.text');
    text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");

    const element = document.querySelectorAll('span');
    for (let i = 0; i < element.length; i++) {
        element[i].style.transform = "rotate(" + i * 18 + "deg)"
    }
    document.addEventListener("mousemove", function(e) {
        text.style.left = e.pageX + 'px';
        text.style.top = e.pageY + 'px';

    })
</script>
@endPushOnce('script')
