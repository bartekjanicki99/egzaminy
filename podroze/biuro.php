<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>
    <article>
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
            $polaczenie=mysqli_connect('localhost','root','','egzamin4');
            $sql1="select id,cel,cena from wycieczki where dostepna=0;";
            $wynik=mysqli_query($polaczenie,$sql1);
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                $id=$wiersz['id'];
                $cel=$wiersz['cel'];
                $cena=$wiersz['cena'];
                echo "<span>$id. $cel, cena: $cena</span><br>";
            }
            mysqli_close($polaczenie);        
            ?>
    </article>
    <aside>
        <h3>NAJTANIEJ</h3>
        <table>
        <tr>
            <td>Włochy</td>
            <td>od 1200 zł</td>
        </tr>
        <tr>
            <td>Francja</td>
            <td>od 1200 zł</td>
        </tr>
        <tr>
            <td>Hiszpania</td>
            <td>od 1400 zł</td>
        </tr>
        </table>
    </aside>
    <main>
        <h3>TU BYLIŚMY</h3>
        <?php
            $polaczenie=mysqli_connect('localhost','root','','egzamin4');
            $sql2="select nazwaPliku, podpis from zdjecia order by podpis desc;";
            $wynik2=mysqli_query($polaczenie,$sql2);
            while($wiersz2=mysqli_fetch_assoc($wynik2))
            {
                $plik=$wiersz2['nazwaPliku'];
                $podpis=$wiersz2['podpis'];
                echo "<img src='$plik' alt='$podpis'>";
            }
            mysqli_close($polaczenie);   
        ?>
    </main>
    <nav>
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </nav>
    <footer>
        <p>Stronę wykonał: 12121212</p>
    </footer>
</body>
</html>