<?php
session_start();

$admin = "admin";
$senha = "123456";

$usuario = $_POST['usuario'] ?? '';
$senhaForm = $_POST['senha'] ?? '';
$lembrar = isset($_POST['lembrar']);

if ($usuario === $admin && $senhaForm === $senha) {
    $_SESSION['user'] = true;

    // Se a opção "lembrar" estiver marcada
    if ($lembrar) {
        setcookie("usuario", $usuario, time() + (86400 * 7), "/");
        setcookie("senha", $senhaForm, time() + (86400 * 7), "/");
    }

    header("Location: inicial.php");
    exit;
} else {
    header("Location: login.php?erro=1");
    exit;
}
