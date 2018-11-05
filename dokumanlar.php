<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
.tbl{ 
      padding:20px;
      margin:30px;
	  font-style:normal;
	  color:#422DBD;
	  font-family:"Times New Roman", Times, serif;
}




</style>
</head>

<body bgcolor="#f1f1f1">
<div align="center">

<?php
$baglan=@mysql_connect("localhost","root","") or die("veritabanı bağlantısı sağlanılamadı");
$sec=@mysql_select_db("dokuman_sistemi");

?>
<table>
<tr>
<td  class="tbl"><b>DÖKÜMAN ID</b></td>
<td  class="tbl"><b>DÖKÜMANIN ADI</b></td>
<td  class="tbl"><b>DÖKÜMANIN TÜRÜ</b></td>
<td  class="tbl"><b>DÖKÜMANIN BOYUTU(byte)</b></td>
</tr>

<?php
$verilecek=@mysql_query("select * from dokumanlar");
while($b=@mysql_fetch_array($verilecek))
{
$id=$b['id'];
$name=$b['name'];
$type=$b['type'];
$size=$b['size'];

echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$type</td>
<td>$size</td>
</tr>";
}

?>
</table>
</div>
</body>
</html>