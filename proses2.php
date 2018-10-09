<?php
 if(!isset($_POST["submit"])){
   header("Location: lat_form.php");
   die();
  };
  
  $nama_lengkap = trim($_POST["nama_lengkap"], '  ,?#$%><";:{}[]()*&^%!@');
  $email = trim($_POST["email"], '  ,?#$%><";:{}[]()*&^%!@');

  $query_nama = "nama lengkap=".urlencode($nama_lengkap);
  $query_email = "email=".urlencode($email);
  $isi_form = "&$query_nama&$query_email";
  
  if(empty($nama_lengkap)) {
    $pesan = urlencode("Nama Harus Diisi");
    header("Location: lat_form.php?pesan={$pesan} {$isi_form}");
    die();
  };

  if(empty($email)) {
    $pesan = urlencode("Email Harus Diisi");
    header("Location: lat_form.php?pesan={$pesan} {$isi_form}");
    die();
  };
?>

<?php include_once("header.php"); ?>
<div class="row">
<div class="col-md-6">
    <table class="table table-striped ">
    <h3> Data Mahasiswa </h3>
      <?php 
        echo "<tr> <th> Nama </th> ";
        if (empty($nama_lengkap)) {
          echo "<td>Nama Lengkap Wajib Di isi</td></tr>";
        } else {
          echo "<td>".$_POST["nama_lengkap"]. "</td> </tr>";
        }
        echo "<tr> <th> NIM </th> ";
        echo "<td>" .$_POST["NIM"]. "</td></tr>";
        echo "<tr> <th>Tanggal Lahir </th>";
        echo "<td>" .$_POST["tgl_lahir"]." - ".$_POST["bulan_lahir"]." - ".$_POST["tahun_lahir"]."</td></tr>";
        echo "<tr> <th>Alamat</th>";
        echo "<td>".$_POST["alamat"]. "</td></tr>";        
        if(isset($_POST["gender"])) {
          echo "<tr> <th> Jenis Kelamin </th>";
          echo "<td>".$_POST["gender"]. "</td></tr>";
        }
      ?>
    </table>
</div>
<div class="col-md-6">
    <table class="table table-striped">
    <h3>User Account</h3>
    <?php
      echo "<tr><th>Username</th>";
      echo "<td>".$_POST["username"]. "</td></tr>";
      echo "<tr><th>Email</th>";
      echo "<td>".$_POST["email"]. "</td></tr>";
      echo "<tr><th>Password</th>";
      echo "<td>".$_POST["password"]. "</td></tr>";
      echo "<tr><th>Sedang Mempelajari</th>";
      if(isset($_POST["target1"])) {
      echo "<td>".$_POST["target1"]." - ";
        };
      if(isset($_POST["target2"])) {
        echo $_POST["target2"]." - ";
        };
      if(isset($_POST["target3"])) {
        echo $_POST["target3"]."</td></tr>";
        };
    ?>
    </table>
</div>
</div>
<?php include_once("footer.php"); ?>