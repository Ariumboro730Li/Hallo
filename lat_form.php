<?php include_once("header.php"); ?>
<?php
  if (isset($_GET["pesan"])){
    $pesan = "<p class='bg-danger text-white text-center'>{$_GET["pesan"]} </p>";
    }
    else {
    $pesan = "";
  }

  if (isset($_GET["nama_lengkap"])){
    $nilai_nama = $_GET["nama_lengkap"];
  } else {
    $nilai_nama = "";
  }

  if (isset($_GET["email"])){
    $nilai_email = $_GET["email"];
  } else {
    $nilai_email = "";
  }
?>

<?php echo $pesan ?>

<form action="proses2.php" class="col-md-12 mx-auto" method="post">
<div class="row">
  <fieldset class="col-md-6 border-right">
    <legend>Data Mahasiswa</legend>
    <div class="form-group">
      <label for="Nama">Nama Lengkap</label>
      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $nilai_nama ?>" placeholder="Masukkan Nama Lengkap Anda" autofocus>
    </div>
    <div class="form-group">
      <label for="Nim">NIM</label>
      <input type="text" class="form-control" name="NIM" id="" placeholder="Masukkan NIM Anda" autofocus>
    </div>

    <div class="form-group">
    <label for="Tanggal Lahir">Tanggal Lahir</label>
      <select class="col-md-3"  name="tgl_lahir" id="tgl_lahir">
        <?php
            for ($i=1; $i <= 31 ; $i++) { 
              echo "<option value = $i>";
              echo str_pad($i,2,"0",STR_PAD_LEFT);
              echo "</option>";
            }
        ?>
      </select>
      <select class="col-md-3" name="bulan_lahir" id="bulan_lahir">
            <option value="januari">Januari</option>
            <option value="februari">Februari</option>
            <option value="maret">Maret</option>
            <option value="april">April</option>
            <option value="mei">Mei</option>
            <option value="juni">Juni</option>
            <option value="juli">Juli</option>
      </select>
      <select class="col-md-3"  name="tahun_lahir" id="tahun_lahir">
        <?php
            for ($i=1980; $i <= 2010 ; $i++) { 
              echo "<option value = $i>";
              echo $i;
              echo "</option>";
            }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="Alamat">Alamat</label>
      <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
    </div>
    <div class="row">
    <label for="Gender" class="col-md-4">Jenis Kelamin :</label>
        <label class="form-check-label col-md-3">
          <input type="radio" class="form-check-input" name="gender" id="" value="Laki_Laki">
        Laki Laki
        </label>
        <label class="form-check-label col-md-3">
          <input type="radio" class="form-check-input" name="gender" id="" value="Perempuan">
        Perempuan
        </label>
    </div>
        <!-- <button type="submit" class="btn btn-primary">Kirim Data</button> -->
  </fieldset>
  <fieldset class="col-md-6">
    <legend>User Account</legend>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" id="" placeholder="Masukkan Username Anda">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" value="<?php echo $nilai_email ?>" placeholder="Masukkan Email Anda">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="" placeholder="Masukkan password Anda">
    </div>
    <label for="resolusi">Sedang mempelajari</label>
    <div class="form-check">
      <label class="form-check-label col-md-12">
        <input type="checkbox" class="form-check-input" name="target1" id="" value="html">
        HTML
      </label>
      <label class="form-check-label col-md-12">
        <input type="checkbox" class="form-check-input" name="target2" id="" value="cSS" >
        CSS
      </label>
      <label class="form-check-label col-md-12">
        <input type="checkbox" class="form-check-input" name="target3" id="" value="PHP">
        PHP
      </label>
    </div>
  </fieldset>
</div>
        <button type="submit" class=" col-md-12 btn btn-primary" name="submit">Kirim Data</button>
</form>


<?php include_once("footer.php"); ?>