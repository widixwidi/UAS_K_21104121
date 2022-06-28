<h3>Tambah Data Mata Kuliah</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah ditambahkan
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal ditambahkan
</div>

<form id="matkulbaru">
  <div class="mb-3">
    <label for="kode" class="form-label">Kode Mata Kuliah</label>
    <input type="text" class="form-control" id="txkode">
    <div id="kodeHelp" class="form-text">Isikan Kode Mata Kuliah.</div>
  </div>
  <div class="mb-3">
    <label for="namamatkul" class="form-label">Nama Mata Kuliah</label>
    <input type="text" class="form-control" id="txnamamatkul">
    <div id="namaHelp" class="form-text">Isikan Nama Mata Kuliah.</div>
  </div>
  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select class="form-control" id="txjurusan">
        <option value="-"> Pilih Jurusan </option>
        <option value="MTI"> DGM </option>
        <option value="MTI"> MTI </option>
        <option value="KAB"> KAB </option>
        <option value="SK"> SK </option>
    </select>    
    <div id="jurusanHelp" class="form-text">Pilih Jurusan.</div>
  </div>
  <div class="mb-3">
    <label for="semester" class="form-label">Semester</label>
    <input type="text" class="form-control" id="txsemester">
    <div id="semesterHelp" class="form-text">Isikan Semester.</div>
  </div>
  <div class="mb-3">
    <label for="sks" class="form-label">Jumlah SKS</label>
    <input type="text" class="form-control" id="txsks">
    <div id="sksHelp" class="form-text">Isikan Jumlah SKS.</div>
  </div>
<div class="mb-3">
    <label for="jenis" class="form-label">Jenis Mata Kuliah</label>
    <select class="form-control" id="txjenis">
        <option value="-"> Pilih Jenis Mata Kuliah </option>
        <option value="wajib"> Wajib </option>
        <option value="Pilihan"> Pilihan </option>
    </select>    
    <div id="jenisHelp" class="form-text">Pilih Jenis Mata Kuliah.</div>
  </div>
  <div class="mb-3">
    <label for="dosen" class="form-label">Nama Dosen Pengampuh</label>
    <input type="text" class="form-control" id="txdosen">
    <div id="dosenHelp" class="form-text">Isikan Nama Dosen Pengampuh</div>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="matkulupdate()">Simpan Data</button>
</form>
<script src="matkul-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>