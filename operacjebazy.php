
<!DOCTYPE html>
<html lang="pl-PL">
<head>
<title>Operacje</title>
<link rel="stylesheet" href="2.css">
</head>
<body>
<header>
<h2>ZALOGOWANY</h2>
</header>
<nav>
<h2>Wpisy</h2>
<section class="pokaz">
<form action="" method="post">
<input type="submit" name="pokaz" value="Pokaz" class="przycisk">
</form>
<?php 
$polaczenie=mysqli_connect('localhost','root','','projektbazy')or die ("nie polaczono");
if (isset($_POST['pokaz'])) 
{
$pokaz='select * from dane;';
$wynik=mysqli_query($polaczenie,$pokaz);
echo '<table class="tabelka" border="1px"><tr><th>Id</th><th>Imie</th><th>Nazwisko</th><th>Wiek</tr>';
while($wiersz=mysqli_fetch_array($wynik))
{	
	$id=$wiersz['id'];
	$imie=$wiersz['imie'];
	$nazwisko=$wiersz['nazwisko'];
	$wiek=$wiersz['wiek'];
	    
         echo "<tr>
		 <td>$id</td>
		 <td>$imie</td>
		 <td>$nazwisko</td>
		 <td>$wiek</td>

		 </tr>";
    }
}
    echo '</table>';


?>
</section>
</nav>
<main>
<section class="wstawianie">
<form action="" method="get">
<h2>Wstawianie wpisu</h2>
<input type="text" name="imie">wstaw imie<br>
<input type="text" name="nazwisko">wstaw nazwisko<br>
<input type="number" name="wiek">wstaw wiek<br>
<input type="submit" value="wstaw" name="wstaw" class="przycisk">
</form>
<?php

$polaczenie=mysqli_connect('localhost','root','','projektbazy') or die ("nie polaczono");

 if (isset($_GET['wstaw'])) 
 {
	 $imie=$_GET['imie'];
$nazwisko=$_GET['nazwisko'];
$wiek=$_GET['wiek'];
if(!empty($imie) && !empty($nazwisko) && !empty($wiek))
{
$wstawianie="INSERT INTO dane (imie, nazwisko, wiek) VALUES ('$imie', '$nazwisko', '$wiek');";
 if (mysqli_query($polaczenie, $wstawianie)) 
		{
            echo "Wprowadzono nowy wpis do bazy danych.";
        } 
		else 
		{
            echo "Błąd podczas dodawania wpisu: " . mysqli_error($polaczenie);
        }
}
else {
	print ("wstaw info we wszystkie pola ziomek");
}
 }
 
 
 mysqli_close($polaczenie);
?>
</section>
<section class="usuwanie">
<form action="" method="get">
<h2>Usuwanie wpisu</h2>
<input type="number" name="id">wybierz id do usuniecia<br>
<input type="submit" value="Usuń" name="usun" class="przycisk">
</form>
<?php

$polaczenie=mysqli_connect('localhost','root','','projektbazy') or die ("nie polaczono");

 if (isset($_GET['usun'])) 
 {
	$id=$_GET['id'];
if(!empty($id))
{
$usuwanie="DELETE FROM dane where id='$id'";
 if (mysqli_query($polaczenie, $usuwanie)) 
		{
            echo "Usunięto wpis z bazy danych.";
        } 
		else 
		{
            echo "Błąd podczas usuwania wpisu: " . mysqli_error($polaczenie);
        }
}
else {
	print ("wstaw id spoko ok");
}
 }
 
 
 mysqli_close($polaczenie);
?>
</section>
<section class="edytowanie">
<form action='' method="post">
<h2>Edytowanie</h2>
<input type="number" name="id">wybierz id do zmiany<br>
<input type="text" name="nazwisko">wpisz poprawione nazwisko<br>
<input type="submit" value="Edytuj" name="edytuj" class="przycisk">
</form>
<?php
$polaczenie=mysqli_connect('localhost','root','','projektbazy') or die ("nie polaczono");
if (isset($_POST['edytuj'])) 
 {
	$id=$_POST['id'];
	$nazwisko=$_POST['nazwisko'];
if(!empty($id) && !empty($nazwisko))
{
$edytowanie="UPDATE dane SET nazwisko='$nazwisko' where id='$id'";
 if (mysqli_query($polaczenie, $edytowanie)) 
		{
            echo "Zmieniono wpis w bazie danych.";
        } 
		else 
		{
            echo "Błąd podczas edytowania wpisu: " . mysqli_error($polaczenie);
        }
}
else {
	print ("wstaw informacje w pola spoko ok");
}
 }
 
 
 mysqli_close($polaczenie);
