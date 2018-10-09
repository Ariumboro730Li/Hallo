<?php
include_once ("header.php");
?>

<?php
  $browser = strpos($_SERVER["HTTP_USER_AGENT"], "Firefox");
  if ($browser == true) {
    echo "Anda Menggunakan Firefox <br>";
  } else
  {
    echo "anda menggunakan web browser lainnya <br>";
  } 

  $nama = rawurlencode("Lo & Gw");
  $alamat = rawurldecode("London & PAris");
  $umur = "25";

  $query_string="?nama={$nama}&alamat={$alamat}&umur={$umur}";

  
  // echo "<pre>";
  // print_r ($_GET);
  // echo "</pre>";

  // $nama=$_GET["nama"];
  // $alamat=$_GET["alamat"];
  // echo "Nama siswa = $nama <br>";
  // echo "Alamat siswa = $alamat <br>";  
?>

<a href="hal_proses.php <?php echo $query_string; ?>"> Menuju Proses</a>
<br>

<?php
function yobro(){
  return "Saya asalnya dari fungsi : " .__FUNCTION__ ;
}

echo "Teks ini berada di baris : " .__LINE__. "<br>";
echo "alamat file ini adalah : " .__FILE__. "<br>";
echo "File ini berada di folder : " .__DIR__. "<br>";
echo yobro() ."<br>";


$hari = "weekend";
function nama_hari(){
  global $hari;
  return "sekarang hari $hari";
}
echo nama_hari()."<br>";

$day = "Sunday";
function name_day() {
  return "Now is {$GLOBALS["day"]}";
}

echo name_day()."<br>";

?>

<?php
$hari="Senin";
function nama_day(){
$GLOBALS["hari"] = "Jum'at";
return "Now is {$GLOBALS["hari"]} <br>" ;
}
// jalankan fungsi nama_hari()
echo nama_day();
 echo "Sekarang hari $hari <br>"; // Sekarang hari Jum'at
 ?>

<?php

echo "<pre>";
print_r ($_SERVER);
echo "</pre>";

echo "HTTP_HOST = {$_SERVER["HTTP_HOST"]} <br>";
echo "HTTP_USER_AGENT = {$_SERVER["HTTP_USER_AGENT"]} <br>";
echo "SERVER_SOFTWARE = {$_SERVER["SERVER_SOFTWARE"]} <br>";
echo "SERVER_ADDR = {$_SERVER["SERVER_ADDR"]} <br>";
echo "DOCUMENT_ROOT = {$_SERVER["DOCUMENT_ROOT"]} <br>";
echo "SCRIPT_FILENAME = {$_SERVER["SCRIPT_FILENAME"]} <br>";
echo "REQUEST_URI = {$_SERVER["REQUEST_URI"]} <br>";
echo "PHP_SELF = {$_SERVER["PHP_SELF"]} <br>";
echo "SERVER_SIGNATURE = {$_SERVER["SERVER_SIGNATURE"]}";
?>
 

<?php
include_once ("footer.php");
?>