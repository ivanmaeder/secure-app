<?php

if (isset($_POST["user"], $_POST["pass"])) { //if form enviado
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if ($user == "ivan" && $pass == "1234") {
        echo "Bien!!!!!";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Aplicación segura</title>
  </head>
<body>
  <form action="" method="post">
    <input type="text" name="user" placeholder="Usuario"><br>
    <input type="password" name="pass" placeholder="Contraseña"><br>
    <input type="submit" value="Entrar">
  </form>
</body>
</html>