?>

</section>
<section class="wybieranie">
<form action='' method="post">
<h2>Wybieranie</h2>
<input type="number" name="id">wyszukaj id <br>
<input type="text" name="imie">wyszukaj imie<br>
<input type="text" name="nazwisko">wyszukaj nazwisko<br>
<input type="submit" value="Wyszukaj" name="wyszukaj" class="przycisk">
</form>
<?php
$polaczenie=mysqli_connect('localhost','root','','projektbazy') or die ("nie polaczono");
if (isset($_POST['wyszukaj'])) 
 {
	 $id=$_POST['id'];
	 $imie=$_POST['imie'];
	 $nazwisko=$_POST['nazwisko'];
	  $pokaz1 = "";
    $pokaz2 = "";
    $pokaz3 = "";
    $pokaz4 = "";
    $pokaz5 = "";
    $pokaz6 = "";
	echo '<table border="1px"><tr><th>Id</th><th>Imie</th><th>Nazwisko</th><th>Wiek</tr>';
	if (isset($id) || isset($imie) || isset($nazwisko)) {
    $pokaz4 = "select * from dane where id='$id' or imie='$imie' or nazwisko='$nazwisko';";
	$wynik4=mysqli_query($polaczenie,$pokaz4);
	while($wiersz=mysqli_fetch_array($wynik4))
{	
	$idbaza=$wiersz['id'];
	$imiebaza=$wiersz['imie'];
	$nazwiskobaza=$wiersz['nazwisko'];
	$wiekbaza=$wiersz['wiek'];
	    
         echo "<tr>
		 <td>$idbaza</td>
		 <td>$imiebaza</td>
		 <td>$nazwiskobaza</td>
		 <td>$wiekbaza</td>

		 </tr>";
    }

} else if (isset($id) && isset($imie)) {
    $pokaz2 = "select * from dane where id='$id' and imie='$imie';";
	$wynik2=mysqli_query($polaczenie,$pokaz2);
		while($wiersz=mysqli_fetch_array($wynik2))
{	
	$idbaza=$wiersz['id'];
	$imiebaza=$wiersz['imie'];
	$nazwiskobaza=$wiersz['nazwisko'];
	$wiekbaza=$wiersz['wiek'];
	    
         echo "<tr>
		 <td>$idbaza</td>
		 <td>$imiebaza</td>
		 <td>$nazwiskobaza</td>
		 <td>$wiekbaza</td>

		 </tr>";
    }
}
} else if (isset($imie) && isset($nazwisko)) {
    $pokaz5 = "select * from dane where imie='$imie' and nazwisko='$nazwisko';";
	 $wynik5=mysqli_query($polaczenie,$pokaz5);
	 	
	while($wiersz=mysqli_fetch_array($wynik5))
{	
	$idbaza=$wiersz['id'];
	$imiebaza=$wiersz['imie'];
	$nazwiskobaza=$wiersz['nazwisko'];
	$wiekbaza=$wiersz['wiek'];
	    
         echo "<tr>
		 <td>$idbaza</td>
		 <td>$imiebaza</td>
		 <td>$nazwiskobaza</td>
		 <td>$wiekbaza</td>

		 </tr>";
    }
	if (isset($id) && isset($imie) && isset($nazwisko)) {
    $pokaz3 = "select * from dane where id='$id' and imie='$imie' and nazwisko='$nazwisko';";
	 $wynik3=mysqli_query($polaczenie,$pokaz3);
	 	while($wiersz=mysqli_fetch_array($wynik3))
{	
	$idbaza=$wiersz['id'];
	$imiebaza=$wiersz['imie'];
	$nazwiskobaza=$wiersz['nazwisko'];
	$wiekbaza=$wiersz['wiek'];
	    
         echo "<tr>
		 <td>$idbaza</td>
		 <td>$imiebaza</td>
		 <td>$nazwiskobaza</td>
		 <td>$wiekbaza</td>

		 </tr>";
    }
} 

 



echo "</table>";

	
	
 }
 
 mysqli_close($polaczenie);
?>

</main>
</section>

</body>
</html>