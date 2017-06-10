<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati||Membuat Tabel:.</title>
</head>

<body>
<?php
include_once("db_connect.php");
$tabel=mysql_query( "CREATE TABLE tamu (
id INT NOT NULL,
nama VARCHAR(30) NOT NULL,
alamat VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
komentar VARCHAR(255) NOT NULL,
PRIMARY KEY (id))");

if($tabel)
{echo"Berhasil membuat tabel tamu melalui script php";}
else
{echo"Gagal membuat tabel";}
?>
</body>
</html>
