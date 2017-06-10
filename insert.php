<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati||Insert:.</title>
</head>

<body>
<?php
include_once("db_connect.php");
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
			VALUES ('1','STEKOM SEMARANG','Jl. Majapahit 605 Semarang','info@stekom.ac.id','testing!')");
			
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
			VALUES ('2','STEKOM KENDAL','Jl. Majapahit 605 Semarang','info@stekom.ac.id','testing!')");
			
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
			VALUES ('3','ZSTEKOM','Jl. Majapahit 605 Semarang','info@stekom.ac.id','testing!')");

$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
			VALUES ('4','STEKOM WELERI','Jl. Majapahit 605 Semarang','info@stekom.ac.id','testing!')");
			
if($insert)
{echo"Berhasil menambahkan data pada tabel tamu";}
else
{echo"Gagal menambahkan data";}
?>
</body>
</html>
