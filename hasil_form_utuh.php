<?php
  $nama = "Permata";
  $email = "rinipermata@gmail.com";
  $judul_buku = "PHP Uncover";
  $jumlah_buku=3;
  $alamat="Jl. Perintis Kemerdekaan No 14, Medan, Sumatera Utara";
  $kurir="JNE";
  $ongkos="25000";
  $tanggal = "2019-01-01";
  $tambahan1 = "+ DVD eBook";
  $tambahan2 = "+ Bungkus Kado";
?>

<?php include_once("header.php"); ?>
<div class="col-md-6 mx-auto">
<h1 class="text-center">Tabel Pembelian</h1>
  <table class="table table-striped table-responsive mx-auto">
    <tr>
      <th> Nama Lengkap</th>
      <td> <?php echo $nama; ?> </td>
    </tr>
    <tr>
      <th> Email</th>
      <td> <?php echo $email; ?> </td>
    </tr>
    <tr>
      <th> Buku yag Dibeli</th>
      <td> <?php echo $judul_buku; ?> </td>
    </tr>
    <tr>
      <th> Jumlah Pembelian</th>
      <td> <?php echo $jumlah_buku; ?> </td>
    </tr>
    <tr>
      <th> Alamat Pembeli</th>
      <td> <?php echo $alamat; ?> </td>
    </tr>
    <tr>
      <th> Kurir</th>
      <td> <?php echo $kurir; ?> </td>
    </tr>
    <tr>
      <th> Ongkos Pengiriman</th>
      <td> <?php echo "Rp. " .number_format($ongkos); ?> </td>
    </tr>
    <tr>
      <th> Tanggal Pengiriman</th>
      <td> <?php echo $tanggal; ?> </td>
    </tr>
    <tr>
      <th> Tambahan</th>
      <td> <?php echo $tambahan1; ?> <?php echo $tambahan2; ?> </td>
    </tr>
    <tr>
      <th> Total Biaya</th>
      <td>
         <?php  
            $total=($jumlah_buku*100000)+$ongkos;
            echo "Rp. ".number_format($total,2,",",".");     
        ?> 
      </td>
    </tr>
  </table>
  </div>
<?php include_once("footer.php"); ?>