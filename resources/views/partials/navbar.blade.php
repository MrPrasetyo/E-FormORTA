{{-- Content NAVBAR --}}
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<nav class="navs">
    {{-- Isinya Main list di navbar --}}
    <div class="rangkup">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img class="w-[50px] h-[50px] mt-2 sm:ml-2" src="https://media.discordapp.net/attachments/1158643953114038302/1160101991855444029/Logo_-_putih.png?ex=6533702c&is=6520fb2c&hm=322f6324d94e9b7e7f4410e641f26e00994482d9824a0d5e5f2e4386076fefe9&=" alt="Your Logo Here">
            </a>
        </div>
        
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks font-medium">
                <li><a href="{{url('/')}}">About</a></li>
                <li><a href="{{url('formulir')}}">Orang Tua Asuh (ORTA)</a></li>
                <li><a href="#">Berita</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>

        {{-- Navigasi trigger --}}
        <span class="navsTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </div>
</nav>

<script>
    $('.navsTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});
</script>