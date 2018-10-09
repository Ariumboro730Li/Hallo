<?php
  if(isset($_POST["submit"])) {

    $buku = htmlentities(strip_tags(trim($_POST["buku"])));

    $pesan_error = "";

    if(empty($buku)) {
      $pesan_error .= "<p style='background-color:red'> buku belum dipilih </p>";
    }

    if($buku == "JavaScript Uncover" OR $buku == "MySQL Uncover"){
      $pesan_error .= "<p style='background-color:red'> buku belum Ada </p>";
    }

    // siapkan variabel untuk re-populate pilihan buku
   $select_html=""; $select_css=""; $select_php="";
   $select_javascript=""; $select_mysql="";
    
   switch($buku) {
   case "HTML Uncover" : $select_html = "selected"; break;
   case "CSS Uncover" : $select_css = "selected"; break;
   case "PHP Uncover" : $select_php = "selected"; break;
   case "JavaScript Uncover" : $select_javascript = "selected"; break;
   case "MySQL Uncover" : $select_mysql = "selected"; break;
   }

    if($pesan_error === "") {
      echo "<P> Fordm Berhasil Di Proses </p>";
      echo "<p> Buku : $buku </p>";
      die();
    }
  }
  else {
    $pesan_error = "";
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
  <h1>Pemrosesan Data</h1>
  <?php echo $pesan_error; ?>
    <form action="form4.php" method="post">
      <select name="buku" id="">
        <option value="" selected>Pilih Buku</option>
        <option value="HTML Uncover" <?php echo $select_html; ?>>HTML Uncover</option>
        <option value="PHP Uncover" <?php echo $select_php; ?>>PHP Uncover</option>
        <option value="CSS Uncover" <?php echo $select_css; ?>>CSS Uncover</option>
        <option value="JavaScript Uncover" <?php echo $select_javascript; ?>>Javascript Uncover</option>
        <option value="MySQL Uncover" <?php echo $select_mysql; ?> >MySQL Uncover</option>
      </select>
      <input type="submit" name="submit" value="Proses Data">
    </form>
  </body>
  </html>