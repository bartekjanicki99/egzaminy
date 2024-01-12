<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zastawy Stolowe</title>
	<link rel="stylesheet" href="maciek.css">
</head>
<body>
<section class="formularz">
<form method='post'>    
<label> Który zestaw chcesz wypożyczyc </label> <br> <br> <br>
Który zestaw chciałbyś wypożyczyć podaj ID  <br> <input type='number' name='zestaw' min='1' max='4'></input>
<br>Podaj swoje imie <br> <input type='text' name='imie'></input> <br>
Podaj swoj adres <br> <input type='text' name='adres'></input> <br>
Podaj ilosc dni <br><input type='number' name='dni' min='1'>  </input> <br>
<input type='submit' value='wypozycz' name='button'> <br>
</form>
</section>
<section class="stoly">
<?php

$conn = mysqli_connect('localhost','root','','stoly');
$sql = ("SELECT * from  zestaw");
$result = mysqli_query($conn,$sql);
while($row = $result -> fetch_assoc())
{   print("<div class='oferty'>");
    print("ID: " . $row['id'] . " <br> CENA: " . $row['cena'] . "<br>");
    print(" Cena za zestaw powyżej 10 dni: ". $row['cena'] - ($row['cena']*0.1).'<br>');
    print(" Cena za zestaw powyżej 29 dni: ". $row['cena'] - ($row['cena']*0.29).'<br>');
    print("<img width=300px height=300px src=$row[galeria] alt=mega_kox> <br>");
    print("</div>");
}


if(!empty($_POST['zestaw']) && !empty($_POST['imie']) && !empty($_POST['adres'])  && !empty($_POST['dni'])) 
{

    $idzestawu =@ $_POST['zestaw'];
    $imie = @$_POST['imie'];
    $adres =@ $_POST['adres'];
    $dni = @$_POST['dni'];
    $sql2=("INSERT INTO wypozyczenia (id,imie,adres,id_zestawu,dni) VALUES ('','$imie','$adres','$idzestawu','$dni'    )");
    $result2=mysqli_query($conn,$sql2);
}
else
{
    if(isset($_POST['button']))
    {
    print("Podaj wszystkie dane");
    }
}
mysqli_close($conn);
?>
</section>
</body>
</html>