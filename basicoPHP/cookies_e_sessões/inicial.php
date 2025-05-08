<?php
session_start();

// Verifica se o usuário está logado via sessão ou cookies
if (!isset($_SESSION['user'])) {
    if (!(isset($_COOKIE['usuario']) && isset($_COOKIE['senha']) && $_COOKIE['usuario'] === 'admin' && $_COOKIE['senha'] === '123456')) {
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
</head>
<body>
<p>Bem vindo, admin!<br><a href="logout.php">Finalizar sessão</a></p>
</body>
</html>
