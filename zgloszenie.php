<?php
$polaczenie=mysqli_connect('localhost','root','','ratownictwo');
$nrzespolu=$_POST['nrzespolu'];
$nrdespozytora=$_POST['nrdespozytora'];
$adres=$_POST['adres'];
$czas=date("H:i:s");
if (isset($_POST['zglos']))
{
$sql="INSERT INTO zgloszenia VALUES ('',$nrzespolu,$nrdespozytora,'$adres',0,'$czas');";
$wynik=mysqli_query($polaczenie,$sql);
}
mysqli_close($polaczenie);
?>