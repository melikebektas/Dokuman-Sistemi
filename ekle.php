<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body bgcolor="#f1f1f1">


<?php

if(isset($_POST['upload']) && $_FILES['userfile']['size']>0)

{
$fileName=$_FILES['userfile']['name'];
$tmpName=$_FILES['userfile']['tmp_name'];
$fileSize=$_FILES['userfile']['size'];
$fileType=$_FILES['userfile']['type'];

$fileType=(get_magic_quotes_gpc()==0 ? @mysql_real_escape_string($_FILES['userfile']['type']): @mysql_real_escape_string(stripslashes($_FILES['userfile'])));

$fp=fopen($tmpName, 'r');
$content=fread($fp,filesize($tmpName));
$content=addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
$fileName=addslashes($fileName);	
}

$baglan=@mysql_connect("localhost","root","") or die("veritabanı bağlantısı sağlanılamadı");
$sec=@mysql_select_db("dokuman_sistemi");

if($sec)
{
$query="INSERT INTO dokumanlar (name,type,size,content) VALUES ('$fileName', '$fileType', '$fileSize', '$content')";

@mysql_query($query)or die('error');

@mysql_close();

$mesaj="Dosyanız başarılı bir şekilde yüklenmiştir.";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/add.php';</script>";

}else
{
$mesaj="dosyanızı yüklerken bir hata oluştu lütfen tekrar deneyiniz.";
echo "<script type='text/javascript'>alert('$mesaj');window.location='http://localhost/dokumansist/add.php';</script>";

}

}


?>
</body>

</html>