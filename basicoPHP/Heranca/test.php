<?php
include_once 'Dados.class.php'; // Deve ser incluído primeiro
include_once 'CDs.class.php';
include_once 'DVDs.class.php';
include_once 'Livros.class.php';
include_once 'Revistas.class.php';

$cd = new CDs("Rock", 12, "CD001", "Greatest Hits", "2023-01-10", "Autor A");
$dvd = new DVDs("Filme", "Aventura épica", "DVD001", "A Grande Jornada", "2022-05-15", "Diretor X");
$livro = new Livros("Editora XPTO", 2020, "LIV001", "O Senhor dos Exemplos", "2021-09-21", "Autor B");
$revista = new Revistas(2023, 10, "Editora ABC", "Ciência", "REV001", "Ciência Hoje", "2024-02-01", "Vários autores");

echo "<h2>Dados do CD:</h2>";
echo $cd->Imprimir();  

echo "<h2>Dados do DVD:</h2>";
echo $dvd->Imprimir();  

echo "<h2>Dados do livro:</h2>";
echo $livro->Imprimir();  

echo "<h2>Dados da revista:</h2>";
echo $revista->Imprimir();  
?>
