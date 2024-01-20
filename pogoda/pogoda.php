<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <header>
        <div id="lewy">
            <img src="logo.png" alt="meteo">
        </div>
        <div id="srodkowy">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div id="prawy">
            <p>maj, 2019 r.</p>
        </div>
    </header>

    <main>
        <div id="glowny">
            <table>
                <tr>
                    <th>DATA</th>
                    <th>TEMPERATURA W NOCY</th>
                    <th>TEMPERATURA W DZIEŃ</th>
                    <th>OPADY [mm/h]</th>
                    <th>CIŚNIENIE [hPa]</th>
                </tr>
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'baza2');

                $qrr = "SELECT * FROM `pogoda` WHERE `miasta_id` = 1 ORDER BY `data_prognozy` ASC;";

                $res = mysqli_query($conn, $qrr);

                while ($row = mysqli_fetch_assoc($res)) {
                    echo <<<LABEL
                        <tr>
                            <td>$row[data_prognozy]</td>
                            <td>$row[temperatura_noc]</td>
                            <td>$row[temperatura_dzien]</td>
                            <td>$row[opady]</td>
                            <td>$row[cisnienie]</td>
                        </tr>
                    LABEL;
                }

                mysqli_close($conn);
                ?>
            </table>
        </div>
        <div id="lewy1">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </div>
        <div id="prawy1">
            <a href="kwerendy.txt" download="kwerendy">Pobierz kwerendy</a>
        </div>
    </main>

    <footer>
        <p>Stronę wykonał: Jan Kupczyk</p>
    </footer>
</body>

</html>