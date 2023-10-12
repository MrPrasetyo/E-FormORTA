<form action="">
{{-- Content Formulir anak --}}
<div id="contentForm2" class="hidden">
    <div class="mb-3">
        <label for="fnama-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Nama Lengkap
        </label>
        <input type="text" class="form-control lg:text-3xl sm:text-[12px]" id="nama-anak" aria-describedby="name"
            name="fnama-anak">
    </div>
    <div class="mb-3 flex flex-row w-full">
        <div class="lg:w-[35%] sm:w-full mr-5">
            <label for="ftempat-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Tempat
                Lahir</label>
            <input type="text" class="form-control lg:text-3xl sm:text-[12px]" id="tempat-anak"
                aria-describedby="name" name="ftempat-anak">
        </div>
        <div class="lg:w-[45%] sm:w-full">
            <label for="fdate-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Tanggal
                Lahir</label>
            <input type="date" class="form-control lg:text-3xl sm:text-[12px]" id="date-anak" name="fdate-anak">
        </div>
    </div>
    {{-- usia anak --}}
    <div class="mb-3 w-full">
        <label for="fusia-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Usia</label>
        <input type="number" class="form-control lg:text-3xl sm:text-[12px] lg:w-[30%]" id="usia-anak"
            aria-describedby="name" name="fusia-anak">
    </div>
    {{-- Jenis Kelamin --}}
    <div class="mb-3 w-full">
        <label for="fgender-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Jenis Kelamin</label>
        <select class="form-select lg:text-2xl sm:text-xl lg:w-[30%] sm:w-full" aria-label="Default select example" id="gender-anak">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    {{-- agama anak --}}
    <div class="mb-3 w-full">
        <label for="fagama-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Agama</label>
        <select class="form-select lg:text-2xl sm:text-xl lg:w-[50%] sm:w-full" aria-label="Default select example"
            id="agama-anak">
            <option selected>Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
            <option value="Lainnya">Lainnya..</option>
        </select>
    </div>

    {{-- Riwayat Pendidikan --}}
    <div class="w-full flex flex-col mb-3">
        <label class="lg:text-3xl sm:text-xl font-semibold" for="">Jenjang Pendidikan</label>
        <select class="form-select lg:text-2xl sm:text-xl lg:w-[50%] sm:w-full" aria-label="Default select example"
            id="pendidikan-anak">
            <option selected><strong>Pilih Pendidikan</strong></option>
            <option value="Belum Sekolah">Belum Sekolah</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
        </select>
    </div>

    {{-- Nama Ortu --}}
    <div class="mb-3 grid grid-cols-2 gap-x-5">
        <div>
            <label for="fayah-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Nama Ayah Kandung
            </label>
            <textarea class="form-control lg:text-3xl sm:text-[12px]" id="ayah-anak" rows="2" name="fayah-anak"></textarea>
        </div>
        <div>
            <label for="fibu-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Nama Ibu Kandung
            </label>
            <textarea class="form-control lg:text-3xl sm:text-[12px]" id="ibu-anak" rows="2" name="fibu-anak"></textarea>
        </div>
    </div>

    <div class="w-full mb-3">
        <label for="fketerangan-anak" class="form-label lg:text-3xl sm:text-xl font-semibold">Keterangan
        </label>
        <textarea class="form-control lg:text-3xl sm:text-[12px]" id="keterangan-anak" rows="2" name="fketerangan-anak"></textarea>
    </div>

    {{-- Button --}}
    <button type="submit"
        class="px-10 py-2 bg-[#0065A8] text-white hover:bg-[#EA912C] lg:text-3xl sm:text-xl rounded-xl mt-2"
        id="submit-form-anak">
        <a href="#">Submit</a></button>

    <button type="submit"
        class="ml-5 px-10 py-2 bg-red-600 hover:bg-red-900 text-white lg:text-3xl sm:text-xl rounded-xl mt-2"
        id="clear-form-anak">
        <a href="#">Clear Form</a></button>
</div>
</form>