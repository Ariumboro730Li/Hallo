<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lat 4</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
</head>
<body>
    <?php
      echo "<a href=lat3.php>Link ke halaman Home</a>";
      echo "<br>";
      echo "<a href='lat3.php'>Link ke halaman Home</a>";
      echo "<br>";
      echo "<a href=\"lat3.php\">Link ke halaman Home</a>";
      echo "<br>";
      echo '<a href="lat3.php">Link ke halaman Home</a>';
      echo "<br>";

      $alamat_link ="lat3.php";
      $judul_link = "Ke Halaman latihan 3";

      echo "<a href= $alamat_link> $judul_link </a><br> " 

    ?>
    <a href="<?php echo "lat3.php"; ?>"><?php echo "Link ke halaman Home" ?></a>
    <br>
    <a href="lat3.php">Halaman Home</a>
</body>
</html>