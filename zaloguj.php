<?php
session_start ();
$polaczenie = mysqli_connect('localhost', 'root', '', 'komis');

if (!$polaczenie) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login']) && isset($_POST['haslo'])) {
    $login = $_POST['login'];
    $password = $_POST['haslo'];

    if (empty($login) || empty($password)) {
        echo "Wypełnij wszystkie pola.";
    } else {
        // Sprawdzanie danych logowania
        $sql = "SELECT id, login, haslo FROM uzytkownicy WHERE login = '$login'";
        $wynik = mysqli_query($polaczenie, $sql);

        if ($wynik) {
            if (mysqli_num_rows($wynik) > 0) {
                $wiersz = mysqli_fetch_assoc($wynik);

                // Sprawdzanie hasła
                if (password_verify($password, $wiersz['haslo'])) {
                    echo "Logowanie udane. Witaj, " . $wiersz['login'] . "!";
					header ('Location:operacje.php');

                    $_SESSION['zalogowany'] = true;
                    $_SESSION['user_id'] = $wiersz['id'];
                    $_SESSION['user_login'] = $wiersz['login'];
                } else {
                    echo "Błędne hasło.";
                }
            } else {
                echo "Brak użytkownika o podanym loginie.";
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($polaczenie);
        }
    }
}

mysqli_close($polaczenie);
?>