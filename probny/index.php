<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaciarnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <img src="logo.jpg" alt="biały kwiat">
    <h1>kwiaciarnia orchidea</h1>
</header>
<aside>
<h3>dzisiejsze promocje</h3>
<table border='1px'>
<tr>
    <th>gatunek</th>
    <th>obniżka</th>
    <th>nowa cena</th>
</tr>
<?php
$polaczenie=mysqli_connect('localhost','root','','florists') or die ("nie ma polaczenia");
$sql3="SELECT name,price,MAX(percent_off) AS max_obnizka from flowers inner join discounts on flowers.id=discounts.flower_id where date_start<CURRENT_TIMESTAMP() and date_end>CURRENT_TIMESTAMP() group by name;  ";
$wynik3=mysqli_query($polaczenie,$sql3);
while ($wiersz3=mysqli_fetch_array($wynik3))
{
    $name=$wiersz3['name'];
    $price=$wiersz3['price'];
    $obnizka=$wiersz3['max_obnizka'];
    $nowacena=($price*(100-$obnizka)/10000);
    $zaokraglonanowacena=round($nowacena,2);
    echo "<tr>
    <td>$name</td>
    <td>$obnizka%</td>
    <td>$zaokraglonanowacena zł</td>
    </tr>";
    
}
mysqli_close($polaczenie);
?>
</table>
<a href="cennik.php">cennik</a>
</aside>
<main>
<h2>zamów kwiaty</h2>
<form action="" method="post">
    <label>gatunek kwiatów</label>
    <select name="kwiaty">
            <?php
            $polaczenie=mysqli_connect('localhost','root','','florists') or die ("nie ma polaczenia");
            $sql="select id,name from flowers; ";
            $wynik=mysqli_query($polaczenie,$sql);
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                $id=$wiersz['id'];
                $nazwa=$wiersz['name'];
                echo "<option value='$id'>
                $nazwa
                </option>";
            }
            mysqli_close($polaczenie);
            ?>
    </select>
    <br>
    <label>ilosc: </label><input type="number" name="ilosc" id=""><br>
    <label>adres: </label><input type="text" name="adres" id=""><br>
    <label>telefon: </label><input type="text" name="telefon" id=""><br>
    <input type="submit" value="zamow" name="zamow">
    <input type="reset" value="wyczyść">
    <?php
    $polaczenie=mysqli_connect('localhost','root','','florists') or die ("nie ma polaczenia");
    if(isset($_POST['zamow']))
    {   
    $ilosc=$_POST['ilosc'];
    $adres=$_POST['adres'];
    $telefon=$_POST['telefon'];
    if (!empty($ilosc) && !empty($adres) && !empty($telefon))
    {
    $sql2="INSERT INTO orders VALUES('',$id,$ilosc,' ','$adres','$telefon');";
    if(mysqli_query($polaczenie,$sql2))
    {
        echo "<p> Dodano kwiatek do bazy </p>";
    }
    }
    else {
        echo "<p> Wypełnij wszystkie pola inputowe</p>";
    }
   }
   mysqli_close($polaczenie);
    ?>

</form>
</main>
<footer>
<p>Przygotował: chujcieto</p>
</footer>
</body>
</html>