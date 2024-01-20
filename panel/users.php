<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel='stylesheet' href='styl4.css'>
</head>
<body>
<header>
    <h3>Portal Społecznościowy - panel administratora</h3>
</header>
<main>
    <h4>Użytkownicy</h4>
    <?php
    $polaczenie=mysqli_connect('localhost','root','','dane4');
    $sql="select id,imie,nazwisko,rok_urodzenia,zdjecie from osoby limit 30;";
    $wynik=mysqli_query($polaczenie,$sql);
    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        $id=$wiersz['id'];
        $imie=$wiersz['imie'];
        $nazwisko=$wiersz['nazwisko'];
        $rok_urodzenia=$wiersz['rok_urodzenia'];
        $wiek='2023'-$rok_urodzenia;
       echo "$id. $imie $nazwisko, $wiek lat
       
       <br>";
    }
    mysqli_close($polaczenie);
    ?>
    <a href="settings.html">Inne ustawienia</a>
</main>
<aside>
    <h4>Podaj id użytkownika</h4>
    <form method="post" action="">
        <input type="number" name="id">
        <input type="submit" value="ZOBACZ" name="przycisk" id="przycisk">
    </form>
    <hr>
    <?php
    $polaczenie=mysqli_connect('localhost','root','','dane4');
    if(isset($_POST['id']))
    {
    $idinput=$_POST['id'];
    
    $sql2="select imie,nazwisko,rok_urodzenia,opis,zdjecie,hobby.nazwa from osoby inner join hobby on osoby.Hobby_id=hobby.id where osoby.id=$idinput";
    $wynik2=mysqli_query($polaczenie,$sql2);
    while($wiersz2=mysqli_fetch_assoc($wynik2))
    {
    $imie=$wiersz2['imie'];
    $nazwisko=$wiersz2['nazwisko'];
    $zdjecie=$wiersz2['zdjecie'];
    $rok_urodzenia=$wiersz2['rok_urodzenia'];
    $opis=$wiersz2['opis'];
    $nazwa=$wiersz2['nazwa'];
    echo "<h2> 
    $idinput.  $imie $nazwisko

    </h2>";
    echo "
    <img src='$zdjecie' alt='$idinput'>
    ";
    echo "<p>
        Rok urodzenia: $rok_urodzenia
    </p>";
    echo "<p>
        Opis: $opis
    </p>";
    
    echo "<p>
    Hobby: $nazwa
</p>";
}
    }
mysqli_close($polaczenie);
    ?>
</aside>
<footer>
    Stronę wykonał: 1212241424
</footer>
</body>
</html>