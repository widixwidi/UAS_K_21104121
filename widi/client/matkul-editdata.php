<h3>Edit data Mata Kuliah</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah di Ubah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal di Ubah
</div>

<form id="matkulupdate">
  <div class="mb-3">
    <label for="kode" class="form-label">Kode Mata Kuliah</label>
    <input type="text" class="form-control" id="txkode" disabled>
    <div id="kodeHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="namamatkul" class="form-label">Nama Mata Kuliah</label>
    <input type="text" class="form-control" id="txnamamatkul">
    <div id="namamatkulHelp" class="form-text">Ubah Nama Mata Kuliah.</div>
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
    <div id="jurusanHelp" class="form-text">Ubah Jurusan.</div>
  </div>
  <div class="mb-3">
    <label for="semester" class="form-label">Semester</label>
    <input type="text" class="form-control" id="txsemester">
    <div id="semesterHelp" class="form-text">Ubah Semester.</div>
  </div>
  <div class="mb-3">
    <label for="sks" class="form-label">Jumlah SKS</label>
    <input type="text" class="form-control" id="txsks">
    <div id="sksHelp" class="form-text">Ubah Jumlah SKS.</div>
  </div>
<div class="mb-3">
    <label for="jenis" class="form-label">Jenis Mata Kuliah</label>
    <select class="form-control" id="txjenis">
        <option value="-"> Pilih Jenis Mata Kuliah </option>
        <option value="wajib"> Wajib </option>
        <option value="Pilihan"> Pilihan </option>
    </select>    
    <div id="jenisHelp" class="form-text">Ubah Jenis Mata Kuliah.</div>
  </div>
  <div class="mb-3">
    <label for="dosen" class="form-label">Nama Dosen Pengampuh</label>
    <input type="text" class="form-control" id="txdosen">
    <div id="dosenHelp" class="form-text">Ubah Nama Dosen Pengampuh</div>
  </div>

  <button type="button" class="btn btn-primary" onclick="matkulupdatedata()">Update Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>
<script src="matkul-caridata.js"></script>
<script src="matkul-updatedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
  function batal(){
      location.replace("http://localhost/widi/client/index.php?pg=mk");
  }
</script>