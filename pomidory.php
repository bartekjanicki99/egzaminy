<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomidorksy PHP</title>
</head>
<body>
    <form action="pomidory.php" method="post">
    <label>WPISZ KOLOR</label><input type="text" name="kolor">
    <label>WPISZ KSMAK</label><input type="text" name="smak">
    <input type="submit" value="wyslij" name='wyslij'>
    </form>
<?php
$polaczenie=mysqli_connect('localhost','root','','essa');
$sql="SELECT * FROM pomidory;";
$wynik=mysqli_query($polaczenie,$sql);
echo '<table border="1px" style="border-collapse:collapse;">
<th>id</th>
<th>kolor</th>
<th>smak</th>';
while($wiersz=mysqli_fetch_assoc($wynik))
{
    $id=$wiersz['id'];
    $kolor=$wiersz['kolor'];
    $smak=$wiersz['smak'];
    echo "<tr>
    <td>$id</td>
    <td>$kolor</td>
    <td>$smak</td>

    </tr>";

}
echo '</table>';


if (isset($_POST['wyslij']))
{
    $wyslij=$_POST['wyslij'];
if (!empty($_POST['kolor']) && !empty($_POST['smak']))
{  
    $kolor=$_POST['kolor'];
    $smak=$_POST['smak'];

    $sql2="INSERT INTO pomidory VALUES('','$kolor','$smak');";
    if(mysqli_query($polaczenie,$sql2))
    {
    header("location:pomidory.php");
    echo "WPISANO POMIDORA DO BAZY";
    }
    else {
        echo "nie ma polaczenia z baza";
    }
}
else {
    echo "wypełnij wszystkie pola wariat nie przesadzaj";
}
}
else {
    echo "wypelnij formularz";
}

mysqli_close($polaczenie);
?>
</body>
</html>