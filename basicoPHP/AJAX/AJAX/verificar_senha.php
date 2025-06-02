<?php
// Conexão ao BD

$senha = $_POST['senha'] ?? '';
$nick = $_POST['nick'] ?? '';

if ($senha == '') {
    echo '';
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'dbex');

if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

$sql = "SELECT Nick FROM login WHERE Senha = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nick_db = $row['Nick'];
    echo 'Senha já existe e é do usuário:'.$nick_db; 

} else {
    echo ''; // senha não existe, sem mensagem
}

$conn->close();
?>

