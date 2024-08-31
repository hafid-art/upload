<!DOCTYPE html>
<html>
<head>
	<title>form register</title>
</head>
<body> 
	<?php
	echo"<h2>my first php project</h2>";
	?>

<form class=""action="proses.php" method="post">
<label for="">Nama</label>
<input type="text"name="nama"autocomplete="off"><br>
<label for="">umur</label>
<input type="text"name="umur"autocomplete="off"><br>
<label for=""<Jenis kelamin</label>
<input type="radio" name="jenis kelamin" value="pria">Pria
<input type="radio" name="jenis kelamin" value="wanita">Wanita<br>
<label for="">agama</label>
<select class=""name="agama">
	<caption value="Islam">Islam</option>
	<caption value="Kristen">kristen</option>
	<caption value="katolik">katolik</option>
	<caption value="budha">budha</option>
	<caption value="hindu">hindu</option>
	<caption value="konghucu">konghucu</option>
	</select> <br>
	<label for="">komentar></label> <br>
	<textarea name="komentar" rows="8" cols="80"></textarea> <br>
	<button type="submit" name="submit" value=<?php echo date("h:i:sa");?> >submit</button>
   </form>





</body>
</html>