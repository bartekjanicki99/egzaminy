<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl22.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="meteo">
    </header>
    <nav>
        <h1>Prognoza dla Wrocławia</h1>
    </nav>
    <aside>
        <p>maj 2019 r.</p>
    </aside>
    <main>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
            $polaczenie=mysqli_connect('localhost','root','','prognoza');
            $sql="select * from pogoda where miasta_id = 1 order by data_prognozy asc;";
            $wynik=mysqli_query($polaczenie,$sql);
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                $data_prognozy=$wiersz['data_prognozy'];
                $temperatura_noc=$wiersz['temperatura_noc'];
                $temperatura_dzien=$wiersz['temperatura_dzien'];
                $opady=$wiersz['opady'];
                $cisnienie=$wiersz['cisnienie'];
                echo "<tr>
                <td>$data_prognozy</td>
                <td>$temperatura_noc</td>
                <td>$temperatura_dzien</td>
                <td>$opady</td>
                <td>$cisnienie</td>
                </tr>
                ";
            }
            mysqli_close($polaczenie);
            
            ?>
        </table>
</main>
<article>
<img src="obraz.jpg" alt="Polska,Wrocław">
</article>
<section>
<a href="Nowy dokument tekstowy.txt" download>Pobierz kwerendy</a>
</section>
<footer>
    <p>Stronę wykonał:12131213</p>
</footer>
</body>
</html>