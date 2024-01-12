<html>
<head><meta charset="utf-8">
</head>
<body>
<form method='post'>
login: <input type="text" name="login"><br>
hasło: <input type="password" name="haslo"><br>
<input type="submit" value="zaloguj">
</form>
<?php

$polaczenie=mysqli_connect('localhost','root','','stoly');

if (isset($_POST['login']) && isset($_POST['haslo']))
{
    $login=$_POST['login'];
    $haslo=$_POST['haslo'];
    $haslo_szyfr=sha1($haslo);
    $sql=mysqli_query($polaczenie,'select * from dane;');
while($wiersz=mysqli_fetch_assoc($sql))
{
    $loginbaza=$wiersz['login'];
    $haslobaza=$wiersz['haslo'];
}
    
if ($loginbaza==$login)
{
    print("poprawny login");
        if($haslobaza==$haslo_szyfr)
        {
            header("location:elostoly.php");
        }   
        else {
            echo "<br>";
            echo "Błędne hasło";
        }

}
else {
    print("bledny login ");
}
}
else {
    print("wypelnij pola");
}

?>
</body>
</html>