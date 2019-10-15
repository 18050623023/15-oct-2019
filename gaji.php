<?php

include 'classgaji.php';

$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$sksh = $_POST['sksh'];

if ($sksh == "dosen") {
	$dosen= new dosen($nama,$nip,$alamat);

	$dosen -> gajidosen($sksh);
	$gatot = $dosen -> getTotaldosen();
	$nama = $dosen -> getNama();
	$nip = $dosen -> getNip();
	$alamat = $dosen -> getAlamat();
}
else{
	$staff= new staff($nama,$nip,$alamat);

	$staff -> gajistaff($sksh);

	$gatot = $staff -> getTotalstaff();
	$nama = $staff -> getNama();
	$nip = $staff -> getNip();
	$alamat = $staff -> getAlamat();
}
/*echo $gaji.$sks;*/

/*echo $_POST['level'];
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">

	<input type="text" name="nip" placeholder="NIP"><br>
	<input type="text" name="nama" placeholder="Nama"><br>
	<input type="text" name="alamat" placeholder="Alamat"><br>
	<input type="text" name="sksh" placeholder="SKS/Hari">
	<br>
	<select name="level">
		<option>Default</option>
		<option value="dosen">Dosen</option>
		<option value="staff">Staff</option>
	</select>
	<br>
	<input type="submit" name="">
	
</form>
<br>
Nama : <?php echo $nama;?> <br>
NIP : <?php echo $nip;?> <br>
Alamat : <?php echo $alamat;?> <br>
Gaji Total<input type="text" name="" value="<?php echo $gatot;?>" readonly="readonly">
</body>
</html>