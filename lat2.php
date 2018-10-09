<p> Password Anda :
    q0pt3d <b style=("color: red;">
        
<?php
    $a = "qwertyuiopasdfghjklzxcvbnm0987654321";
    $password = str_shuffle($a);
    echo substr($password, 30);
    echo "<br>";
?> 
</b>
</p>
    <br>
     <label for="tanggal"> Pilih Tanggal </label>
       <select name="" id="">
       <?php 
            for ($i=1; $i <= 31 ; $i++) { 
                echo "<option>";
                echo str_pad($i, 2, '0', STR_PAD_LEFT);
                echo "</option>";
            }
        ?>
        </select>
        <br>

<?php
    $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
    $key_siswa = array_rand($siswa,4);
    print_r($key_siswa); // Array ( [0] => 3 [1] => 4 )
    echo "<br>";
    echo $siswa[$key_siswa[0]]; // santi
    echo "<br>";
    echo $siswa[$key_siswa[1]]; // rini
    echo "<br>";
    echo $siswa[$key_siswa[2]]; // santi
    echo "<br>";
    echo $siswa[$key_siswa[3]]; // rini
    echo "<br>";

    $nilai = array(98, 59, 42, 65, 87, 66, 82, 49, 99);
    sort($nilai);
    print_r($nilai);
    // Array ( [0] => 42 [1] => 49 [2] => 59 [3] => 65 [4] => 66
    // [5] => 82 [6] => 87 [7] => 98 [8] => 99 )

    echo "<br>";
    $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
    sort($siswa);
    print_r($siswa);

 // Array ( [0] => andi [1] => gina [2] => joko [3] => joy
 // [4] => rika [5] => rini [6] => santi )
    $sumber = "      html,css,php,Js,Mysql,Nodejs,vuejs,angular,react,ember"; // string
    $c= trim($sumber, '  '); // meghapus spasi di depan html
    $array_hasil = explode(",", $c); // mengkoversu $sumber menjadi Array 
    
    echo "<pre>";
    print_r ($array_hasil); // menampilkan array
    echo "</pre>";

    $string_array = implode(",", $array_hasil); // merubah array menjadi string

    echo "<pre>";
    print_r ($string_array); // hasil konversi string dri array
    echo "</pre>";

    echo count($array_hasil); // menghitung jumlah elemen array = 10
    echo "<br>";

    for ($i=0; $i < count($array_hasil); $i++) { 
        echo $array_hasil[$i]; // html css php js mysql Nodejs Vuejs angular react ember
        echo "<br>";
    }
        
    $zoo = array("kucing","ikan","ayam","bebek","sapi");
    for ($i=0; $i < count($zoo); $i++) {
    echo $zoo[$i];
    echo "<br>";
    }

    $c = "saya adalah seorang programmer dan trader profesional";
    $cari = "saya";
    $ganti = "Umboro";
    $hasil = 0;

    echo str_replace($cari,$ganti,$c,$hasil);
    echo "<br>";
    echo $hasil;
    echo "<br>";

    $oke   = " ,?$&#_ADMIN";
    $adm1  = trim($oke, ' ,_,&,$,#,*,!,@,>,?,/,,,,.');
    $adm2  = strtolower($adm1);
    $admin = $adm2;

    if( $admin == "admin"){
        echo "Selamat Datang Admin";
    } else {
        echo "Anda Bukan Admin";
    }

    echo "<br>";

    $username =  "ALELE";
    $email = "Cermeenpal@gmail.com";

    echo strtolower($username);
    echo "<br>";

    echo strtolower($email);
    echo "<br>";
    
    echo "<h2>";
        echo rand(0,1000);
    echo "</h2>";

    echo getrandmax();
    echo "<br>";

    echo deg2rad(45);

    echo "<br>";

    echo sin (deg2rad(45));

    echo "<br>";

    echo sin(0.78539816339745);

    echo "<br>";

    echo pow(10,10);

    echo "<br>";

    echo log(100);

    echo "<br>";

    echo log10(100);

    echo "<br>";

    $r = 1000;
    echo sqrt($r);
?>