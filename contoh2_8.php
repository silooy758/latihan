
<html>
<head>
		<title>::: Operasi Aritmatika :::</title>
</head>
<body>
<form action=operasi.php method=post>
<center><h3>Operasi Aritmatik A dan B</h3></center>
<table align=center bgcolor=#cedadc bordercolor=#cfdbdd>
		<tr>
			<td>Masukkan Nilai A </td>
			<td><input type=text name=a size=10></td>
		</tr>
		<tr>
			<td>Masukkan Nilai B </td>
			<td><input type=text name=b size=10></td>
		</tr>
		<tr>
			<td>Operasi</td>
			<td>
				<select name=operasi>
	    			<option value=1>Penjumlahan [a+b]</option>
	    			<option value=2>Pengurangan [a-b]</option>
  <option value=3>
       Perkalian [a*b]</option>
<option value=4>
Pembagian 	[a/b]</option>
</select>
</td>
</tr>
<tr>
<td colspan=2 align=center>
<input type=submit value=hitung></td>
</tr>
</table>
</form>
</body>
</html>
