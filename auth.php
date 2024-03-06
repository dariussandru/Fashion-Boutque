<?php
// Verifică dacă s-au trimis date prin POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifică credențialele (aici poți avea o listă fixă de utilizatori și parole, de exemplu)
    $valid_users = array(
        "user1" => "password1",
        "user2" => "password2"
    );

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifică dacă utilizatorul există și parola este corectă
    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        // Setează un cookie pentru a marca utilizatorul ca fiind autentificat
        setcookie("authenticated_user", $username, time() + (86400 * 30), "/"); // Valabil pentru 30 de zile
        header("Location: dashboard.php"); // Redirectează către pagina protejată
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>
