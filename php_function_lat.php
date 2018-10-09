<!doctype html>
<html lang="en">
  <head>
    <title>Belajar Fungsi PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
      <div class="container mt-2">

      <button  class="btn btn-primary col-md-12" onclick= 'sale()'> Pencet dluuu</button>

        <?php
            echo "<p> Hello, Gw Berkomitmen Jadi Programmer Profesional dan Trader Profesional</p>";
            
            function coba($b, $a="kamehameha", $c="Wacauuu") {
                echo "Hay $b $a $c" ;
            }
            
            coba ("uye");

            // coba ini bro 

            // function coba($a="kamehameha", $c="Wacauuu", $b) {
            //     echo "Hay $b $a $c" ;
            // }
            
            // coba ("uye");


            
            function pagi() {
                echo "<p> Selamat Pagi</p>";
            }

            function siang() {
                echo "<p> Selamat Siang </p>";
            }

            function sore() {
                echo "<p> Selamat Sore </p>";
            }

            pagi();
            siang();
            sore();
            function tambah_kurang($satu,$dua){
                $hasil[]= $satu + $dua;
                $hasil[] = $satu - $dua;
                return $hasil;
                }
                
            $a=tambah_kurang(100,30);
            echo "100 tambah 30 = ".$a[0]; // 100 tambah 30 = 130
            echo "<br>";
        
            echo "100 kurang 30 = ".$a[1]; // 100 kurang 30 = 70

            pagi();
            siang();
            sore();

            // contoh variabel $a diluar function
            function test(){
            $a="variabel lokal";
            }

            test();
            echo $a; // Notice: Undefined variable: a
            echo "<br>";


            $x = 1000;

            function ini_function()
            {
                $x = 10;
                echo $x;
            }
            
            echo $x;
            echo "<br>";

            ini_function();
           echo "<br>";

            echo $x;
            
    
        ?>


        <script>
            function sale(){
                alert ("hello")
            }
        </script>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>
  </body>
</html>