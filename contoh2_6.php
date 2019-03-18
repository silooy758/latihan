
<html>
<head>
	<title>.:: Struktur Kendali Switch::.</title>
</head>
<body>
<font face=verdana size=2>
<?php
$dino="Monday";
switch($dino)
{
case "Monday":
		$hari="Senin";
	break;
case "Tuesday":
		$hari="Selasa";
	break;
case "Wednesday":
		$hari="Rabu";
	break;
case "Thursday":
		$hari="Kamis";
		break;
case "Friday":
		$hari="Jumat";
		break;
case "Saturday":
		$hari="Sabtu";
		break;
default:
		$hari="Minggu";
}
echo "<h3>Hari ini adalah hari <u>".$hari."</u></h3>";
?>
</body>
</html>
