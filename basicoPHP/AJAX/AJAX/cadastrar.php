<?php
$nick = $_POST['nick'];
$senha = $_POST['senha'];

$conn = new mysqli('localhost', 'root', '', 'dbex');

if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

$sql = "INSERT INTO dbex (Nick, Senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $nick, $senha);

if($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
