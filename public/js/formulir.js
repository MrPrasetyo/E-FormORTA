function activateRadio(radioID) {
    const radioElement = document.getElementById(radioID);
    radioElement.checked = true;
}

// Declare Variabel
var pilih_form1 = document.getElementById("pilihForm1");
var pilih_form2 = document.getElementById("pilihForm2");
var pilih_form3 = document.getElementById("pilihForm3");
var content1 = document.getElementById("contentForm1");
var content2 = document.getElementById("contentForm2");
var content3 = document.getElementById("contentForm3");
var section1 = document.getElementById("header-form")

// Change Form
pilih_form1.addEventListener('click', ()=>{
  content1.style.display='block';
  content2.style.display='none';
  content3.style.display='none';
  pilih_form1.style.backgroundColor='#EA912C';
  pilih_form2.style.backgroundColor='#0065A8';
  pilih_form3.style.backgroundColor='#0065A8';
})

pilih_form2.addEventListener('click', ()=>{
  content1.style.display='none';
  content2.style.display='block';
  content3.style.display='none';
  pilih_form1.style.backgroundColor='#0065A8';
  pilih_form2.style.backgroundColor='#EA912C';
  pilih_form3.style.backgroundColor='#0065A8';
})

pilih_form3.addEventListener('click', ()=>{
  content1.style.display='none';
  content2.style.display='none';
  content3.style.display='block';
  pilih_form1.style.backgroundColor='#0065A8';
  pilih_form2.style.backgroundColor='#0065A8';
  pilih_form3.style.backgroundColor='#EA912C';
})


async function fetchProvinces() {
  try {
    const response = await fetch('https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json');
    if (!response.ok) {
      throw new Error('Gagal mengambil data provinsi');
    }

    const provinces = await response.json();
    const provinsiSelect = document.getElementById('provinsiSelect');

    provinces.forEach((province) => {
      const option = document.createElement('option');
      option.value = province.id;
      option.textContent = province.name
      .split(' ')
      .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
      .join(' ');
      provinsiSelect.appendChild(option);
    });
  } catch (error) {
    console.error('Terjadi kesalahan:', error);
  }
}
  
  async function fetchRegenciesByProvince(provinceId) {
    try {
      const response = await fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinceId}.json`);
      if (!response.ok) {
        throw new Error('Gagal mengambil data kota/kabupaten');
      }
  
      const regencies = await response.json();
      regencies.unshift({name:'Pilih Kota/Kabupaten'})
      const kotaSelect = document.getElementById('kotaSelect');
  
      kotaSelect.innerHTML = ''; // Menghapus opsi sebelumnya
  
      regencies.forEach((regency) => {
        const option = document.createElement('option');
        option.value = regency.id;
        option.textContent = regency.name
        .split(' ')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
        .join(' ');
        kotaSelect.appendChild(option);
      });
    } catch (error) {
      console.error('Terjadi kesalahan:', error);
    }
  }

  async function fetchDistrictsByRegency(regencyId) {
    try {
      const response = await fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${regencyId}.json`);
      if (!response.ok) {
        throw new Error('Gagal mengambil data kecamatan');
      }
  
      const districts = await response.json();
      districts.unshift({name:'Pilih Kecamatan'})
      const kecamatanSelect = document.getElementById('kecamatanSelect');
  
      kecamatanSelect.innerHTML = '';
  
      districts.forEach((district) => {
        const option = document.createElement('option');
        option.value = district.id;
        option.textContent = district.name
        .split(' ')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
        .join(' ');
        kecamatanSelect.appendChild(option);
      });
    } catch (error) {
      console.error('Terjadi kesalahan:', error);
    }
  }

  async function fetchVillagesByDistrict(districtId) {
    try {
      const response = await fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${districtId}.json`);
      if (!response.ok) {
        throw new Error('Gagal mengambil data kelurahan');
      }
  
      const villages = await response.json();
      villages.unshift({name:'Pilih Kelurahan'})
      const kelurahanSelect = document.getElementById('kelurahanSelect');
  
      kelurahanSelect.innerHTML = '';
  
      villages.forEach((village) => {
        const option = document.createElement('option');
        option.value = village.id;
        option.textContent = village.name
        .split(' ')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
        .join(' ');
        kelurahanSelect.appendChild(option);
      });
    } catch (error) {
      console.error('Terjadi kesalahan:', error);
    }
  }
  
  
// Panggil fungsi fetchProvinces untuk mengisi dropdown provinsi saat halaman dimuat
fetchProvinces();

const provinsiSelect = document.getElementById('provinsiSelect');
const kotaSelect = document.getElementById('kotaSelect');
const kecamatanSelect = document.getElementById('kecamatanSelect');
const kelurahanSelect = document.getElementById('kelurahanSelect');

provinsiSelect.addEventListener('change', async (event) => {
  const selectedProvinceId = event.target.value;
  if (selectedProvinceId) {
    await fetchRegenciesByProvince(selectedProvinceId);
  } else {
    // Jika provinsi tidak dipilih, reset dropdown kota/kabupaten
    kotaSelect.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
    // Jika kota tidak dipilih, reset dropdown kecamatan
    kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
// Jika Kecamatan tidak dipilih, reset dropdown kelurahan
    kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
  }
});

kotaSelect.addEventListener('change', async (event) => {
  const selectedRegencyId = event.target.value;
  if (selectedRegencyId) {
    await fetchDistrictsByRegency(selectedRegencyId);
  } else {
    // Jika kota tidak dipilih, reset dropdown kecamatan
    kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
  }
});

kecamatanSelect.addEventListener('change', async (event) => {
  const selectedDistrictId = event.target.value;
  if (selectedDistrictId) {
    await fetchVillagesByDistrict(selectedDistrictId);
  } else {
    kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
  }
});

kelurahanSelect.addEventListener('change', async (event) => {
  const selectedVillageId = event.target.value;
  if (selectedVillageId) {
    await fetchVillageByVillage(selectedVillageId);
  } else {
    kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
  }
});

// Change Form

