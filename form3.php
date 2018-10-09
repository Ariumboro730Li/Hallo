<?php require_once("header.php"); ?>
<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
          
    // ambil nilai form
    $nama = htmlentities(strip_tags(trim($_POST["nama"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $wa = htmlentities(strip_tags(trim($_POST["wa"])));
        
    // siapkan variabel untuk menampung pesan error
    $pesan_error="";
    
    // cek apakah "nama" sudah diisi atau tidak
    if (empty($nama)) {
      $pesan_error .= "<p class='bg-danger text-white text-center'>Nama belum diisi</p>";
    } else if ((strlen($nama) < 5)) {
      $pesan_error = "<p class='bg-danger text-white text-center'>Nama Minimal 5 Karakter dan Maksimal 10 Karakter</p>";
    }
      
    // cek apakah "email" sudah diisi atau tidak
    if (empty($email)) {
      $pesan_error .= "<p class='bg-danger text-white text-center'>Email belum diisi</p>";
    }
    else if (!preg_match("/.+@.+\..+/",$email) ) {
      $pesan_error .= "<p class='bg-danger text-white text-center'>Penulisan alamat email salah </p>";
    }

    // cek apakah "email" sudah diisi atau tidak
    if (empty($wa)) {
      $pesan_error .= "<p class='bg-danger text-white text-center'>No WA belum diisi</p>";
    }
    else if (!is_numeric($wa)) {
      $pesan_error .= "<p class='bg-danger text-white text-center'>Penulisan no WA salah</p>";
    } 
    

    // jika tidak ada error, tampilkan isi form
    if ($pesan_error == "") {
      echo "<h1>Form Berhasil di Proses </h1>";
      echo "Nama : $nama <br>";
      echo "Email : $email </br>";
      echo "No WA : $wa";
      die();
    }
  }
  else {
    $pesan_error = "";
    $nama = "";
    $email = "";
    $wa = "";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Form Register</h1>
  <?php echo $pesan_error; ?>
  <form action="form3.php" method="post">
      <p>Nama: <input type="text" name="nama"  id="myInput" value="<?php echo $nama ?>" ></p>
      <p>Email: <input type="text" name="email"  id="myInput" value="<?php echo $email ?>" ></p>
      <p>Wa: <input type="number" name="wa"  id="myInput" value="<?php echo $wa ?>" ></p>
      <input type="submit" name="submit" value="Proses Data" >
      <button onclick="document.getElementById('myInput').value = ''">Reset Form</button>    
  </form>
</body>
</html>