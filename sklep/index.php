<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">

</head>
<body>
<header>
<h1>W naszej hurtowni kupisz najtaniej</h1>
</header>
<aside>
    <h3>Ceny wybranych artykułów w hurtowni:</h3>
    <table>
        <?php
        $polaczenie=mysqli_connect('localhost','root','','sklep');
        $sql1="select nazwa, cena from towary limit 4;";
        $wynik=mysqli_query($polaczenie,$sql1);
        while($wiersz=mysqli_fetch_assoc($wynik))
        {
            $nazwa=$wiersz['nazwa'];
            $cena=$wiersz['cena'];
            echo "<tr>
            <td>$nazwa</td>
            <td>$cena zł</td>
            </tr>";
        }

        mysqli_close($polaczenie);
        ?>
    </table>
</aside>
<main>
<h3>Ile będą kosztować Twoje zakupy?</h3>
<form method="post">
    <label>Wybierz artykuł</label>
    <select name="lista" id="">
        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
        <option value="Cyrkiel">Cyrkiel</option>
        <option value="Linijka 30 cm">Linijka 30 cm</option>
        <option value="Ekierka">Ekierka</option>
        <option value="Linijka 50 cm">Linijka 50 cm</option>
    </select>
    <br>
    <label>liczba sztuk:</label><input type="number" name="liczba" id="">
    <br>
    <input type="submit" value="OBLICZ" name="oblicz">
</form>
        <?php
        $polaczenie=mysqli_connect('localhost','root','','sklep');
        if(isset($_POST['lista']) && isset($_POST['liczba']))
        {
            $lista=$_POST['lista'];
            $liczba=$_POST['liczba'];
            $sql2="select cena from towary where nazwa='$lista';";
            $wynik2=mysqli_query($polaczenie,$sql2);
            while($wiersz=mysqli_fetch_assoc($wynik2))
            {
                $cena=$wiersz['cena'];
                $zaokraglonakwota=round($cena*$liczba,1);
                echo "$zaokraglonakwota";
            }
        }
        mysqli_close($polaczenie);
        ?>
</main>
<nav>
<img src="zakupy2.png" alt="hurtownia">
<h3>Kontakt</h3>
<p>telefon:<br>111222333<br>e-mail:<br><a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
</nav>
<footer>
<h4>Witrynę wykonał: 04272701498</h4>
</footer>
</body>
</html>