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
<a href="stronaglowna.php">Wróć do strony głównej</a>
<a href="logowanie.php">Dodaj swoją aukcje</a>


</header>
<nav>

    <form method="post" action="">
        <label for="marka">Wybierz markę:</label>
        <input type="text" name="marka" id="marka">
        <input type="submit" value="Szukaj" name="submit">
    </form>

</nav>
<main>
<?php
    if (isset($_POST['submit'])) {
        $marka = $_POST['marka'];

        // Połączenie z bazą danych
        $polaczenie = mysqli_connect('localhost', 'root', '', 'komis');
        // Zapytanie SQL
        $sql = "SELECT * FROM samochody WHERE marka LIKE '%$marka%'";
        $wynik = mysqli_query($polaczenie, $sql);
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
        

        // Zamykamy połączenie z bazą danych
        mysqli_close($polaczenie);
    }
    ?>
</main>
<footer>
<h4>Stronę wykonał: Bartłomiej Janicki 5Ti</h4>
</footer>
<script src="wyszukiwarka.js"></script>
</body>

</html>