<?php
class manusia {
    var $nama;
    var $warna;

    //mtehod manusia
    function tampilkan_nama(){
        return "Nama Saya Mr Tampan <br/>";
    }
    
    function warna_kulit(){
        return "Warna Kulit Saya Putih <br/>";
    }
}

//inisiasi class
$manusia = new manusia();

//memanggil method manusia
echo $manusia->tampilkan_nama();

//memanggil method warna_kulit
echo $manusia->warna_kulit();
?>

<p> --- </p>

<?php
class man{
    //menentukan property dengan private
    private $man = "malas ngoding";    
    
    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->man;
    }
}
//instansiasi class manusia
$man = new man();
 
//memanggil method public tampilkan_nama dari class manusia
echo $man->tampilkan_nama();
?>

<?php
 
 //class manusia
 class human{
     //property
     var $nama;
     var $warna;
     
     function __construct(){
         echo "ini adalah isi method construct <br/>";
     }
 
     function __destruct(){
         echo "ini adalah isi method destruct <br/>";
     }
     
     //method manusia
     function tampilkan_nama(){
         return "Nama saya malasngoding <br/>";
     }
     
 }
 //instansiasi class manusia
 $human = new human();
  
 //memanggil method tampilkan_nama dari class manusia
 echo $human->tampilkan_nama();

 ?>