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

<body class="antialiased relative bg-black h-screen overflow-x-hiden" id="my-scrollbar">

{{-- <body class="antialiased relative bg-black min-h-screen overflow-y-auto" "> --}}
    
        
    <div class="circle-text">
        <!-- HTML markup for the first component goes here -->
        <x-header />
        <x-about />
        <x-circle-text />
        <x-3d-image-hover />
        <x-conatact />

    </div>
       
    
    @stack('scripts')
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyBVcej_TP3ft1vK2xRsXv6DeY36o3K3CRM",
          authDomain: "my-portfolio-40380.firebaseapp.com",
          projectId: "my-portfolio-40380",
          storageBucket: "my-portfolio-40380.appspot.com",
          messagingSenderId: "734825077287",
          appId: "1:734825077287:web:1289468355ee2bba21cc02",
          measurementId: "G-8975X3JCGX"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
</body>

</html>
