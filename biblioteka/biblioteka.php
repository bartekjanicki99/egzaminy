<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </header>
    <aside>
        <h3>Polecamy dzieła autorów</h3>
        <ol>
            <?php
            $polaczenie=mysqli_connect('localhost','root','','biblioteka');
            $sql="SELECT imie,nazwisko from autorzy order BY nazwisko asc;";
            $wynik=mysqli_query($polaczenie,$sql);
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                $imie=$wiersz['imie'];
                $nazwisko=$wiersz['nazwisko'];
                echo "<li>$imie $nazwisko</li>";
            }
            mysqli_close($polaczenie);
            ?>
        </ol>
    </aside>
    <main>
        <h3>ul. Czytelnicza 25, Książkowice&nbsp;Wielkie</h3>
        <p><a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a></p>
        <img src="biblioteka.png" alt="książki">
    </main>
    <nav>
        <form action="biblioteka.php" method="post">
            <label>imie: </label><input type="text" name="imie" id="">
            <br>
            <label>nazwisko: </label><input type="text" name="nazwisko" id="">
            <br>
            <label>symbol: </label><input type="number" name="symbol" id="">
            <br>
            <input type="submit" value="DODAJ" name="dodaj">
        </form>
    </nav>
    <section>
        <?php
            $polaczenie=mysqli_connect('localhost','root','','biblioteka');
            if(isset($_POST['dodaj']))
            {
            $imieinput=$_POST['imie'];
            $nazwiskoinput=$_POST['nazwisko'];
            $symbol=$_POST['symbol'];
            if(!empty($imieinput) && !empty($nazwiskoinput) && !empty($symbol))
            {
            $sql2="INSERT INTO czytelnicy VALUES('','$imieinput','$nazwiskoinput',$symbol);";
            $wynik2=mysqli_query($polaczenie,$sql2);
            if($wynik2)
            {
                echo "<span>Czytelnik $imieinput $nazwiskoinput został(a) dodany do bazy danych</span>"; 
            }
            }
            }
            mysqli_close($polaczenie);            
        ?>
    </section>
    <footer>
        <p>Projekt strony: 04272701498</p>
    </footer>
</body>
</html>