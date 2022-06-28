<h3>Menambahkan data Dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah di Tambahkan
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal di Tambahkan
</div>

<form id="dosenbaru">
  <div class="mb-3">
    <label for="nidn" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn">
    <div id="nidnHelp" class="form-text">Isikan NIDN Dosen</div>
  </div>
  <div class="mb-3">
    <label for="namad" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnamad">
    <div id="namadHelp" class="form-text">isikan Nama Dosen.</div>
  </div>
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
    <label for="tgld" class="form-label">TanggakLahir</label>
    <input type="date" class="form-control" id="txtgld">
    <div id="tgldHelp" class="form-text">Isikan Tanggal Lahir dosen</div>
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan Dosen</label>
    <input type="text" class="form-control" id="txjabatan">
    <div id="jabatanHelp" class="form-text">Isikan Jabatan Dosen</div>
  </div>
  <div class="mb-3">
    <label for="mengampuh" class="form-label">Mengampuh Mata Kuliah</label>
    <input type="text" class="form-control" id="txmengampuh">
    <div id="mengampuhHelp" class="form-text">Isikan Mengampuh Mata Kuliah</div>
  </div>

  <button type="button" class="btn btn-primary" onclick="dosenupdate()">Simpan Data</button>
</form>
<script src="dosen-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>