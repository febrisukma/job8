<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati||Select:.</title>
</head>
<body>
<table border="1">
<tr bgcolor="#00FFFF">	
	<td>No</td>
	<td>Nama</td>
	<td>Alamat</td>
	<td>email</td>
</tr>
	



<?php
include_once("db_connect.php");
$selectview=mysql_query("select id,nama,alamat,email
						from tamu order by id asc");
while($data=mysql_fetch_array($selectview))
{	echo"<tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	</tr>";
	}
	?>
</table>
</body>
</html>
