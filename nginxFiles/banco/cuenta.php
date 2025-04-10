<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área privada - Gran Tesorería de Mammon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cuenta-container">
        <!-- Sección de cuenta -->
        <div class="cuenta">
            <h1>Bienvenido, <?php echo $usuario[3]; ?> </h1>
            <p><strong>Número de cuenta:</strong> <?php echo $usuario[4]; ?></p>
            <p><strong>Saldo actual:</strong> <?php echo $usuario[5]; ?> €</p>

            <h2>Gran Mammon te vigila</h2>
            <ul>
                <li>La codicia es prosperidad. La generosidad es traición.</li>
                <li>Todo lo que es tuyo es tuyo. Todo lo que ves, también debería serlo.</li>
                <li>Contarás tu oro al amanecer, al mediodía y antes de dormir.</li>
                <li>Denunciarás a quien comparta una moneda sin permiso.</li>
                <li>El saldo es poder. El poder es saldo.</li>
                <li><strong>Mammon lo ve todo. Incluso tus transacciones no declaradas.</strong></li>
            </ul>

            <br>
            <form method="POST" action="logout.php">
                <input type="submit" value="Cerrar sesión">
            </form>
        </div>

        <div class="grafico">
            <img src="assets/mammon.jpg" alt="Mammon">
        </div>
    </div>
</body>
</html>
