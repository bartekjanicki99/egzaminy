
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="stronaglowna2.css">
<title>Edytowanie autka</title>
</head>
<body>
<header>
<section class="menu">
<img src="obraz1.png" alt="tu powinno byc logo" id="obraz1">

<a href="kontakt.html">Kontakt</a>
<a href="galeria.html">Galeria</a>
<a href="stronaglowna.php">Wróć do strony głównej</a>
</section>
</header>

<main>
<section class="dodawanie">

<br>
<br>
<form action="edit.php" method="get">
<h2>Edytowanie autka</h2>
<input type="text" name="id" class="input">&nbsp Wpisz id do zmiany</br>
<input type="text" name="marka" class="input">&nbsp marka auta</br>
<input type="text" name="model" class="input" >&nbsp model auta</br>
<input type="text" name="rocznik" class="input">&nbsp rocznik auta</br>
<input type="text" name="kolor" class="input">&nbsp kolor</br>
<input type="file" name="zdjecie" class="input">&nbsp zdjecie</br></br>
<input type="submit" name="submit" class="przycisk">
</form>
<?php
$polaczenie=mysqli_connect('localhost','root','','komis') or die ("mordo nie dziala");


			
		if(isset($_GET['submit'])) {
			$marka=$_GET['marka'];
		$model=$_GET['model'];
		$rocznik=$_GET['rocznik'];
		$kolor=$_GET['kolor'];
		$zdjecie=$_GET['zdjecie'];
			$id=$_GET['id'];
		
		if (!empty($marka) && !empty($model) && !empty($rocznik) && !empty($kolor) && !empty($zdjecie) && !empty($id))
			{
		$zmiana=mysqli_query($polaczenie, "UPDATE samochody SET marka = '$marka', model = '$model', rocznik = '$rocznik',kolor = '$kolor', zdjecie = '$zdjecie' WHERE id = '$id';");
		 header('Location:operacje.php');
			}
			else {
				echo "wypełnij wszystkie pola!!!!";
			}
		}
		 
?>


</section>
</main>
<footer>
<h4>Stronę wykonał: Bartłomiej Janicki 5Ti</h4>
</footer>
</body>
</html>