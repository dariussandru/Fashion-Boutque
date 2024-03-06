<?php
// Verifică dacă utilizatorul este autentificat
if (!isset($_COOKIE["authenticated_user"])) {
    header("Location: login.html"); // Redirectează către pagina de autentificare
    exit();
}

// Afisează conținutul paginii protejate
echo "Welcome, " . $_COOKIE["authenticated_user"] . "!";
?>
