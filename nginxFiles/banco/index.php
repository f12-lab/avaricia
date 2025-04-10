<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servidor = "mysql";
    $usuario_db = "root";
    $clave = "root";
    $db = "banco";

    $user = $_POST['usuario'];
    $pass = $_POST['password'];

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario_db, $clave);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = "SELECT * FROM usuarios WHERE usuario = '$user' AND password = '$pass'";
        $result = $conexion->query($consulta);

        if ($result && $result->rowCount() > 0) {
            $usuario_info = $result->fetch(PDO::FETCH_NUM);
            $_SESSION['usuario'] = $usuario_info;
            header("Location:cuenta.php");
        } else {
            echo "Credenciales incorrectas";
        }

    } catch (PDOException $exception) {
        echo "Fallo en la conexión: " . $exception->getMessage();
    }

    $conexion = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gran Tesorería de Mammon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <label for="usuario">Usuario:</label> 
        <input type="text" id="usuario" name="usuario">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>


