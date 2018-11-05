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
$id=@mysql_real_escape_string($_POST['id']);

$varmi=@mysql_query("select * from dokumanlar where id='$id'");
if(mysql_affected_rows())
{
$sil=@mysql_query("delete from dokumanlar where id='$id'")or die("error");
	
}
else{
if(@$sil)
{
$mesaj="id numarasını girdiğiniz döküman başarı ile silinmiştir";	
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/delete.php';</script>";

}
else{
$mesaj="id numarasını giridiğiniz döküman silinememiştir lütfen tekrar deneyiniz";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/delete.php';</script>";
}
}
?>

</body>
</html>