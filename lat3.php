<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lat 3 Php</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
</head>
<body style="font-family: nyala">
<div class="container mt-4">
    <?php        

        $mahasiswa = array (
            array("01", "Ari", "Founder"),
            array("02", "Umboro", "Trader"),
            array("03", "Seno", "Senior Programmer")
        );

        while(list($no, $nama, $profesi) = array_shift($mahasiswa))
        {
            echo "$no $nama $profesi";
            echo "<br>";
        }

        $nilai = array("anton" => 82, "rudy" => 81,"rini" => 95);
        print_r($nilai);
        echo "<br>";
        
        $a = 100;
        $key = array_search($a,$nilai);
        if ($key!==false) {
        echo "Siswa yang dapat nilai $a adalah $key";
        }
        else {
        echo "Tidak ada siswa yang dapat nilai $a";
        }
        // Siswa yang dapat nilai 95 adalah rini

        echo "<br>";

        $murid = array("conan", "ayumi", "mitsuhiko", "genta");
        $var = array_push($murid, "shizuka", "nobita", "heiji", "kazuha", "sonoko"); // menambah array shizuka
        $unshift = array_unshift($murid, "giant", "suneo" ,"shinichi", "ran"); // menambah array di depan data
        print_r($murid); 
        echo "<br>";
        
        $huu = "Kogoro";
        $kecil = strtolower($huu);
        if (in_array($kecil, $murid)) {
            echo "$huu Hadir Buuuuuuuuuuuuuu";
        } else {
            echo "$huu tak Hadir Buuuuuuu";
        }

        echo "<br>";
        
        // $key_murid = array_rand($murid, 6);
        shuffle($murid); // mengacak array $murid
        print_r($murid); 
        // echo "<br>";

        $satu_murid = current($murid);
        echo $satu_murid;
        echo "<br>";

        $satu_murid = next($murid);
        echo $satu_murid;
        echo "<br>";

        $satu_murid = next($murid);
        echo $satu_murid;
        echo "<br>";

        $satu_murid = next($murid);
        echo $satu_murid;
        echo "<br>";
        
        $satu_murid = prev($murid);
        echo $satu_murid;
        echo "<br>";

        $satu_murid = end($murid);
        echo $satu_murid;
        echo "<br>";

        $satu_murid = current($murid);
        echo $satu_murid;
        echo "<br>";

        $satu_murid = reset($murid);
        echo $satu_murid;
        echo "<br>";







        // $satu_murid = array_pop($murid); // memanggil nilai array terakhir
        // echo $satu_murid;
        // echo "<br>";

        // while($satu_murid = array_pop($murid)) {
        //     echo $satu_murid;
        //     echo "<br>";
        // }

        // $satu_murid = array_shift($murid);
        // echo $satu_murid;
        // echo "<br>";

        // print_r($murid);
        // echo "<br>";

        // while($satu_murid = array_shift($murid)) {
        //     echo $satu_murid;
        //     echo "<br>";
        // }

        print_r($murid);
        echo "<br>";

        // $satu_murid = array_pop($murid); // memanggil nilai array terakhir
        // echo $satu_murid;
        // echo "<br>";
        // $satu_murid = array_pop($murid); // memanggil nilai array terakhir
        // echo $satu_murid;
        // echo "<br>";
        // $satu_murid = array_pop($murid); // memanggil nilai array terakhir
        // echo $satu_murid;
        // echo "<br>";
        // $satu_murid = array_pop($murid); // memanggil nilai array terakhir
        // echo $satu_murid;
        // echo "<br>";
        // $satu_murid = array_pop($murid); // memanggil nilai array terakhir
        // echo $satu_murid;
        // echo "<br>";

        // print_r($key_murid);
        // echo "<br>";
        // echo $murid[$key_murid[0]];
        // echo " & ";
        // echo $murid[$key_murid[1]];
        // echo " & ";
        // echo $murid[$key_murid[2]];
        // echo " & ";
        // echo $murid[$key_murid[3]];
        // echo " & ";
        // echo $murid[$key_murid[4]];
        // echo " & ";
        // echo $murid[$key_murid[5]];

        // echo "<br>";


        // menghitung total nilai
        $nilai = array(98, 89, 76, 88, 98);
        $nilai_s = array("Ari" => 99, "Arum" => 96, "Umboro" => 98);
        echo array_sum($nilai); //449 
        echo "<br>";
        echo array_sum($nilai_s); //293
        echo "<br>";

        sort($nilai); // mengurutkan array
        print_r($nilai); // Array ( [0] => 76 [1] => 88 [2] => 89 [3] => 98 [4] => 98 ) 

        echo "<br>";

        sort($nilai_s);
        print_r($nilai_s);

        echo "<br>";

        $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
        sort($siswa);
        print_r($siswa);

        echo "<br>";

        // menghitung rata2 nilai
        $nilai_rata2 = array_sum($nilai)/count($nilai);
        $nilai_rata_rata = array_sum($nilai_s)/count($nilai_s);
        echo "Nilai rata-rata Anda = $nilai_rata2"; //Nilai rata-rata Anda = 89.82
        echo "<br>";
        echo "Nilai rata-rata Siswa = $nilai_rata_rata"; //Nilai rata-rata Anda = 97.66666
        
        $zoos = 
        array(
        "ayam" => array("kampung","buras","kate","hutan"),
        "kucing" => array("persia","himalaya","anggora","kampung","hutan")
        );        
        echo count($zoos); // 2
        echo "<br>";
        echo count($zoos, COUNT_RECURSIVE); // 11
        echo "<br>";

        
        $zoo = array("singa", "macan", "gajah", "Jerapah", "Kudanil", "Kalkun");
        $a = "Kebun Binatang";
        echo "<p>";
        echo count($zoo);
        echo " Hewan di $a </p>";
        
        // 6 Hewan di Kebun Binatang
        
        for ($i=1; $i < count($zoo) ; $i++) { 
            echo $zoo[$i];
            echo "<br>";
        }
        
        //singa macan gajah Jerapah Kudanil Kalkun
        
        for ($i=1; $i <= 10 ; $i++) { 
            echo $i;
            echo "<br>";
        }
    ?>
</div>
    
</body>
</html>


