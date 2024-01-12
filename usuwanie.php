<?php


$polaczenie=mysqli_connect('localhost','root','','komis');

 if (isset($_GET['usuwanieid'])) {
	 $id=$_GET['usuwanieid'];
$usuwanie=mysqli_query($polaczenie,"DELETE  FROM samochody WHERE id='$id'");

echo("usunięto wybrany wpis :)");
header('Location:operacje.php');
 }

mysqli_close($polaczenie);
?>