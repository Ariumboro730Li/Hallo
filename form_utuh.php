<?php
  if(isset($_POST["submit"])) {
    echo "<pre>";
    print_r ($_POST);
    echo "</pre>";
    die();
  }
?>
<?php require_once ("header.php"); ?>
   <form class="form-group col-md-6 mx-auto" action="" method="post" >
    <fieldset>
      <legend class="text-center">Form Order</legend>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="" autofocus>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
      </div>
      <div class="form-group">
        <label for="judul_buku">Judul Buku</label>
        <select class="form-control" name="judul_buku" id="">
          <option>HTML Uncover</option>
          <option>PHP Uncover</option>
          <option>Codeigniter</option>
          <option>Laravel</option>
        </select>
      </div>
      <div class="form-group">
        <label for="jumlah_buku">Jumlah Buku</label>
        <select class="form-control" name="jumlah_buku" id="">
          <?php
              for ($i=1; $i <= 10 ; $i++) { 
                echo"<option value=$i>";
                echo $i;
                echo "</option>";
              }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Pengiriman</label>
        <textarea class="form-control" name="alamat" id="" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="kurir">Kurir</label><br>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="kurir" id="" value="j&t"> J&T
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="kurir" id="" value="jne"> JNE
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="kurir" id="" value="wahana"> Wahana        </label>
        </div>
      </div>
      <div class="form-group">
        <label for="ongkos">Ongkos Kirim</label>
        <input type="number" class="form-control" name="ongkos" id="" aria-describedby="helpId" placeholder="">
      </div>
      <div class="form-group">
        <label for="tanggal_kirim">Tanggal Pengiriman</label>
        <input type="date" class="form-control" name="tanggal" id="" aria-describedby="helpId" placeholder="">
      </div>
      <div class="form-group">
      <label for="tambahan">Tambahan</label><br>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="ebook" id="" value="Ebook"> Ebook
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="kado" id="" value="Kado"> Kado
          </label>
        </div>
      </div>
      <div class="col-md-8 mx-auto">      
        <button class="btn btn-primary col-md-12" name="submit" type="submit" value="proses_data">Proses Data</button>
      </div>
    </fieldset>
  </form>
<?php require_once ("footer.php"); ?>
