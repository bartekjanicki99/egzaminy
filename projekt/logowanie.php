<?php
session_start();
if ((isset($SESSION['zalogowany'])) && ($SESSION['zalogowany']==true))
{
	header('location:operacje.php');
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
<title>Logowanie</title>
<link rel="stylesheet" href="stronaglowna2.css">
</head>
<body>
<header>
<section class="menu">
<img src="obraz1.png" alt="tu powinno byc logo" id="obraz1">

<a href="kontakt.html">Kontakt</a>
<a href="galeria.html">Galeria</a>
<a href="stronaglowna.php">Wróć na stronę główną</a>
</section>
</header>
<main>
<section class="logowanie">
 <form action="zaloguj.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" class="input">

        <label for="haslo">Hasło:</label>
        <input type="password" name="haslo" class="input">

        <input type="submit" value="Login">
		<a href='rejestracja.php' style="color:white;font-size:12px;">Stwórz konto</a>
		
		
    </form>
</section>

</main>
<footer>
<h4>Stronę wykonał: Bartłomiej Janicki 5Ti</h4>
</footer>

</body>
</html>