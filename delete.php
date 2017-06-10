<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati||Delete:.</title>
</head>

<body>
<?php
include_once("db_connect.php");
$id=3;
$delete=mysql_query("delete from tamu where id ='$id'");


if($delete)
{echo"Berhasil menghapus data pada tabel tamu dengan id $id";}
else
{echo"Gagal mengupdate data";}
?>
</body>
</html>
