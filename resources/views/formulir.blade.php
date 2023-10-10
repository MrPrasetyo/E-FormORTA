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
    <section id="header-form" class="header-form w-screen lg:h-[200vh] sm:h-[230vh]">
        @include('layouts.header-form')
    </section>

    {{-- section Form --}}
    <section id="form-daftar" class="form-daftar h-[50vh]">
        <div class=""><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam, eum pariatur dicta, deleniti enim soluta ratione, quibusdam consectetur quae recusandae! Ea nam quaerat quia nisi temporibus tempora, nostrum ratione veniam qui doloribus reiciendis cupiditate pariatur autem cumque, corporis velit, ipsa odio ut? Cumque eum expedita hic enim quaerat culpa, suscipit vel vitae laudantium vero odit dolore harum voluptates nisi dolorum saepe sed accusamus nobis eveniet non ex repellat? Dolor obcaecati blanditiis, natus nulla id voluptate illo laudantium, veniam sint ex accusamus culpa? Temporibus sunt veritatis dolor dolorum est at, provident repellat excepturi velit numquam vero fugiat obcaecati voluptas magni mollitia alias rem odio ipsum quam facere. Quod ab saepe tenetur eligendi facere eaque inventore, commodi eum asperiores, placeat animi minima, porro similique sint doloremque eius blanditiis rerum. Vel molestias est modi fuga quas iure inventore, cum dolor quam harum commodi voluptate repellendus aut at minus doloremque beatae non! Possimus accusamus quam, nulla ipsa error aspernatur facilis dolorum iste ullam quod corporis ex illum temporibus porro tempora assumenda ad beatae itaque suscipit sint consectetur aliquam quibusdam sit. Adipisci asperiores iusto deleniti. Molestias, provident similique! Totam consequatur quam vel ab temporibus atque, doloremque quia tempore cum beatae delectus eligendi harum quidem eveniet ea voluptate molestias at nisi aliquam, ducimus perferendis? Hic, minus harum dolorem tenetur, aspernatur voluptatem maiores vitae maxime architecto sed voluptas explicabo non doloribus corrupti aperiam beatae reiciendis ipsum? Atque sunt quo quam autem, aut adipisci ipsa inventore debitis ipsam excepturi esse iste facilis corporis id, magni beatae libero maxime magnam est reiciendis numquam? Laudantium reiciendis placeat ab cumque exercitationem quasi ducimus culpa at tempore voluptate! Iure incidunt quo ex ducimus, consequatur quis cumque. Blanditiis quisquam veritatis mollitia iste nam corrupti quibusdam, earum necessitatibus neque, reiciendis quo sunt facere eligendi debitis, recusandae quis quas eaque placeat minima sed accusantium.</p></div>
    </section>

    {{-- Section Table --}}
    <section id="table-list" class="table-list"></section>

    {{-- Jquery wajib  --}}
    <script src="{{ asset('js/formulir.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>

</html>
