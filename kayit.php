
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
$kullanici=@mysql_real_escape_string($_POST['kullanici']);
$mail=@mysql_real_escape_string($_POST['mail']);
$sifre=@mysql_real_escape_string($_POST['sifre']);
$sifre2=@mysql_real_escape_string($_POST['sifre2']);


$md5_sifre=md5($sifre);

if(($kullanici=="") or($sifre=="") or($mail=="") or($sifre2==""))
{
$mesaj="boş alan bırakamazsınız sisteme kayıt olmak istiyorsanız lütfen aşağıdaki kayıt formunu doldurunuz.";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/record.php';</script>";
}
else{
if($sifre!=$sifre2)
{
$mesaj="şifreler eşleşmedi lütfen girdiğiniz şifreleri kontrol ediniz.";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/record.php';</script>";
}
else{
if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
{	
$mesaj="geçersiz mail adresi lütfen mail adresinizi kontrol ediniz";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/record.php';</script>";

}
else{
$ekle=@mysql_query("insert into uyeler(mail,kullanici,sifre) values('$mail','$kullanici','$sifre')");
if($ekle)
{
$mesaj="kayıt başarılı sisteme giriş yapabilirsiniz.";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/logini.php';</script>";
}
else
{
$mesaj="bir hata oluştu kaydınız gerçekleşemedi lütfen tekrar deneyiniz.";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/record.php';</script>";}
}
}
}
?>
</body>
</html>