
<!DOCTYPE html>
<html lang="pl-PL">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="stronaglowna.css">
<title>Komis samochodowy</title>
</head>
<body>
<header>
<img src="obraz1.png" alt="tu powinno byc logo" id="obraz1">
<a href="wyszukiwarka.php">Wyszukaj dane auto po marce</a>
<a href="logowanie.php">Dodaj swoją aukcje</a>
<a href="kontakt.html">Kontakt</a>
<a href="galeria.html">Galeria</a>

</header>
<nav>
<h2>Aktualne oferty</h2>
</nav>
<main>
<?php
$polaczenie=mysqli_connect('localhost','root','','komis');
$sql='select marka,model,rocznik,kolor,zdjecie from samochody;';
$wynik=mysqli_query($polaczenie,$sql);
while($wiersz=mysqli_fetch_array($wynik))
{
	$marka=@$wiersz['marka'];
	$model=@$wiersz['model'];
	$rocznik=@$wiersz['rocznik'];
	$kolor=@$wiersz['kolor'];
	$zdjecie=@$wiersz['zdjecie'];
    echo "<section class='fury'>"."<img src='$zdjecie' alt='fotka'>"
    ."</img>"."<h3>".$marka."</h3>"
    ."<p>"."Model:".$model."</p>"
	."<p>"."Rocznik: ".$rocznik."</p>"
	."<p>"."Kolor: ".$kolor."</p>"
    ."</section>";
}
mysqli_close($polaczenie);
?>
</main>
<footer>
<h4>Stronę wykonał: Bartłomiej Janicki 5Ti</h4>

</footer>
</body>

</html>