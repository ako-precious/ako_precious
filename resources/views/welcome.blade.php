<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/scrollbar.js', 'resources/js/jarallex-element.js'])
    @stack('styles')
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body class="antialiased relative bg-black h-screen overflow-y-auto" id="my-scrollbar">

{{-- <body class="antialiased relative bg-black min-h-screen overflow-y-auto" "> --}}
    
        
    <div class="circle-text">
        <!-- HTML markup for the first component goes here -->
        {{-- <x-header /> --}}
        <x-circle-text />
        <x-3d-image-hover />
        <x-conatact />

    </div>
       
    
    @stack('scripts')
     
</body>

</html>
