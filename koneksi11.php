<?php 
 $koneksi=mysqli_connect(
    "localhost", 
    "root", 
    "",
    "regristrasi"
);
 if(mysqli_connect_errno())
 {
    echo"Koneksi Gagal" .mysqli_connect_error();
 }   
else
{
    echo"Koneksi berhasil";
}
?>