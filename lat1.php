<?php include 'header.php'; ?>

<style>
    .bg-red {
        color: red;
    }

</style>

    <?php echo "<h2 class='bg-red'>Hello Wold, Lagi Belajar PHP nihh</h2>" ?> 
    <h2 class="bg-red"><?php echo "Hello Wold, Lagi Belajar PHP nihh" ?></h2>

    <?php

    $n = array(
        1 => "Andri",
        6 => "Joko",
        12 => "Sukma",
        45 => "Rina",
        55 => "Sari"
        );

        foreach ($n as $key => $value) {
            echo "urutan ke-$key adalah $value";
            echo "<br/>";
        }

        
        echo "<pre>";
        var_dump($n);
        echo "</pre>";
        

    $abjad = array(
        "A",
        "B",
        "C",
        "D",
        "E",
        "F",
        "G",
        "H",
        "I",
        "J",
        "K",
        "L",
        "M",
        "N",
        "O",
    );

    foreach ($abjad as $variable) {
        
        echo "<pre>";
        print_r ($variable);
        echo "</pre>";
        
    }

    echo "<br>";

    $nama = array(
            "A",
            "B",
            "C",
            "D",
            "E",
            "F",
            "G",
            "H",
            "I",
            "J",
            "K",
            "L",
            "M",
            "N",
            "O",
        );

        for ($i=0; $i < 5; $i++) { 
            
            echo "<pre>";
            print_r ($nama[$i]);
            echo "</pre>";
            
        }

        echo "<br>";
    
    $i=10;
    while ($i <= 10)
    {
    echo "$i";
    echo "<p>Tidak akan tampil di browser</p>";
    $i=$i+1;
    }
    ?>

    <?php
    $i=1000;
    do
    {
    echo "$i";
    echo "<p>Akan tampil di browser</p>";
    $i=$i+1;
    } while ($i <= 10);
    ?>

    <?php
    $i=0;
    while ($i < 10)
    {
    $j=0;
    while ($j < 10)
    {
    echo $i;
    $j++;
    }
    echo "<br>";
    $i++;
    }
    ?>

    <?php
    $salah = TRUE;
    $tebak_angka = 8;
    while ($salah) {
    if ($tebak_angka==8) {
    $salah = FALSE;
    echo "<p>Anda benar!</p>";
    }
    else {
    echo "<p>Jawaban anda salah, silahkan ulangi kembali</p>";
    }
    }
    ?>

    <?php
    $i = 9;
    while ($i <= 10) {
        echo "Lagi Main PS";
        $i++;
    }
    ?>
    <?php
    for ($i= 1; $i <= 15; $i++) :
    echo $i;
    echo "<br />";
    endfor;
    ?>
    <?php
        for ($i=0; $i <10; $i++)
        {
            for ($j=0; $j <10; $j++)
            {
            echo $i;
            }
            echo "<br>";
        }
    ?>

    <span>Pilih Tanggal Lahir Lo Coy :</span>
    <select name="tgl" id="">
        <?Php for ($i=31; $i > 0 ; $i--) {

            echo "<option value = $i>bulan ke $i </option>";
        }
        ?>
    </select>
    <select name="hari" id="">
        <?Php for ($i=7; $i > 0 ; $i--) {

            echo "<option value = $i> hari ke $i </option>";
        }
        ?>
    </select>
    <select name="tahun" id="">
        <?Php for ($i=2018; $i > 1960 ; $i--) {

            echo "<option value = $i> Tahun ke $i </option>";
        }
        ?>
    </select>

    <?php
        for ($i=100; $i > 0 ; $i-- ) {  
            
            echo "<pre>";
            print_r ("Turun Tangga ke $i");
            echo "</pre>";
            
            
        }
    ?>
    <?php
        for ($i=100; $i > 0 ; $i-- ) {  
            
            echo "<pre>";
            print_r ("Turun Tangga ke $i");
            echo "</pre>";
            
            
        }
    ?>
    <?php
        for ($i=1; $i <=100 ; $i++ ) {  
            
            echo "<pre>";
            print_r ("Mobil ke $i");
            echo "</pre>";
            
            
        }
    ?>

    <p><?php
        $user = "admn";
        $email = "gbgt";
        $salam = ($user == "admin" AND $email == "gwbgt") ? "Selamat Datang" : "Ada yg salah gan";
        $salam = ($user == "admin") ? "username benar, password salah" : "Ada yg salah gan";
        $salam = ($email == "gwbgt") ? "username Salah, password Benar" : "Ada yg salah gan";
        echo $salam;
    ?></p>

    <p><?php
        $user = "Admin";
        $salam = ($user == "admin") ? "Selamat Datang" : "KELUAR LOO";
        echo $salam;
    ?></p>

    <p><?php 
        // operator conditional
        $hasil = (7 > 5) ? "Benar" : "salah";
        echo $hasil;
    ?></p>

    <p>
    <?php
        if (7 > 5 ) {
        $hasil = "Benar";
        }
        else {
        $hasil = "Salah";
        }       
        echo $hasil; // Benar
    ?>
    </p>


    

    <?php
        $user="Ronaldo";
        switch ($user) 
        {
            case "Ari";
            case "Umboro";
            echo "Hallo $user Ganteng";
            break;
            
            case "isra";
            case "Azna";
            echo "halo $user Cantik";
            break; 
            
            default :
            echo "$user tidak ada di daftar";
            break;
        }

    ?>

    <p class="bg-red">
    <?php 
    // switch case no break

        $hari = 1;
        switch($hari)
        {
            case 1 : echo "hari senin"; 
            case 2 : echo "hari selasa";
            case 3 : echo "hari rabu";
            case 4 : echo "hari Kamis";
            case 5 : echo "hari Jumat";
            case 6 : echo "hari Sabtu";
            case 7 : echo "hari Minggu";
            default : echo "Cuma Ada 7 hari";
        }
    ?>
    </p>


    <?php 
    // switch case

        $hari = 12;
        switch($hari)
        {
            case 1 : echo "<p class='bg-red'>hari senin</p>";
            break;
            case 2 : echo "<p class='bg-red'>hari Selasa</p>";
            break;
            case 3 : echo "<p class='bg-red'>hari Rabu</p>";
            break;
            case 4 : echo "<p class='bg-red'>hari Kamis</p>s";
            break;
            case 5 : echo "<p class='bg-red'>hari Jumat</p>";
            break;
            case 6 : echo "<p class='bg-red'>hari Sabtu</p>";
            break;
            case 7 : echo "<p class='bg-red'>hari Minggu</p>";
            break;
            default : echo "<p class='bg-red'>hari cuma 7 broo</p>";
            break;
        }
    ?>
    <?php
    // contoh kasus pemilihan role user
        $username = "admin";
        $email= "qwery";

        if($username == "admin") {
            if($email == "qwerty"){
                echo "Username dan Email Sesuai";
            } else {
                echo "Username Sesuai, Email tidak Sesuai";
            }
        }
        else if ($email == "qwerty"){
            echo "Username tidak sesuai, Email Sesuai";
        } else {
            echo "Gak ada yang sesuai bro, login dlu lahhh";
        }
    ?>

    <br/>
    <br/>
    
    <?php
        $username = "adin";
        $password = "qwerty";

        if($username == "admin" && $password == "qwerty"){
            echo "Selamat datang Admin";
        } 
        else {
            echo "username dan password tidak sesuai";
        }

    ?>

    <br/>
    <br/>

    <?php
    // contoh soal lebih besar dan lebih kecil
        $a = 1;
        $b = 1;

        if($a > $b) {
            echo "$a lebih besar dari $b";
        } else if($a < $b) {
            echo "$a lebih kecil dari $b";
        } else {
            echo "$a sama dengan $b";
        }

    ?>

    <br/>
    <br/>

    <?php 
    // contoh soal genap ganjil
        $nilai = 21;

        if($nilai % 5 == 0) {
            echo $nilai." adalah Angka Genap";
        } else {
            echo $nilai." adalah angka ganjil";
        }

    ?>

    <br/>

    <?php 
    $user="Andi";

    if($user=="admin") {
        echo "Selamat Datang broo";
    } 
    else if ($user=="user") {
        echo "Selamat Datang User";
    }
    else if ($user=="guest") {
        echo "Selamat Datang Guest";
    }
    else {
        echo "Maaf Anda belom Terdaftar";
    }



    ?>

    <p>----------------------------------------------------------------------------------------------------------</p>
    
    <br/>

    <?php
        $angka_nol=0;
        $angka_int=12;
        $angka_float=99.75;
        $bool_true=true;
        $bool_false=false;
        $array_isi = array ("a","b","c");
        $null = null;
        $object = new stdClass;
        $resource = mysql_connect("localhost", "root", "");
        $angka_nol = (string) $angka_nol;
        var_dump($angka_nol); // string(1) "0"
        echo "<br>";
        $angka_int = (string) $angka_int;
        var_dump($angka_int); // string(2) "12"
        echo "<br>";
        $angka_float = (string) $angka_float;
        var_dump($angka_float); // string(5) "99.75"
        echo "<br>";
        $bool_true = (string) $bool_true;
        var_dump($bool_true); // string(1) "1"
        echo "<br>";
        $bool_false = (string) $bool_false;
        var_dump($bool_false); // string(0) ""
        echo "<br>";
        $array_isi = (string) $array_isi;
        var_dump($array_isi); // string(5) "Array" (dengan error Notice)
        echo "<br>";
        $null = (string) $null;
        var_dump($null); // string(0) ""
        echo "<br>";
        $resource = (string) $resource;
        var_dump($resource); // string(14) "Resource id #3"
        echo "<br>";
        // $object = (string) $object;
        // var_dump($object); // error
        // Catchable fatal error: Object of class stdClass
        // could not be converted to string
    ?>

    <h1> --- </h1>

    <?php
    $hasil1=3+8/5-3*9+9;
    var_dump($hasil1); // float(-13.4)
    echo "<br>";
    $hasil2=((3+8)/(5-3))*(9+9);
    print_r($hasil2); // float(99)
    ?>

    <h1> ---- </h1>

    <?php
    $macam2 = array(121,"Joko",44.99,"Belajar PHP");
    $macam2[4] = "Duniailkom";
    $macam2[5] = 212;
    $macam2[6] = 3.14;  
    echo "<pre>";
    var_dump($macam2);
    print_r($macam2);
    echo "</pre>";
    ?>

    <?php
        $koordinat = array(array(8,2), array(2,4), array(1,7));
        echo "<pre>";
        print_r($koordinat);
        echo "</pre>";
    ?>

    <?php
        $huruf = "Z";
        $nama = "Andika";
        $kalimat = "Saya berkata 'aku akan pergi..'";
        var_dump($huruf); // string(1) "Z"
        echo "<br>";
        var_dump($nama); // string(6) "Andika"
        echo "<br>";
        var_dump($kalimat); // string(31) "Saya berkata 'aku akan pergi..'"
    ?>

    <?php
        echo "Hello world ";
        $a = 3; $b = 3;
        $nama = "andi";
        $c = $a / 25.0;
        if ($a == $b) {
        echo $c ;
        }
    ?>



    <?php
        define("GAJI", 5000000);
        // define("GAJI", 50000);
    // Notice: Constant GAJI already defined
    ?>

    <?php 
        $nama = "Umboro";
        define("CEO", Founder);

        echo "$nama adalah seorang ".CEO ;
    ?>

    <h2>daftar nama peserta</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th></th>
            </tr>
        </thead>
            <?php for ($i=1; $i <= 10; $i++)
            {

             ?>
        <tbody>
            <tr>
                <td scope="row"><?php echo $i; ?> </td>
                <td> <?php echo "Nama Peserta $i"; ?></td>
                <td></td>
            </tr>
        </tbody>
           <?php } ?>
    </table>

    <h2>Daftar Mahasiswa</h2>
    <ol>
        <?php
            for ($i= 1; $i <= 10; $i++) {
                echo "<li> Nama Mahasiswa ke-$i</li>";
            }
        ?>
    </ol>

<?php include 'footer.php'; ?>