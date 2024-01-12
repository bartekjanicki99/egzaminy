<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piłka nożna</title>
    <link rel='stylesheet' href='styl2.css'>
</head>
<body>
<header>
    <h3>Reprezentacja polski w piłce nożnej</h3>
    <img src="obraz1.jpg" alt="reprezentacja">
</header>
<aside>
<form action="" method="post">
    <select name='lista'>
        <option value="1">Bramkarze</option>
        <option value="2">Obrońcy</option>
        <option value="3">Pomocnicy</option>
        <option value="4">Napastnicy</option>
    </select>
    <input type="submit" name="Zobacz" value="Zobacz">
</form>
<img src="zad2.png" alt="piłka">
<p>Autor:04272701498</p>
</aside>
<nav>
<ol>
    <?php
    $polaczenie=mysqli_connect('localhost','root','','egzamin');

    
    if (isset($_POST['Zobacz']))
    {
    if (isset($_POST['lista']))
    {
    $lista=$_POST['lista'];
    $sql="select imie,nazwisko from zawodnik where pozycja_id=$lista;";
    $wynik=mysqli_query($polaczenie,$sql);
    while($wiersz=mysqli_fetch_array($wynik))
    {
        $imie=$wiersz['imie'];
        $nazwisko=$wiersz['nazwisko'];
        echo "<li>
        <p>$imie $nazwisko</p>
        </li>";
    }
    }
    }
    mysqli_close($polaczenie);
    ?>
</ol>
</nav>
<main>
<h3>Liga mistrzów</h3>
<?php
    $polaczenie=mysqli_connect('localhost','root','','egzamin');
    $sql2="select zespol,punkty,grupa from liga order by punkty desc;";
    $wynik2=mysqli_query($polaczenie,$sql2);
    while($wiersz=mysqli_fetch_array($wynik2))
    {
        $zespol=$wiersz['zespol'];
        $punkty=$wiersz['punkty'];
        $grupa=$wiersz['grupa'];
        echo "<section class='elo'>
        <h2>$zespol</h2>
        <h1>$punkty</h1>
        <p>grupa: $grupa</p>
        </section>";
    }
    
    
    mysqli_close($polaczenie);
    $liczba=5.25;
    $wynik=($liczba*3)/2;
    echo "$wynik ".'W zaokrągleniu:'.round($wynik,2);
    $tab=['siema','elo','555'];
    $tabnatekst=implode(" ",$tab);
    echo "$tabnatekst";
    $tekst="raz dwa trzy";
    $tekstnatab=explode(" ",$tabnatekst);
    echo $tekstnatab[0];
    $duzelitery=strtoupper($tekst);
    echo $duzelitery;
    ?>
    
</main>

</body>
</html>