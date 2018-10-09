<?php
// header("Location: lat2.php");
include_once ("header.php");
// ob_start();
// echo "Teks ini sudah dikirim ke web browser";
// header("Location: http://www.google.com");
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
  <?php 
  echo date("d M Y", strtotime("11-10-2016")); // 11 Oct 2016
  echo "<br>";
  echo date("d M Y", strtotime("11/10/2016")); // 10 Nov 2016
  echo "<br>";
  $tanggal = strtotime("today");
  echo date("d F Y", $tanggal); // 29 February 2016
  echo "<br>";
  $merdeka = getdate(mktime(10, 00, 00, 8, 17, 1945));
  echo "tanggal : {$merdeka["mday"]} - {$merdeka["mon"]} -{$merdeka["year"]}"; 
  echo "<br>";

  date_default_timezone_set("Asia/Jayapura");
  $saat_ini = getdate();
  
  echo "<pre>";
  print_r ($saat_ini);
  echo "</pre>";
  
  
  echo time();
  echo "<br>";
  $tgl = mktime(10, 30, 50, 10, 22, 2018); //mktime(jam, menit, detik, bulan, tanggal, tahun)
  echo date(" d - m - Y , H:i:s", $tgl);
  echo "<br>";
  echo date("D, d / F / Y - H:i:s A");
  echo "<br>";
  $minggu_depan = time() + (7 * 24 * 60 * 60);
  echo $minggu_depan;
  echo "<br>";
  echo date("d m y", $minggu_depan);
  echo "<br>";
  $kemaren= time() + (1 * 24 * 60 * 60);
  echo $kemaren;
  echo "<br>";
  echo date("D, d / F / Y ", $kemaren);
  echo "<br>";
  $kal1 = htmlspecialchars("tag <table> dan </table> untuk membuat table pada html");
  $kal2 = htmlspecialchars("tag <h1> dan </h1> untuk membuat heading");
  $kal3 = "&pound";
  $kal4 = "&copy";

  echo $kal1;
  echo "<br>";
  echo $kal2;
  echo "<br>";
  echo $kal3;
  echo $kal4;


  ?>

  <?php
  include ("footer.php");
  ?>