<?php include_once("header.php"); ?>
<?php 
  if(isset($_POST["submit"])) {
    echo "<h3 class='bg-success text-white text-center'> Form Berhasil Diinput </h1>";
    echo "Nama : {$_POST["nama"]} <br>";
    echo "email : {$_POST["email"]} <br>";
    die();
  }
?>

<form action="form2.php" method="post">
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
  </div>
  <button type="submit" name="submit" class="btn btn-danger">Submit</button>
</form>


<?php include_once("footer.php"); ?>