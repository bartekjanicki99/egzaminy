<?php
session_start();
if((isset($SESSION['zalogowany'])) && ($SESSION['zalogowany']==true))
{
	header('dodawanie.php');
}
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="stronaglowna2.css">
</head>
<body>
<header>
<section class="menu">
<img src="obraz1.png" alt="tu powinno byc logo" id="obraz1">
<a href="stronaglowna.php">Wróć do strony głównej</a>
<a href="kontakt.html">Kontakt</a>
<a href="galeria.html">Galeria</a>
</section>
</header>

<main>
<section class="dodawanie">
<form action="" method="get">
<h2>Dodawanie autka</h2>
<input type="text" name="marka" class="input">&nbsp marka auta</br>
<input type="text" name="model" class="input" >&nbsp model auta</br>
<input type="text" name="rocznik" class="input">&nbsp rocznik auta</br>
<input type="text" name="kolor" class="input">&nbsp kolor</br>
<input type="text" name="zdjecie" class="input">&nbsp zdjecie</br></br>
<input type="submit" name="Dodaj" value="Dodaj" class="przycisk">
</form>
</section>
<br>
<br>
<?php
$marka=@$_GET['marka'];
$model=@$_GET['model'];
$rocznik=@$_GET['rocznik'];
$kolor=@$_GET['kolor'];
$zdjecie=@$_GET['zdjecie'];

 
$polaczenie=mysqli_connect('localhost','root','','komis') or die("cos nie pyklo");
if (isset($_GET['Dodaj']) && $_GET['Dodaj'] == 'Dodaj') {
    if (!empty($marka) && !empty($model) && !empty($rocznik) && !empty($kolor) && !empty($zdjecie)) {
        $query = "INSERT INTO samochody (marka, model, rocznik, kolor, zdjecie) VALUES ('$marka', '$model', '$rocznik', '$kolor', '$zdjecie')";
        if (mysqli_query($polaczenie, $query)) {
            echo "Wprowadzono nowy samochód do bazy danych.";
        } else {
            echo "Błąd podczas dodawania samochodu: " . mysqli_error($polaczenie);
        }
    } else {
        echo "Wszystkie pola muszą być wypełnione.";
    }
}
$sql2='select id,marka,model,rocznik,kolor,zdjecie from samochody;';
$wynik=mysqli_query($polaczenie,$sql2);
echo '<table class="tabelka"><tr><th>Id</th><th>Marka</th><th>Model</th><th>Rocznik</th><th>Kolor</th><th>Zdjecie</th><th>Operacje</th></tr>';
while($wiersz=mysqli_fetch_array($wynik))
{	
	$id=@$wiersz['id'];
	$marka=@$wiersz['marka'];
	$model=@$wiersz['model'];
	$rocznik=@$wiersz['rocznik'];
	$kolor=@$wiersz['kolor'];
	$zdjecie=@$wiersz['zdjecie'];
	    
         echo "<tr>
		 <td>$id</td>
		 <td>$marka</td>
		 <td>$model</td>
		 <td>$rocznik</td>
		 <td>$kolor</td>
		 <td>$zdjecie</td>
		 <td>
		 <a href=''>Zmień</a>
		 <a href='usuwanie.php'>Usuń</a>
		 </td>
		 </tr>";
    }
    echo '</table>';
$usuwanie=mysqli_query($polaczenie,"DELETE FROM samochody WHERE id='$id'");

mysqli_close($polaczenie);
?>
</main>
<footer>
<h4>Stronę wykonał: Bartłomiej Janicki 5Ti</h4>
</footer>



 

</body>
</html>