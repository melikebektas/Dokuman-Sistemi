<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css"/>
</head>

<body background="pink_rice.png">

<div class="menu">

<ul>
<li><a href="#" class="solust" id="solalt">ANASAYFA</a></li>
<li><a href="dokumanlar.php">DÖKÜMANLAR</a></li>
<li><a href="#">DÖKÜMAN İŞLEMLERİ</a>
<ul>
<li><a href="add.php">EKLEME</a></li>
<li><a href="delete.php">SİLME</a></li>
</ul></li>
<li><a href="search.php" class="sagust" id="sagalt">ARAMA</a></li>
</ul>
</div>
<div align="right">
<?php
$aylar=array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");

if(!isset($_REQUEST['ay']))$_REQUEST['ay']=date("n");

if(!isset($_REQUEST['yil']))$_REQUEST['yil']=date("Y");

$ay=$_REQUEST['ay'];
$yil=$_REQUEST['yil'];

$onceki_yil=$_REQUEST['yil'];
$sonraki_yil=$_REQUEST['yil'];

$onceki_ay=$ay-1;
$sonraki_ay=$ay+1;

if($onceki_ay==0)
{
$onceki_ay=12;
$onceki_yil=$yil-1;
}
if($sonraki_ay==13)
{
$sonraki_ay=1;
$sonraki_yil=$yil+1;	
}
?>
<table  width="200">
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr align="center">
<td colspan="7" bgcolor="#000000">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>

<td width="20%" align="left">&nbsp;&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] . "?ay=". $onceki_ay . "&yil=" . $onceki_yil; ?>" style="color:#FFFFFF"><<</a></a></a></td>
<td align="center" style="color:#FFFFFF"><strong><?php echo $aylar[$ay-1].' '.$yil; ?></strong>
</td>
<td width="20%" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?ay=". $sonraki_ay . "&yil=" . $sonraki_yil; ?>" style="color:#FFFFFF">>></a>&nbsp;&nbsp;
</td>
</tr>
</table>
</td>
</tr>
<tr>
 <td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Pa</strong></td>
 <td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Pt</strong></td>
 <td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Sa</strong></td>
 <td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Ça</strong></td>
 <td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Pe</strong></td>
 <td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Cu</strong></td>
 <td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Ct</strong></td>
 </tr>
 <?php
$zaman=mktime(0,0,0,$ay,1,$yil);
$maxgun=date("t",$zaman);
$buay = getdate ($zaman);
$ilkgun  = $buay['wday'];

 
for ($i=0; $i<($maxgun+$ilkgun); $i++) {
 if(($i % 7) == 0 ) echo "<tr>\n";
 if($i < $ilkgun) echo "<td style=\"color:#FFFFFF\"></td>\n";
 else echo "<td align='center' valign='middle' height='20px' style=\"color:#000\">". ($i - $ilkgun + 1) . "</td>\n";
 if(($i % 7) == 6 ) echo "</tr>\n";
 }
 ?>
 </table>
 </td>
 </tr>
 </table>
 


</div>
</body>
</html>