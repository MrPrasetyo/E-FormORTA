<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{asset('js/navbar.js') }}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home</title>
</head>

<body>

    {{-- nav --}}
    @include('partials.navbar')


    {{-- section banner --}}
    <section id="banner" class="banner">
        <div class="flex items-center justify-center h-full flex-col">
            <div class="">
                <button id="scrollButton" class="bg-black hover:bg-green-500 text-white font-semibold rounded-[30px] text-3xl px-10 py-5">
                    EXPLORE MORE !
                </button>
            </div>
            <div class="mt-2">
                <p class="">Bantu mereka yang membutuhkan</p>
            </div>
        </div>
    </section>



    {{-- section 1 --}}
    <section id="sesi1" class="sesi1 w-full lg:h-[60vh] sm:h-[45vh]">
        @include('layouts.sesi1')
    </section>


    {{-- section 2 --}}
    <section id="sesi2" class="sesi2 w-full h-[33vh]">
        @include('layouts.sesi2')
    </section>


    {{-- section 3 --}}
    <section id="sesi3" class="sesi3 w-full h-[50vh] mt-10">
        @include('layouts.sesi3')
    </section>


    {{-- footer --}}



    {{-- Jquery wajib  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>

</html>
