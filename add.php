<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	margin:100px;
}

input[type=submit] {
    width: 10%;
    background-color: #422DBD;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


</style>
</head>
<div align="center">
<body bgcolor="#f1f1f1">

<form action="ekle.php" method="post" enctype="multipart/form-data">

<label>LÜTFEN BİR DOSYA SEÇİNİZ</label><br /><br/>

<input type="hidden" name="MAX_FILE_SIZE" value="16000000" />
<input type="file" name="userfile" id="userfile" /><br/><br/>

<input type="submit" value="gönder" name="upload" id="upload" class="box"/>


</form>
</div>
</body>
</html>