<form method="POST" action="{{ route('simpan-form-orta') }}">
    @csrf
    {{-- Content Formulir ORTA --}}
    <div id="contentForm1" class="block">
        <div class="mb-3">
            <label for="nama-orta" class="form-label lg:text-3xl sm:text-xl font-semibold">Nama
                Lengkap</label>
            <input type="text" class="form-control lg:text-3xl sm:text-[12px]" id="nama-orta" aria-describedby="name"
                name="nama-orta">
            @error('nama-orta')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fdate-orta" class="form-label lg:text-3xl sm:text-xl font-semibold">Tanggal
                Lahir</label>
            <input type="date" class="form-control lg:text-3xl sm:text-[12px] w-[40%] " id="date-orta"
                name="date-orta">
            @error('date-orta')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="falamat-orta" class="form-label lg:text-3xl sm:text-xl font-semibold">Alamat
                Lengkap</label>
            <textarea class="form-control lg:text-3xl sm:text-[12px]" id="alamat-orta" rows="4" name="alamat-orta"></textarea>
            @error('alamat-orta')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Pemilihan Provinsi, Kota, Kecamatan dan Kelurahan --}}
        <div class="grid grid-cols-2 gap-x-5 mt-2">
            <div>
                <label class="lg:text-2xl sm:text-lg font-semibold" for="provinsiSelect">Provinsi</label>
                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]" name="provinsiSelect"
                    id="provinsiSelect">
                    <option selected disabled>Pilih Provinsi</option>
                </select>
                @error('provinsiSelect')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="lg:text-2xl sm:text-lg font-semibold" for="kotaSelect">Kota/Kabupaten
                </label>
                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]" name="kotaSelect"
                    id="kotaSelect">
                    <option selected disabled>Pilih Kota/kabupaten</option>
                </select>
                @error('kotaSelect')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="lg:text-2xl sm:text-lg font-semibold" for="kecamatanSelect">Kecamatan
                </label>
                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]" name="kecamatanSelect"
                    id="kecamatanSelect">
                    <option selected disabled>Pilih Kecamatan</option>
                </select>
                @error('kecamatanSelect')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="lg:text-2xl sm:text-lg font-semibold" for="kelurahanSelect">Kelurahan
                </label>
                <select class="form-select form-select-sm mb-3 lg:text-2xl sm:text-[12px]" name="kelurahanSelect"
                    id="kelurahanSelect">
                    <option selected disabled>Pilih Kelurahan</option>
                </select>
                @error('kelurahanSelect')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Nomor Yang dibutuhkan --}}
        <div class="grid grid-cols-2 gap-x-5 mt-[30px] mb-5">
            <div class="">
                <label class="form-check-label lg:text-2xl font-bold" for="frumah-orta">Memiliki Nomor
                    Rumah?</label>
                <div><input name="nomorrumah-orta" id="nomorrumah-orta" type="text"
                        class="form-control mt-2 lg:text-2xl"></div>
                @error('nomorrumah-orta')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <label class="form-check-label lg:text-2xl font-bold" for="fkantor-orta">Memiliki Nomor
                    Kantor?</label>
                <div><input name="nomorkantor-orta" id="nomorkantor-orta" type="text"
                        class="form-control mt-2 lg:text-2xl"></div>
                @error('nomorkantor-orta')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-3">
                <label class="form-check-label mb-2 lg:text-2xl font-bold" for="fnomorhp-orta">Nomor
                    Handphone</label>
                <div><input name="nomorhp-orta" id="nomorhp-orta" type="text" class="form-control lg:text-2xl"></div>
                @error('nomorhp-orta')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-3">
                <label class="form-check-label mb-2 lg:text-2xl font-bold" for="fnomorwa-orta">Nomor
                    Whatsapp</label>
                <div><input name="nomorwa-orta" id="nomorwa-orta" type="text" class="form-control lg:text-2xl"></div>
                @error('nomorwa-orta')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="femail-orta" class="form-label lg:text-3xl font-semibold">Email
                address</label>
            <input type="email" class="form-control lg:text-3xl" name="email-orta" id="email-orta"
                placeholder="name@example.com">
            @error('email-orta')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- bertindak atas nama --}}
        <div class="mb-3">
            <label class="font-semibold lg:text-3xl" for="">Bertindak atas nama :</label>
            <div class="grid grid-cols-5 mt-2">
                <div class="form-check">
                    <input class="form-check-input lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" type="radio"
                        value="Pribadi" name="radioalias" id="fpribadi-orta">
                    <label class="form-check-label lg:text-xl sm:text-lg ml-2" for="fpribadi-orta">
                        Pribadi
                    </label>
                </div>
                <div class="form-check lg:col-span-1 sm:col-span-2">
                    <input class="form-check-input lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" type="radio"
                        value="Instansi" name="radioalias" id="finstansi-orta">
                    <label class="form-check-label lg:text-xl sm:text-lg ml-2" for="finstansi-orta">
                        Instansi/Badan Usaha
                    </label>
                </div>
                <div class="form-check lg:col-span-3 sm:col-span-2">
                    <input class="form-check-input lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px] lg:mr-3"
                        type="radio" name="radioalias" value="" id="">
                    <input
                        class="border-1 border-gray-300 rounded-lg lg:w-[50%] sm:w-full lg:text-xl sm:text-lg px-3 py-1"
                        type="text" id="fcustom-orta" name="radioalias">
                </div>
                @error('radioalias')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- box biru dalem form --}}
        <div class="w-full h-[7vh] bg-[#0065A8] flex justify-center mb-10">
            <h3 class="text-white lg:text-3xl sm:text-lg px-5 py-3 font-medium">Dengan ini menyatakan
                kesungguhan saya untuk menjadi Orang Tua Asuh Yatim dengan penjelasan sebagai berikut:
            </h3>
        </div>

        {{-- Section Donasi --}}

        <div class="mb-3 grid grid-cols-3 grid-rows-2 gap-y-5">
            <div class="row-span-2">
                <label class="lg:text-3xl sm:text-xl font-semibold" for="">Nominasi yang
                    didonasikan</label>
            </div>
            <div>
                <input class="form-check-input lg:w-[20px] lg:h-[20px] sm:w-[15px] sm:h-[15px] mr-2" type="radio"
                    name="checkDonasi" value="600000" id="checkdonasi">
                @error('checkDonasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="lg:text-3xl sm:text-lg ml-2" for="">Rp. 600.000/bulan</label>
            </div>
            <div>
                <label class="lg:text-3xl sm:text-lg" for="">selama : </label>
                <input class="mx-1 lg:text-3xl sm:text-lg text-center border-1 px-2 lg:w-[50%] sm:w-[30%]"
                    type="number" id="checkdonasi" name="selamabulan">
                @error('selamabulan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="lg:text-3xl sm:text-lg" for="">bulan</label>
            </div>
            <div>
                <input class="form-check-input lg:w-[20px] lg:h-[20px] sm:w-[15px] sm:h-[15px] mr-2" type="radio"
                    name="checkDonasi" value="" id="">
                <input class="border-1 px-2 lg:text-3xl sm:text-lg lg:w-[50%] sm:w-[30%] text-center" type="number"
                    name="checkDonasi" id="checkdonasi">
                @error('checkDonasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="lg:text-3xl sm:text-lg " for="">/bulan</label>
            </div>
            <div>
                <label class="lg:text-3xl sm:text-lg" for="">selama : </label>
                <input class="mx-1 lg:text-3xl sm:text-lg text-center border-1 px-2 lg:w-[50%] sm:w-[30%]"
                    type="number" name="selamabulan" id="custombln-donasi">
                @error('selamabulan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="lg:text-3xl sm:text-lg" for="">bulan</label>
            </div>
        </div>

        {{-- Cara Pembayaran Donasi --}}
        <div class="grid grid-cols-5 mb-5 mt-5">
            <div class="lg:text-3xl sm:text-xl col-span-2 font-semibold"><label for="">Cara
                    Pembayaran Donasi</label></div>
            <div>
                <input class="lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" id="radioDonasi"
                    name="RadioCaraPembayaran" value="Tunai" type="radio">
                <label class="lg:text-3xl sm:text-xl" for="radioDonasi">Tunai</label>
            </div>
            <div>
                <input class="lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" id="radioDonasi2"
                    name="RadioCaraPembayaran" value="Transfer" type="radio">
                <label class="lg:text-3xl sm:text-xl" for="radioDonasi">Transfer</label>
            </div>
            <div>
                <input class="lg:w-[15px] lg:h-[15px] sm:w-[10px] sm:h-[10px]" id="radioDonasi3"
                    name="RadioCaraPembayaran" value="Jemput" type="radio">
                <label class="lg:text-3xl sm:text-xl" for="radioDonasi">Jemput</label>
            </div>
            @error('RadioCaraPembayaran')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- box biru dalem form --}}
        <div class="w-full h-[7vh] bg-[#0065A8] flex justify-center mb-10">
            <h3 class="text-white lg:text-3xl sm:text-lg px-5 lg:py-[20px] sm:py-3 font-medium">Bank
                yang digunakan untuk transfer : BCA 7751166218 a.n. Yay Rumah Yatim Arrohman</h3>
        </div>

        <div class="grid grid-cols-4 gap-x-5 mb-5">
            <div><label class="lg:text-3xl sm:text-lg" for="">Teknis Pemberian Donasi</label>
            </div>
            <div class="lg:col-span-1 sm:col-span-2"><select class="form-select lg:text-3xl sm:text-lg"
                    aria-label="Default select example" name="teknis-donasi" id="teknis-donasi">
                    <option selected>Pilih teknis pembayaran</option>
                    <option value="Diangsur per Bulan">Diangsur per Bulan</option>
                    <option value="Dibayar total di muka">Dibayar total di muka</option>
                </select></div>
            @error('teknis-donasi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="lg:col-span-2 sm:col-span-1">
                <label class="lg:text-3xl sm:text-lg mr-5" for="setiapTanggal">Setiap tanggal</label>
                <input class="lg:text-3xl sm:text-lg lg:w-[20%] sm:w-full border-2 text-center" id="setiapTanggal"
                    name="setiapTanggal" type="number">
                @error('setiapTanggal')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- ketentuan dan foto --}}
        <div class="flex flex-col w-full mb-3">
            <h3 class="font-semibold lg:text-3xl sm:text-2xl">Ketentuan :</h3>
            <ol class="lg:text-2xl sm:text-xl my-3">
                <li class="mt-1"><strong>1.</strong> Mendapatkan Laporan umum Bulanan</li>
                <li class="mt-1"><strong>2.</strong> Untuk donasi melalui transfer, Orang tua Asuh
                    bisa melakukan konfirmasi donasi melalui CRM Rumah Yatim dengan melampirkan bukti
                    transfer melalui sms/WA ke nomor 081 221 200 900. <strong> Selama tidak melakukan
                        konfirmasi, maka Rumah Yatim mencatat sebagai Infak/Sedekah tidak
                        terikat.</strong></li>
                <li class="mt-1"><strong>3.</strong> Laporan dalam bentuk softcopy dan akan di
                    emailkan/WA ke Orang Tua Asuh</li>
            </ol>
        </div>

        {{-- Upload Form --}}
        <div class="input-group mb-3">
            <label class="input-group-text lg:text-3xl sm:text-xl font-bold" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control lg:text-3xl sm:text-xl font-medium" id="fotobukti"
                name="fotobukti">
            @error('fotobukti')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Button --}}
        <button type="submit"
            class="px-10 py-2 bg-[#0065A8] text-white hover:bg-[#EA912C] lg:text-3xl sm:text-xl rounded-xl mt-2"
            id="submit-form-orta">
            Submit</button>

        <button type="submit"
            class="ml-5 px-10 py-2 bg-red-600 hover:bg-red-900 text-white lg:text-3xl sm:text-xl rounded-xl mt-2"
            id="clear-form-orta">
            <a href="#">Clear Form</a></button>
    </div>
</form>
