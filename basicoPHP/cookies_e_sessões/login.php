<?php
session_start();

// Verifica se há uma sessão ativa ou cookie salvo
if (isset($_SESSION['user']) || (isset($_COOKIE['usuario']) && isset($_COOKIE['senha']))) {
    header("Location: inicial.php");
    exit;
}

// Mensagens da sessão
$mensagem = '';
if (isset($_GET['erro'])) {
    $mensagem = "Usuário e/ou senha inválidos";
}
if (isset($_GET['logout'])) {
    $mensagem = "Sessão finalizada com sucesso!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<p>Bem vindo!<br>Entre com suas credenciais para acessar o sistema</p>
<p style="color:red;"><?php echo $mensagem; ?></p>

<form action="processa_login.php" method="post">
    <label>Usuário: <input type="text" name="usuario"></label><br>
    <label>Senha: <input type="password" name="senha"></label><br>
    <label><input type="checkbox" name="lembrar"> Lembrar usuário/senha</label><br><br>
    <input type="submit" value="Entrar">
</form>

</body>
</html>
