<?php
  $arr_bln = array (
    "1" => "Januari",
    "2" => "Februari",
    "3" => "Maret",
    "4" => "April",
    "5" => "Mei",
    "6" => "Juni",
    "7" => "Juli",
    "8" => "Agustus"
  );

  if(isset($_POST["submit"])) {
    $tgl = htmlentities(strip_tags(trim($_POST["tgl"])));
    $bln = htmlentities(strip_tags(trim($_POST["bln"])));
    $thn = htmlentities(strip_tags(trim($_POST["thn"])));
  }

  $pesan_error = "";

  if($tgl <= 10) {
    $pesan_error .= "Maaf Tanggal harus > 10 <br>";
  }

  if($pesan_error === "") {
    echo "<p> Form processed </p>";
    echo "<p> Tanggal dipilih : $tgl - $bln - $thn </p>";
  }

else {
  $pesan_error = "";
  $tgl=1; $bln="1"; $thn=2018; 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1> Pemrosesan Form </h1>
  <?php echo $pesan_error; ?>
  <form action="form5.php" method="post">
    <p>
    <label for="tgl" >Tanggal Dikirim : </label>
    <select name="tgl" id="tgl">
          <?php
          for ($i = 1; $i <= 31; $i++) {
          if ($i==$tgl){
          echo "<option value = $i selected>";
          }
          else {
          echo "<option value = $i >";
          }
          echo str_pad($i,2,"0",STR_PAD_LEFT);
          echo "</option>";
          }
          ?>
    </select>
    <select name="bln">
          <?php
          foreach ($arr_bln as $key => $value) {
          if ($key==$bln){
          echo "<option value=\"{$key}\" selected>{$value}</option>";
          }
          else {
          echo "<option value=\"{$key}\">{$value}</option>";
          }
          }
          ?>
    </select>
    <select name="thn">
    <?php
          for ($i = 2016; $i <= 2020; $i++) {
          if ($i==$thn){
          echo "<option value = $i selected>";
          }
          else {
          echo "<option value = $i >";
        }
        echo "$i </option>";
        }
        ?>
  </select>
  </p>
  <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>