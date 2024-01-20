<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="baner">
        <h1>Hurtownia z najlepszymi cenami</h1>
    </section>
    <section id="lewy">
        <h2>Nasze ceny</h2>
        <table>
            <?php
        $polaczenie=mysqli_connect('localhost','root','','sklep');
        $sql="select nazwa,cena from towary limit 4;";
        $wynik=mysqli_query($polaczenie,$sql);
        while($wiersz=mysqli_fetch_assoc($wynik))
        {
            $nazwa=$wiersz['nazwa'];
            $cena=$wiersz['cena'];
            echo "<tr>
            <td>$nazwa</td>
            <td>$cena</td>
            </tr>";
        }
        mysqli_close($polaczenie);
            ?>
        </table>
    </section>
    <section id="srodkowy">
        <h2>Koszt zakupów</h2>
        <form action="index.php" method="post">
            <label>Wybierz artykuł: </label>
            <select name="lista" id="">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30 cm">Linijka 30 cm</option>
            </select>
            <br>
            <label>liczba sztuk: <input type="number" name="liczba"><br>
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
            while($wiersz2=mysqli_fetch_assoc($wynik2))
            {
                $cena=$wiersz2['cena'];
                $total=$cena*$liczba;
                echo "<br><span>wartość zakupów: $total</span>";
            }
            }
            mysqli_close($polaczenie);
        ?>
    </section>
    <section id="prawy">
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p><a href="mailto:hurt@poczta2.pl">e-mail: hurt@poczta2.pl</a></p>
    </section>
    <section id="footer">
        <h4>Witrynę wykonał: 1221212</h4>
    </section>
</body>
</html>