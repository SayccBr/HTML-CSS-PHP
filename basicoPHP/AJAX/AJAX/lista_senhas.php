<?php
// Conexão ao BD
$conn = new mysqli('localhost', 'root', '', 'senha');

if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

$sql = "SELECT Nick, Senha FROM login ORDER BY Nick ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div id="tabela-senhas">';
    echo '<p>Evite as seguintes senhas</p>';
    echo '<table border="1" cellpadding="5">';
    echo '<tr><th>Senhas</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['Senha']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
} else {
    echo 'Nenhuma senha cadastrada.';
}

$conn->close();
?>