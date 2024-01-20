<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
<header>
    <h2>MÓJ ORGANIZER</h2>
</header>
<nav>
    <form action="organizer.php" method="post">
        <label>Wpis wydarzenia:</label><input type='text' name='wpis'>
        <input type="submit" value="ZAPISZ" name='wyslij'>
    </form>
        <?php
        $polaczenie=mysqli_connect('localhost','root','','egzamin6');
        if(isset($_POST['wyslij']))
        {
        $wpis=$_POST['wpis'];
        $sql="UPDATE zadania set wpis='$wpis' WHERE dataZadania='2020-08-27'";
        $wynik=mysqli_query($polaczenie,$sql);
        }
        ?>
</nav>
<aside>
    <img src="logo2.png" alt="Mój organizer">
</aside>
<main>
    <?php
            $polaczenie=mysqli_connect('localhost','root','','egzamin6');
            $sql1="select dataZadania,miesiac,wpis from zadania where miesiac='sierpien';";
            $wynik=mysqli_query($polaczenie,$sql1);
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                $datazadania=$wiersz['dataZadania'];
                $miesiac=$wiersz['miesiac'];
                $wpis=$wiersz['wpis'];
                echo "<section class='dane'>
                <h6>$datazadania,$miesiac</h6>
                <p>$wpis</p>
                </section>";
            }
            mysqli_close($polaczenie);
    ?>
</main>
<footer>
    <?php
            $polaczenie=mysqli_connect('localhost','root','','egzamin6');
            $sql2="select miesiac,rok from zadania where dataZadania='2020-08-01';";
            $wynik2=mysqli_query($polaczenie,$sql2);
            while($wiersz2=mysqli_fetch_assoc($wynik2))
            {
                $miesiac=$wiersz2['miesiac'];
                $rok=$wiersz2['rok'];
                echo "<h1>miesiąc: $miesiac,rok: $rok</h1>";
            }

            mysqli_close($polaczenie);
    ?>
    <p>Stronę wykonał: 12123212</p>
</footer>
</body>
</html>