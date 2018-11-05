<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>

<body bgcolor="#f1f1f1">

<?php
$baglan=@mysql_connect("localhost","root","") or die("veritabanı bağlantısı sağlanılamadı");
$sec=@mysql_select_db("dokuman_sistemi");
?>


<?php
$kullanici=@$_POST['kullanici'];
$sifre=@$_POST['sifre'];

$md5_sifre=md5('$sifre');


$sor=@mysql_num_rows(mysql_query("select * from uyeler where kullanici='$kullanici' and sifre='$sifre'"));
if($sor>0)
{
header("location:anasayfa.php");	
}
else
{
$mesaj="sisteme giriş başarısız lütfen kullanıcı adınızı ve şifrenizi kontrol ediniz";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/logini.php';</script>";

}

?>


</body>
</html>
