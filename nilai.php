
<html>
<head>
	<title>.:: Contoh Seleksi Kondisi ::.</title>
</head>
<body>
<font face=verdana size=2>
<?php

if(!empty($_POST['proses'])) { 
	$nilai = $_POST['nilai'];
}


echo "Nilai Ujian anda : $nilai<br>";
if ($nilai>70)
{
      echo "Anda Kompeten<br>";
} else {

	echo "tidak kompeten";
}
?>
</body>
</html>

