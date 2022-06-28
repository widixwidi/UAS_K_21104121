<h3>Hapus Data Dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah di Hapus
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal di Hapus
</div>

<form id="dosenDelete">
  <div class="mb-3">
    <label for="nidn" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn" disabled>
    <div id="nidnHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="namad" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnamad" disabled>
    <div id="namadHelp" class="form-text"></div>
  </div>

  <span id="sembunyi">
  <div class="mb-3">
    <label for="jkeld" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkeld">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="L"> Laki-Laki </option>
        <option value="P"> Perempuan </option>
    </select>    
    <div id="jkeldHelp" class="form-text">Pilih Jenis Kelamin Dosen</div>
  </div>
  <div class="mb-3">
    <label for="tgld" class="form-label">Tgl Lahir</label>
    <input type="date" class="form-control" id="txtgld">
    <div id="tgldHelp" class="form-text">Ubah Tgl Lahir dosen</div>
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan Dosen</label>
    <input type="text" class="form-control" id="txjabatan">
    <div id="jabatanHelp" class="form-text">Ubah Jabatan Dosen</div>
  </div>
  <div class="mb-3">
    <label for="mengampuh" class="form-label">Mengampuh Mata Kuliah</label>
    <input type="text" class="form-control" id="txmengampuh">
    <div id="mengampuhHelp" class="form-text">Ubah Mengampuh Mata Kuliah</div>
  </div>
</span>

<button type="button" class="btn btn-danger" onclick="dosendeletedata()"> Hapus Data </button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>
<script src="dosen-caridata.js"></script>
<script src="dosen-deletedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
  document.getElementById("sembunyi").style.display="none";
  function batal(){
      location.replace("http://localhost/widi/client/index.php?pg=dsn");
  }
</script>