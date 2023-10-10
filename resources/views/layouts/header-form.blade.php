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

<div class="header-container h-[160vh] lg:bg-contain sm:bg-auto bg-scroll">
    <div class="text-center mb-[50px] pt-[20vh]">
        <h1 class="textctn text-orange-400 font-black text-7xl">Layanan Orang Tua Asuh</h1>
        <h2 class="textctn2 text-white font-medium text-3xl mt-[5px]">Layanan Formulir Pendaftaran Orang Tua Asuh (ORTA)
        </h2>
    </div>

    <div class="w-full flex justify-center">
        <div class="box-container w-[70%] border-2 flex justify-center bg-white">
            <div class="w-full h-auto px-[30px] py-10 flex justify-center">
                <form class="w-[95%] py-10">
                    {{-- Checkbox pemilihan Form --}}
                    <div class="grid grid-cols-3 mb-5 gap-1">
                        <div class="flex justify-center border-1 py-3 rounded-lg border-[#0065A8] items-center hover:bg-[#0065A8] hover:text-white"
                            onclick="activateRadio('flexRadioForm1')">
                            <input class="form-check-form1 w-5 h-5 lg:mx-0 sm:mx-3" type="radio" name="flexRadioForm"
                                id="flexRadioForm1">
                            <label
                                class="form-check-label lg:text-center sm:text-left sm:pr-2 lg:text-xl sm:text-md font-semibold lg:ml-2"
                                for="flexRadioForm">
                                Formulir ORTA
                            </label>
                        </div>
                        <div class="flex justify-center border-1 py-3 rounded-lg border-[#0065A8] items-center hover:bg-[#0065A8] hover:text-white"
                            onclick="activateRadio('flexRadioForm2')">
                            <input class="form-check-form2 w-5 h-5 lg:mx-0 sm:mx-3" type="radio" name="flexRadioForm"
                                id="flexRadioForm2">
                            <label
                                class="form-check-label lg:text-center sm:text-left sm:pr-2 lg:text-xl sm:text-md font-semibold lg:ml-2"
                                for="flexRadioForm">
                                Formulir Anak Yatim & Piatu
                            </label>
                        </div>
                        <div class="flex justify-center border-1 py-3 rounded-lg border-[#0065A8] items-center hover:bg-[#0065A8] hover:text-white"
                            onclick="activateRadio('flexRadioForm3')">
                            <input class="form-check-form3 w-5 h-5 lg:mx-0 sm:mx-3" type="radio" name="flexRadioForm"
                                id="flexRadioForm3">
                            <label
                                class="form-check-label lg:text-center sm:text-left sm:pr-2 lg:text-xl sm:text-md font-semibold lg:ml-2"
                                for="flexRadioForm">
                                Formulir Asosiasi Panti Asuhan
                            </label>
                        </div>
                    </div>

                    
                    {{-- Content Formulir ORTA--}}
                    <div id="contentForm1">
                        <div class="mb-3">
                            <label for="fnama-orta" class="form-label lg:text-3xl sm:text-xl font-semibold">Nama
                                Lengkap</label>
                            <input type="text" class="form-control lg:text-3xl sm:text-[12px]" id="nama-orta"
                                aria-describedby="name" name="fnama-orta">
                        </div>
                        <div class="mb-3">
                            <label for="fdate-orta" class="form-label lg:text-3xl sm:text-xl font-semibold">Tanggal
                                Lahir</label>
                            <input type="date" class="form-control lg:text-3xl sm:text-[12px] w-[40%] "
                                id="date-orta" name="fdate-orta">
                        </div>
                        <div class="mb-3">
                            <label for="falamat-orta" class="form-label lg:text-3xl sm:text-xl font-semibold">Alamat
                                Lengkap</label>
                            <textarea class="form-control lg:text-3xl sm:text-[12px]" id="alamat-orta" rows="4" name="falamat-orta"></textarea>
                        </div>

                        {{-- Pemilihan Provinsi, Kota, Kecamatan dan Kelurahan --}}
                        <div class="grid grid-cols-2 gap-x-5 mt-2">
                            <div>
                                <label class="lg:text-2xl sm:text-lg font-semibold"
                                    for="provinsiSelect">Provinsi</label>
                                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]"
                                    name="provinsiSelect" id="provinsiSelect">
                                    <option selected disabled>Pilih Provinsi</option>
                                </select>
                            </div>
                            <div>
                                <label class="lg:text-2xl sm:text-lg font-semibold" for="kotaSelect">Kota/Kabupaten
                                </label>
                                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]"
                                    name="kotaSelect" id="kotaSelect">
                                    <option selected disabled>Pilih Kota/kabupaten</option>
                                </select>
                            </div>
                            <div>
                                <label class="lg:text-2xl sm:text-lg font-semibold" for="kecamatanSelect">Kecamatan
                                </label>
                                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]"
                                    name="kecamatanSelect" id="kecamatanSelect">
                                    <option selected disabled>Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div>
                                <label class="lg:text-2xl sm:text-lg font-semibold" for="kelurahanSelect">Kelurahan
                                </label>
                                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]"
                                    name="kelurahanSelect" id="kelurahanSelect">
                                    <option selected disabled>Pilih Kelurahan</option>
                                </select>
                            </div>
                        </div>

                        {{-- Nomor Yang dibutuhkan --}}
                        <div class="grid grid-cols-2 gap-x-5 mt-[30px] mb-5">
                            <div class="">
                                <label class="form-check-label lg:text-2xl font-bold" for="frumah-orta">Memiliki Nomor
                                    Rumah?</label>
                                <div><input type="text" class="form-control mt-2 lg:text-2xl"></div>
                            </div>
                            <div class="">
                                <label class="form-check-label lg:text-2xl font-bold" for="fkantor-orta">Memiliki Nomor
                                    Kantor?</label>
                                <div><input type="text" class="form-control mt-2 lg:text-2xl"></div>
                            </div>
                            <div class="mt-3">
                                <label class="form-check-label mb-2 lg:text-2xl font-bold" for="fnomorhp-orta">Nomor
                                    Handphone</label>
                                <div><input id="fnomorhp-orta" type="text" class="form-control lg:text-2xl"></div>
                            </div>
                            <div class="mt-3">
                                <label class="form-check-label mb-2 lg:text-2xl font-bold" for="fnomorwa-orta">Nomor
                                    Whatsapp</label>
                                <div><input id="fnomorwa-orta" type="text" class="form-control lg:text-2xl"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="femail-orta" class="form-label lg:text-3xl font-semibold">Email
                                address</label>
                            <input type="email" class="form-control lg:text-3xl" id="femail-orta"
                                placeholder="name@example.com">
                        </div>

                        {{-- bertindak atas nama --}}
                        <div class="mb-3">
                            <label class="font-semibold lg:text-3xl" for="">Bertindak atas nama :</label>
                            <div class="grid grid-cols-5 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" type="radio" value="" name="flexCheck" id="fpribadi-orta">
                                    <label class="form-check-label lg:text-xl sm:text-lg ml-2" for="fpribadi-orta">
                                        Pribadi
                                    </label>
                                </div>
                                <div class="form-check lg:col-span-1 sm:col-span-2">
                                    <input class="form-check-input lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" type="radio" value="" name="flexCheck" id="finstansi-orta">
                                    <label class="form-check-label lg:text-xl sm:text-lg ml-2" for="finstansi-orta">
                                        Instansi/Badan Usaha
                                    </label>
                                </div>
                                <div class="form-check lg:col-span-3 sm:col-span-2">
                                    <input class="form-check-input lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px] lg:mr-3" type="radio" name="flexCheck" value="" id="fcustom-orta">
                                    <input class="border-1 border-gray-300 rounded-lg lg:w-[50%] sm:w-full lg:text-xl sm:text-lg px-3 py-1" type="text" id="">
                                </div>
                            </div>
                        </div>
                        
                        {{-- box biru dalem form --}}
                        <div class="w-full h-[7vh] bg-[#0065A8] flex justify-center mb-10">
                            <h3 class="text-white lg:text-3xl sm:text-lg px-5 py-3 font-medium">Dengan ini menyatakan kesungguhan saya untuk menjadi Orang Tua Asuh Yatim dengan penjelasan sebagai berikut: </h3>
                        </div>

                        {{-- Section Donasi --}}

                        <div class="mb-3 grid grid-cols-3 grid-rows-2 gap-y-5">
                            <div class="row-span-2">
                                <label class="lg:text-3xl sm:text-xl font-semibold" for="">Nominasi yang didonasikan</label>
                            </div>
                            <div>
                                <input class="form-check-input lg:w-[20px] lg:h-[20px] sm:w-[15px] sm:h-[15px] mr-2" type="radio" name="checkDonasi" value="" id="check-donasi">
                                <label class="lg:text-3xl sm:text-lg ml-2" for="">Rp. 600.000/bulan</label>
                            </div>
                            <div>
                                <label class="lg:text-3xl sm:text-lg" for="">selama : </label>
                                <input class="mx-1 lg:text-3xl sm:text-lg text-center border-1 px-2 lg:w-[50%] sm:w-[30%]" type="number">
                                <label class="lg:text-3xl sm:text-lg" for="">bulan</label>
                            </div>
                            <div>
                                <input class="form-check-input lg:w-[20px] lg:h-[20px] sm:w-[15px] sm:h-[15px] mr-2" type="radio" name="checkDonasi" value="" id="check-donasi2">
                                <input class="border-1 px-2 lg:text-3xl sm:text-lg lg:w-[50%] sm:w-[30%] text-center" type="number" name="" id="custom-donasi">
                                <label class="lg:text-3xl sm:text-lg " for="">/bulan</label>
                            </div>
                            <div>
                                <label class="lg:text-3xl sm:text-lg" for="">selama : </label>
                                <input class="mx-1 lg:text-3xl sm:text-lg text-center border-1 px-2 lg:w-[50%] sm:w-[30%]" type="number">
                                <label class="lg:text-3xl sm:text-lg" for="">bulan</label>
                            </div>
                        </div>

                        {{-- Cara Pembayaran Donasi --}}
                        <div class="grid grid-cols-5 mb-5 mt-5">
                            <div class="lg:text-3xl sm:text-xl col-span-2 font-semibold"><label for="">Cara Pembayaran Donasi</label></div>
                            <div>
                                <input class="lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" id="radioDonasi" name="RadioCaraPembayaran" type="radio">
                                <label class="lg:text-3xl sm:text-xl" for="radioDonasi">Tunai</label>
                            </div>
                            <div>
                                <input class="lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" id="radioDonasi2" name="RadioCaraPembayaran" type="radio">
                                <label class="lg:text-3xl sm:text-xl" for="radioDonasi">Transfer</label>
                            </div>
                            <div>
                                <input class="lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" id="radioDonasi2" name="RadioCaraPembayaran" type="radio">
                                <label class="lg:text-3xl sm:text-xl" for="radioDonasi">Jemput</label>
                            </div>
                        </div>

                        {{-- box biru dalem form --}}
                        <div class="w-full h-[7vh] bg-[#0065A8] flex justify-center mb-10">
                            <h3 class="text-white lg:text-3xl sm:text-lg px-5 lg:py-[20px] sm:py-3 font-medium">Bank yang digunakan untuk transfer : BCA 7751166218 a.n. Yay Rumah Yatim Arrohman</h3>
                        </div>

                        <div class="grid grid-cols-4 gap-x-5 mb-5">
                            <div><label class="lg:text-3xl sm:text-lg" for="">Teknis Pemberian Donasi</label></div>
                            <div class="lg:col-span-1 sm:col-span-2"><select class="form-select lg:text-3xl sm:text-lg" aria-label="Default select example">
                                <option selected>Pilih teknis pembayaran</option>
                                <option value="1">Diangsur per Bulan</option>
                                <option value="2">Dibayar total di muka</option>
                              </select></div>
                              <div class="lg:col-span-2 sm:col-span-1">
                                <label class="lg:text-3xl sm:text-lg mr-5" for="setiapTanggal">Setiap tanggal</label>
                                <input class="lg:text-3xl sm:text-lg lg:w-[20%] sm:w-full border-2 text-center" id="setiapTanggal" type="number">
                              </div>
                        </div>

                        {{-- ketentuan dan foto --}}
                        <div class="flex flex-col w-full mb-3">
                        <h3 class="font-semibold lg:text-3xl sm:text-2xl">Ketentuan :</h3>
                        <ol class="lg:text-2xl sm:text-xl my-3">
                            <li class="mt-1"><strong>1.</strong> Mendapatkan Laporan umum Bulanan</li>
                            <li class="mt-1"><strong>2.</strong> Untuk donasi melalui transfer, Orang tua Asuh bisa melakukan konfirmasi donasi melalui CRM Rumah Yatim dengan melampirkan bukti transfer melalui sms/WA ke nomor 081 221 200 900. <strong> Selama tidak melakukan konfirmasi, maka Rumah Yatim mencatat sebagai Infak/Sedekah tidak terikat.</strong></li>
                            <li class="mt-1"><strong>3.</strong> Laporan dalam bentuk softcopy dan akan di emailkan/WA ke Orang Tua Asuh</li>
                        </ol>
                        </div>

                        {{-- Upload Form --}}
                        <div class="input-group mb-3">
                            <label class="input-group-text lg:text-3xl sm:text-xl font-bold" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control lg:text-3xl sm:text-xl font-medium" id="inputGroupFile01">
                        </div>

                        {{-- Button --}}
                        <button type="submit"
                            class="px-10 py-2 bg-[#0065A8] text-white hover:bg-[#EA912C] lg:text-3xl sm:text-xl rounded-xl mt-2">
                            <a href="#">Submit</a></button>

                        <button type="submit"
                            class="ml-5 px-10 py-2 bg-red-600 hover:bg-red-900 text-white lg:text-3xl sm:text-xl rounded-xl mt-2">
                            <a href="#">Clear Form</a></button>
                    </div>

                    {{-- Content Form Anak Yatim Piatu --}}
                    <div id="">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
