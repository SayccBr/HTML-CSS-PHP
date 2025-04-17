<?php
// Inclua os arquivos das classes
require_once 'AreaCalculavel.php';
require_once 'FiguraGeometrica.php';
require_once 'Circulo.php';
require_once 'Quadrado.php';
require_once 'Retangulo.php';
require_once 'Triangulo.php';

$circulo1 = new Circulo(5);
$circulo2 = new Circulo(7.5);
$circulo3 = new Circulo(10);

$quadrado1 = new Quadrado(4);
$quadrado2 = new Quadrado(6.2);
$quadrado3 = new Quadrado(8);

$retangulo1 = new Retangulo(3, 5);
$retangulo2 = new Retangulo(4.5, 6);
$retangulo3 = new Retangulo(7, 9.2);

$triangulo1 = new Triangulo(4, 6);
$triangulo2 = new Triangulo(5.5, 7);
$triangulo3 = new Triangulo(8, 10.5);

echo "Área do " . $circulo1->getNome() . ": " . $circulo1->calculaArea() . "<br>";
echo "Área do " . $circulo2->getNome() . ": " . $circulo2->calculaArea() . "<br>";
echo "Área do " . $circulo3->getNome() . ": " . $circulo3->calculaArea() . "<br>";

echo "Área do " . $quadrado1->getNome() . ": " . $quadrado1->calculaArea() . "<br>";
echo "Área do " . $quadrado2->getNome() . ": " . $quadrado2->calculaArea() . "<br>";
echo "Área do " . $quadrado3->getNome() . ": " . $quadrado3->calculaArea() . "<br>";

echo "Área do " . $retangulo1->getNome() . ": " . $retangulo1->calculaArea() . "<br>";
echo "Área do " . $retangulo2->getNome() . ": " . $retangulo2->calculaArea() . "<br>";
echo "Área do " . $retangulo3->getNome() . ": " . $retangulo3->calculaArea() . "<br>";

echo "Área do " . $triangulo1->getNome() . ": " . $triangulo1->calculaArea() . "<br>";
echo "Área do " . $triangulo2->getNome() . ": " . $triangulo2->calculaArea() . "<br>";
echo "Área do " . $triangulo3->getNome() . ": " . $triangulo3->calculaArea() . "<br>";
?>