<?php 
  $alamat_link = array(
    "lat3.php", "lat2.php", "lat1.php"
  );
  $judul_link = array(
    "Latihan 3", "Latihan 2", "Latihan 1"
  );

  $siswa = array (
    "siswa1" => array ("joko", "medan", "1 januari 2001"),
    "siswa2" => array ("wiro", "medan", "1 januari 2001"),
    "siswa3" => array ("sableng", "medan", "1 januari 2001"),
    "siswa4" => array ("sun", "medan", "1 januari 2001"),
    "siswa5" => array ("go", "medan", "1 januari 2001"),
    "siswa6" => array ("kong", "medan", "1 januari 2001"),
    "siswa7" => array ("joko", "medan", "1 januari 2001"),
    "siswa8" => array ("wiro", "medan", "1 januari 2001"),
    "siswa9" => array ("sableng", "medan", "1 januari 2001"),
    "siswa10" => array ("sun", "medan", "1 januari 2001"),
    "siswa11" => array ("go", "medan", "1 januari 2001"),
    "siswa12" => array ("kong", "medan", "1 januari 2001")
  )

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    /* ul {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 200px;
    }
    li a {
    display: block;
    background-color: #198C13;
    color: white;
    text-decoration: none;
    font-size: 20px;
    height: 30px;
    line-height: 30px;
    padding-left: 10px;
    border-bottom: 2px solid #FFF;
    list-style: none;
    }
    li a:hover {
    background-color: #0AED0A;
    color: black;
    } */
    table {
      border-collapse: collapse;
      border-spacing:  0;
      font-size: 18px;
    }
    table th {
      padding: 10px;
      color : white;
      background-color: blue;
      border-top: 1px black solid;
      border-bottom: 1px black solid;
    }
    table td {
      padding: 10px;
      border-top: 1px black solid;
      border-bottom: 1px black solid;
    }
    tr:nth-child(odd) {
      background-color: aqua;
    }
    .red {
      color: red;
    }
 </style>
 </head>
<body>

    <table border=2>
    <tr> 
      <th> No </th>    
      <th> Nama </th>    
      <th> Kota Asal </th>    
      <th> Tanggal Lahir </th>
    </tr>    
    <?php
    $i = 1;     
    
    foreach ($siswa as $key => $value) {
      echo "<tr>";
      echo "<td>" .str_pad($i, 2, 0, STR_PAD_LEFT). "</td>";
    if ($value[0] == "sun") {
        $nama = "<td class='red'><b>" .strtoupper($value[0]). "</b></td>";
      } else {
        $nama = "<td><b>" .strtoupper($value[0]). "</b></td>";
      }; 
      echo $nama ;
      echo "<td>" .strtolower($value[1]). "</td>";
      echo "<td> $value[2] </td>";
      echo "</tr>";
      $i++;
    } ?>
    </table>



  <a href="<?php echo $alamat_link[0] ?>"> <?php echo $judul_link[0]; ?></a>
  <br>
  <?php
    echo "<a href=$alamat_link[1]> $judul_link[1] <br>";
  ?>

  <a href="lat1.php"> Latihan 1</a> <br>

  <?php
    for ($i=0; $i < count($alamat_link); $i++) { 
      echo "<a href=$alamat_link[$i]> $judul_link[$i] <br>";
    }
  ?>

  <?php
    for ($i=0; $i < count($alamat_link) ; $i++) { 
    ?>
  <a class="left" href="<?php echo $alamat_link[$i] ?>"> <?php echo $judul_link[$i]; ?></a>
    <?php
    }
  ?>

  <?php
    for ($i=0; $i < count($alamat_link) ; $i++) { 
    ?>
  <ul>  
    <li>
        <a class="left" href="<?php echo $alamat_link[$i] ?>"> <?php echo strtoupper ($judul_link[$i]); ?></a>
    </li>
  </ul>
    <?php
    }
  ?>
  <li><?php echo "{$siswa["siswa1"][0]} - {$siswa["siswa1"][1]} - {$siswa["siswa1"][2]}"; ?></li>
  <li><?php echo "{$siswa["siswa2"][0]} - {$siswa["siswa2"][1]} - {$siswa["siswa2"][2]}"; ?></li>
  <li><?php echo "{$siswa["siswa3"][0]} - {$siswa["siswa3"][1]} - {$siswa["siswa3"][2]}"; ?></li>
  <li><?php echo "{$siswa["siswa4"][0]} - {$siswa["siswa4"][1]} - {$siswa["siswa4"][2]}"; ?></li>
  <li><?php echo "{$siswa["siswa5"][0]} - {$siswa["siswa5"][1]} - {$siswa["siswa5"][2]}"; ?></li>
  <li><?php echo "{$siswa["siswa6"][0]} - {$siswa["siswa6"][1]} - {$siswa["siswa6"][2]}"; ?></li>

    <?php
    foreach ($siswa as $value) {
      echo "<p> {$value[0]} - {$value[1]} - {$value[2]} </p> ";
    }
    ?>

    <table border=2>    
    <?php foreach ($siswa as $key => $value) {
      echo "<tr> 
              <td> {$value[0]} </td>
              <td> {$value[1]} </td>
              <td> {$value[2]}  </td>
            </tr> ";
    } ?>
    </table>
</body>
</html>



