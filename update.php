<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati||Update:.</title>
</head>

<body>
<?php
include_once("db_connect.php");
$update=mysql_query("UPDATE tamu set alamat= 'kendal' where id =2");
$update=mysql_query("UPDATE tamu set email= 'kendal@stekom.ac.id' where id =2");

$update=mysql_query("UPDATE tamu set alamat= 'weleri' where id =4");
$update=mysql_query("UPDATE tamu set email= 'weleri@stekom.ac.id' where id =4");

if($update)
{echo"Berhasil mengupdate data pada tabel tamu";}
else
{echo"Gagal mengupdate data";}
?>
</body>
</html>
