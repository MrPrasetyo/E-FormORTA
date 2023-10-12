<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- ngak tau intinya font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/formulir.css') }}">



    <title>Formulir ORTA</title>
</head>

<body>
    {{-- navbar --}}
    @include('partials.navbar')

    {{-- Section Header & form --}}
    <section id="header-form" class="header-form w-screen">
        <style>
            .box-container {
                box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.4);
            }
        
            .header-container {
                background-image: url('https://media.discordapp.net/attachments/1158643953114038302/1160564098212302868/Background_22.png?ex=65351e8b&is=6522a98b&hm=ff4523b3f30105494bb9e61136ee9b04ad35d60d027af1215e880355780ed44b&=&width=1920&height=800');
                object-fit: fill;
                background-repeat: no-repeat;
            }
        </style>
        
        <div class="header-container lg:bg-contain sm:bg-auto bg-scroll">
            <div class="text-center mb-[50px] pt-[20vh]">
                <h1 class="textctn text-orange-400 font-black text-7xl">Layanan Orang Tua Asuh</h1>
                <h2 class="textctn2 text-white font-medium text-3xl mt-[5px]">Layanan Formulir Pendaftaran Orang Tua Asuh (ORTA)
                </h2>
            </div>
        
            <div class="w-full flex justify-center pb-[100px]">
                <div class="box-container w-[70%] border-2 flex justify-center bg-white">
                    <div class="w-full h-auto px-[30px] py-10 flex justify-center">
                        <div class="w-[95%] py-10">
                            <!-- Tombol pemilihan Form -->
                            <div class="grid grid-cols-3 mb-5 gap-1">
                                <div class="flex w-full justify-center items-center">
                                    <button class="w-full py-3 font-medium lg:text-3xl sm:text-xl bg-[#0065A8] hover:bg-[#EA912C] text-white text-center border-2" id="pilihForm1">Form ORTA</button>
                                </div>
                                <div class="flex w-full justify-center items-center">
                                    <button class="w-full py-3 font-medium lg:text-3xl sm:text-xl bg-[#0065A8] hover:bg-[#EA912C] text-white text-center border-2" id="pilihForm2">Form Anak</button>
                                </div>
                                <div class="flex w-full justify-center items-center">
                                    <button class="w-full py-3 font-medium lg:text-3xl sm:text-xl bg-[#0065A8] hover:bg-[#EA912C] text-white text-center border-2" id="pilihForm3">Form Panti</button>
                                </div>
                            </div>
                            @include('layouts.formorta')
                            @include('layouts.formanak')
                            @include('layouts.formpanti')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    {{-- Jquery wajib  --}}
    <script src="{{ asset('js/formulir.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>

</html>
