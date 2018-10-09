<?php
  // $nama = "Ari";
  $nama = "1";
  $hasil = preg_match("#[0-9]{5}#", $nama);
  echo $hasil. "<br>";

  $name = "1A23B45"; // 0
  $name2 = "12345AB"; // 1
  $result = preg_match("/[0-9]{5}[A-Z]{2}/", $name);
  echo $result. "<br>";

  $nya = "zzAAA01zz"; //1
  $nya2 = "09abc"; // 0
  $hasilnya = preg_match("/[A-Z]{3}[0-9]{2}/", $nya);
  echo $hasilnya."<br>";

  $php = "Belajar html";
  $hasil_php = preg_match("/php/", $php);
  echo $hasil_php. "<br>";

  $aku = "lagi pake lakuBelajar html";
  $hasil_aku = preg_match("/(aku)+/", $aku);
  echo $hasil_aku. "<br>";

  $hasil = preg_match("/^[A-Z]{1,2}[0-9]{1,4}[A-Z]{1,3}$/", "BB123ZZZ");
  echo $hasil."<br>"; // 1  
  
  $hasil = preg_match("/^[A-Z]{1,2}[0-9]{1,4}[A-Z]{1,3}$/", "D78A");
  echo $hasil."<br>"; // 1  
  
  $hasil = preg_match("/^[A-Z]{1,2}[0-9]{1,4}[A-Z]{1,3}$/", "B1RI");
  echo $hasil."<br>"; // 1

  $hasil = preg_match("/^[A-Z]{1,2}[0-9]{1,4}[A-Z]{1,3}$/", "BA9US");
  echo $hasil."<br>"; // 1

  $hasil = preg_match("/^[A-Z]{1,2}[0-9]{1,4}[A-Z]{1,3}$/", "1BA9US");
  echo $hasil."<br>"; // 0
  
  $hasil = preg_match("/^[A-Z]{1,2} ? [0-9]{1,4} ? [A-Z]{1,3}$/", "BS 9 US");
  echo $hasil."<br>"; // 1

  $hasil = preg_match("/^[A-Z]{1,2} ? [0-9]{1,4} ? [A-Z]{1,3}$/", "Bs 9 US");
  echo $hasil."<br>"; //0 karena ada hruf s kecil

  // tanda ^ penanda harus di awal String 
  // tanda ? untuk memberikan spasi 


?>