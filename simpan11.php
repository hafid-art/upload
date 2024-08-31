<?php
//panggil koneksi database
include "koneksi.php";


//tampilkan data db_ikm
$tampil=mysqli_query($koneksi, "SELECT" from db_ikm limit 1");
$data =mysqli_fetch_array($tampil);
//tampung data ke dalam variabel

$id_ikm=$data['id_ikm'];
$memuaskan=$data['memuaskan'];
$cukup=$data['cukup'];
$kurang=$data['kurang']; 

//ambil nilai keterangan
$keterangan=$_GET['KET'];

//uji jika keterangan tidak kosong
if(isset($keterangan))
{
	//uji jika keterangan=memuaskan
	if($keterangan=="memuaskan")
	{
		//nilai memuaskan ditambah 1
		$memuaskan=$mem+1;
		//query update nilai memuaskan ke dalam tabel db_ikm
		$query ="UPDATE db_ikm SET puas= '$puas' where id_ikm ='$id_ikm' ";
	}
	elseif($keterangan=="cukup")
	{
		//nilai cukup ditambah 1
		$cukup=$cukup+1;
		//query update nilai cukup ke dalam tabel db_ikm
		$query ="UPDATE db_ikm SET cukup= '$cukup' where id_ikm ='$id_ikm' ";
	}
	elseif($keterangan=="kurang")
	{
		//nilai kurang ditambah 1
		$kurang=$kurang+1;
		//query update nilai kurang ke dalam tabel db_ikm
		$query ="UPDATE db_ikm SET kurang= '$kurang' where id_ikm ='$id_ikm' ";
	}

	//update data sesuai mysqli_query
	mysqli_query($koneksi, $query);
	echo "<script>alert('terima kasih, anda berhasil memberikan penilaian');
	document.location='index.php';
	</script>";

	}

}

?>