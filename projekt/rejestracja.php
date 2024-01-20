

<!DOCTYPE html>
<html lang="pl-PL">
<head>
<title>Rejestracja</title>
<link rel="stylesheet" href="stronaglowna2.css">
</head>
<body>
<header>
<section class="menu">
<img src="obraz1.png" alt="tu powinno byc logo" id="obraz1">
<a href="stronaglowna.php">Wróć na stronę główną</a>
<a href="kontakt.html">Kontakt</a>
<a href="galeria.html">Galeria</a>
</section>
</header>
<nav>
<section>
</section>
</nav>
<main>
<section class="rejestracja">
 <form action="" method="post">
        <label for="login">Podaj nowy login:</label>
        <input type="text" name="login" class="input">

        <label for="haslo">Podaj nowe hasło:</label>
        <input type="password" name="haslo" class="input">
		<input type="submit" value="Stwórz konto">
		
		
    </form>
</section>
<?php
$polaczenie=mysqli_connect('localhost','root','','komis');

if (!$polaczenie) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login']) && isset($_POST['haslo'])) {
    $login = $_POST['login'];
    $raw_password = $_POST['haslo'];

    if (empty($login) || empty($raw_password)) {
        echo "Wypełnij wszystkie pola.";
    } else {
        $hashed_password = password_hash($raw_password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO uzytkownicy (login, haslo) VALUES ('$login', '$hashed_password')";

        if (mysqli_query($polaczenie, $sql)) {
            echo "<script type='text/javascript'>alert('Konto zostało utworzone pomyślnie');</script>";
			header('Location:logowanie.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($polaczenie);
        }
    }
}



mysqli_close($polaczenie);
?>
</main>
<footer>
<h4>Stronę wykonał: Bartłomiej Janicki 5Ti</h4>
</footer>

</body>
</html>