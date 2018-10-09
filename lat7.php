<?php
  include ("header.php");
?>

<?php
  $tgl1 = strtotime("2-05-2018");
  $tgl2 = strtotime("12-05-2018");

  $selisih_tgl = $tgl2 - $tgl1;
  echo "$selisih_tgl Detik";
  echo "<br>";

  $satu_hari = 24*60*60;
  echo "$satu_hari Detik";
  echo "<br>";
  $selisih_hari = $selisih_tgl/$satu_hari;
  
  echo "$selisih_hari Hari";
  echo "<br>";

  ?>

  <?php
    $tgl1 = strtotime("01-03-2018");
    $tgl2 = strtotime("01-12-2018");

    $selisih_tgl = abs($tgl2 - $tgl1);
    echo "$selisih_tgl Detik";
    echo "<br>";
    
    $satu_bulan = 30*24*60*60;
    $selisih_bulan = floor($selisih_tgl/$satu_bulan);
    
    echo "$selisih_bulan Bulan";
    echo "<br>";
    
    ?>

  <?php
    $tahun1 = strtotime("27-09-1989");
    $tahun2 = strtotime("20-01-1993");
    
    $selisih_tgl = abs($tahun2 - $tahun1);
    echo $selisih_tgl;
    echo "<br>";

    $satu_tahun = 365*24*60*60;
    $satu_bulan = 31*24*60*60;
    $satu_hari = 24*60*60;

    $selisih_tahun = floor($selisih_tgl/$satu_tahun);
    $selisih_bulan = floor(($selisih_tgl - ($selisih_tahun * $satu_tahun))/ $satu_bulan);
    $selisih_hari = floor(($selisih_tgl - ($selisih_tahun * $satu_tahun) - ($selisih_bulan * $satu_bulan))/ $satu_hari);

    echo "Selisih Tanggal adalah $selisih_tahun Tahun, $selisih_bulan Bulan, dan $selisih_hari Hari";
    echo "<br>";
    ?>

  <?php
    function cari_selisih_tanggal ($tanggal1, $tanggal2)
    {
      $tgl1 = strtotime($tanggal1); 
      $tgl2 = strtotime($tanggal2); 
      
      $selisih_tgl = abs($tgl2 - $tgl1);
      $satu_tahun = 365*24*60*60;
      $satu_bulan = 31*24*60*60;
      $satu_hari = 24*60*60;

      $selisih["tahun"] = floor($selisih_tgl/$satu_tahun);
      $selisih["bulan"] = floor(($selisih_tgl - ($selisih["tahun"] * $satu_tahun))/ $satu_bulan);
      $selisih["hari"] = floor(($selisih_tgl - ($selisih["tahun"] * $satu_tahun) - ($selisih["bulan"] * $satu_bulan))/ $satu_hari);
    
      return $selisih;
      }
  ?>

  <?php
    $hasil = cari_selisih_tanggal("27-09-1989", "27-09-2018");
    echo "Selisih tanggal adalah = 
          {$hasil["tahun"]} tahun,
          {$hasil["bulan"]} bulan,
          {$hasil["hari"]} hari";
    echo "<br>";
    
    ?>

  <?php
    echo date("d m Y");
    echo "<br>";
    $hasil = cari_selisih_tanggal("27-09-1989", "now");
    echo "Selisih tanggal adalah = 
          {$hasil["tahun"]} tahun,
          {$hasil["bulan"]} bulan,
          {$hasil["hari"]} hari";
    echo "<br>";
    
  ?>

  <?php
    $tgl1 = date_create("27-09-1989");
    $tgl2 = date_create("27-09-2018");

    $selisih = date_diff($tgl2, $tgl1);
    echo "Selisih tanggal adalah = 
          $selisih->y tahun,
          $selisih->m bulan,
          $selisih->d hari";
    echo "<br>";

  ?>

  <?php //Code refactoring fungsi cari_selisih_tanggal 
  function cari_selisih_tgl($tanggal1, $tanggal2)
  {
    $tgl1 = date_create($tanggal1);
    $tgl2 = date_create($tanggal2);
  
    $selisih_tgl = date_diff($tgl2, $tgl1);

    $selisih["tahun"] = $selisih_tgl->y;
    $selisih["bulan"] = $selisih_tgl->m;
    // $selisih["minggu"] = $selisih_tgl->w;
    $selisih["hari"] = $selisih_tgl->d;
  
    return $selisih;
  }
   
    ?>

    <?php
    $hasil = cari_selisih_tgl("27-09-1989", "27-09-2018");
    echo "Selisih tanggal adalah = 
          {$hasil["tahun"]} tahun,
          {$hasil["bulan"]} bulan,
          {$hasil["hari"]} hari";
    echo "<br>";
    ?>

    <?php
    $hasil = cari_selisih_tgl("now", "22-10-2018");
    echo "Selisih tanggal adalah = 
          {$hasil["tahun"]} tahun,
          {$hasil["bulan"]} bulan,
          {$hasil["hari"]} hari";
    echo "<br>";
    ?>

<?php
  include ("footer.php");
?>