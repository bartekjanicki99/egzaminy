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
    $szyfr_haslo=sha1($haslo);
    $sql="INSERT INTO dane VALUES('','$login','$szyfr_haslo');";
    if(mysqli_query($polaczenie,$sql))
    {
        header("location:logowaniestoly.php");
    }

}
else {
    print("wypelnij pola");
}

?>
</body>
</html>