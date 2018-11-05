<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#f1f1f1">
<?php
$baglan=@mysql_connect("localhost","root","") or die("veritabanı bağlantısı sağlanılamadı");
$sec=@mysql_select_db("dokuman_sistemi");
?>
<?php 

$arama=@mysql_real_escape_string($_POST['search']);

$result=@mysql_query("select * from dokumanlar where name like '%$arama%'");

$bulunan=0;
while($a=@mysql_fetch_array($result))
{
	
$bulunan++;
$name=$a['name'];
$id=$a['id'];
echo"<b>bulunan döküman '$name'</b><br/>";
}
if($bulunan==0)
{
	
$mesaj="hiç kayıt bulunamadı";
echo  "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/search.php';</script>";

}
else
{
echo $bulunan. "<b>kayıt bulundu</b><br/>";

}
	



?>
</body>
</html>