<?php

session_start();

if (!isset($_SESSION["usuario_autorizado"])) {
    header("Location: http://localhost/");
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Página config.php</title>
  </head>
<body>
  <h1>Config</h1>
  <p>Esta es una página con acceso restringido.</p>
  <ul>
    <li><a href="welcome.php">Welcome</a></li>
    <li><a href="config.php">Config</a></li>
    <li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Salir</a></li>
  </ul>
</body>
</html>
