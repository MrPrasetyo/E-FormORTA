<style>
    /* Gaya umum di luar media query */
    .box1 {
        box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.5);
        /* Menambahkan drop shadow dengan ukuran 15px dan opasitas 0.3 */
    }

    /* @media only screen and (min-width: 768px) {
        .box1 {
            box-shadow: 20px 20px 15px rgba(0, 0, 0, 0.5);
        }
    } */
</style>

<div class="flex items-center lg:pt-[12vh] sm:pt-[5vh]">
    <div class="container1 w-full flex justify-center items-center">
        <div class="box1 border-2 lg:w-[60%] sm:w-[70%] drop-shadow-2xl flex flex-col items-center pb-10">
            <div class="teks-box1 pt-5 lg:mb-2">
                <h2 class="lg:text-4xl sm:text-3xl font-semibold">Tata Cara Penggunaan Website</h2>
            </div>
            {{-- Grid container untuk tahapan penggunaan --}}
            <div class="content w-[50%] grid grid-cols-5 grid-rows-2 justify-center">
                <div class="grid-cont h-[10vh] flex justify-center items-center flex-col">
                    <div>
                        <img class="lg:w-[60px] lg:h-[60px] sm:w-[50px] sm:h-[50px] flex"
                            src="https://media.discordapp.net/attachments/1158643953114038302/1159852039153664031/login.png?ex=65328763&is=65201263&hm=bc254dbcdfd152afc8cd815f40341cf61eb777f931308362a54ca7e135fbe922&="
                            alt="Login" draggable="false" ondragstart="return false;">
                    </div>
                </div>
                <div class="grid-cont h-[10vh] flex justify-center items-center">
                    <img class="lg:w-[60px] lg:h-[60px] sm:w-[50px] sm:h-[50px]"
                        src="https://media.discordapp.net/attachments/1158643953114038302/1159853491938938941/minus_1.png?ex=653288bd&is=652013bd&hm=e1496a5d4a987a9696e1c4dc654b2b7e7d93f0d5a0b4d933a7b6da2ee8cf79df&="
                        alt="garis" draggable="false" ondragstart="return false;">
                </div>
                <div class="grid-cont h-[10vh] flex justify-center items-center">
                    <img class="lg:w-[60px] lg:h-[60px] sm:w-[50px] sm:h-[50px]"
                        src="https://media.discordapp.net/attachments/1158643953114038302/1159852039493390426/registered.png?ex=65328763&is=65201263&hm=e7ca892b63f34da58b1bc41023a5ca3ee73b0ec1a48c13f86ba1262ba345ec23&="
                        alt="register" draggable="false" ondragstart="return false;">
                </div>
                <div class="grid-cont h-[10vh] flex justify-center items-center">
                    <img class="lg:w-[60px] lg:h-[60px] sm:w-[50px] sm:h-[50px]"
                        src="https://media.discordapp.net/attachments/1158643953114038302/1159853491938938941/minus_1.png?ex=653288bd&is=652013bd&hm=e1496a5d4a987a9696e1c4dc654b2b7e7d93f0d5a0b4d933a7b6da2ee8cf79df&="
                        alt="garis" draggable="false" ondragstart="return false;">
                </div>
                <div class="grid-cont h-[10vh] flex justify-center items-center">
                    <img class="lg:w-[60px] lg:h-[60px] sm:w-[50px] sm:h-[50px]"
                        src="https://media.discordapp.net/attachments/1158643953114038302/1159871529518108682/check-mark.png?ex=6532998a&is=6520248a&hm=64376cbac772bf6cdb5e2822e5ffb0f32027d521842567b09a240296f5016c89&="
                        alt="verify" draggable="false" ondragstart="return false;">
                </div>
                {{-- Row ke 2 --}}
                <div class="grid-cont h-[10vh] flex justify-center items-center flex-col lg:pb-[60px] sm:pb-[80px]">
                    <p class="text-center font-medium lg:text-2xl">Daftar Akun di Website..</p>
                </div>
                <div></div>
                <div class="grid-cont h-[10vh] flex justify-center items-center flex-col lg:pb-[40px] sm:pb-[60px]">
                    <p class="text-center font-medium lg:text-2xl">Lengkapi Data yang diminta</p>
                </div>
                <div></div>
                <div class="grid-cont h-[10vh] flex justify-center items-center flex-col lg:pb-[40px] sm:pb-[60px]">
                    <p class="text-center font-medium lg:text-2xl">Data anda akan diverifikasi..</p>
                </div>
            </div>
            <div class="btn-lengkap">
                <button class="text-white font-semibold text-2xl rounded-3xl border-2 px-[20px] py-[8px] bg-black hover:bg-green-700">Selengkapnya..</button>
            </div>
        </div>
    </div>
</div>
