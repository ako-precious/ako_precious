@PushOnce('styles')
@endPushOnce('styles')

<div class="container bg-blue-900 flex justify-center items-center flex-wrap">
    <div class="box relative m-10 " style="height:325px; width:400px">
        <img src="{{ asset('images/akoprecious.png') }}"
            class=" absolute top-0 left-0 w-full h-full object-cover mix-blend-screen" alt="">
        <img src="{{ asset('images/nigeria.png') }}"
            class=" bg-transparent absolute top-0 left-0 w-full h-full object-cover mix-blend-screen overflow-hidden"
            alt="nigeria map">
    </div>

</div>


@PushOnce('scripts')
@endPushOnce
