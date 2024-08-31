<?php 
 $koneksi=mysql_connect("local", "root", "","regristrasi")
 $nama=$_POST['nama'];
 $umur=$_POST['umur'];
 $jeniskelamin=$_POST['jenis kelamin'];
  $komentar=$_POST['komentar'];
  $submit=$_POST['submit'];

  $query="INSERT INTO regristrasi VALUES('$nama','$umur','$jeniskelamin','$komentar','$submit')"
  mysqli_quer($koneksi, $query);
 ?>