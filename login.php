<?php
session_start();

// Sprawdź, czy dane logowania zostały przesłane
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sprawdź poprawność danych logowania (tutaj można dodać logikę weryfikacji, np. w bazie danych)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Przykładowa weryfikacja
    if ($username === 'admin' && $password === 'password') {
        // Zalogowano pomyślnie
        $_SESSION['logged_in'] = true;
        // Przekieruj na stronę po zalogowaniu
        header('Location: dashboard.php');
        exit();
    } else {
        // Nieprawidłowe dane logowania
        echo 'Invalid username or password';
    }
}
?>
