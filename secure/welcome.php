<?php

session_start();

$user = "";

if (isset($_SESSION["usuario_autorizado"])) {
    $user = $_SESSION["usuario_autorizado"];
}

if ($user == "" || $user != "ivan") {
    header("Location: http://localhost/");
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Página welcome.php</title>
  </head>
<body>
  <h1>¡Bienvenido!</h1>
  <p>Esta es una página con acceso restringido.</p>
</body>
</html>