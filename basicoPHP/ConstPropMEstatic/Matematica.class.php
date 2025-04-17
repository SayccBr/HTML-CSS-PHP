<?php

class Matematica {
    public const PI = 3.14;
    public static int $utilizacoes = 0;

    public static function Soma(float $a, float $b): float {
        self::$utilizacoes++;
        return $a + $b;
    }

    public static function Subtracao(float $a, float $b): float {
        self::$utilizacoes++;
        return $a - $b;
    }

    public static function Multiplicacao(float $a, float $b): float {
        self::$utilizacoes++;
        return $a * $b;
    }

    public static function Divisao(float $a, float $b): float {
        if ($b == 0) {
            echo "Erro: divisão por zero não é permitida.\n";
            return 0; // Ou poderia lançar uma exceção
        }
        self::$utilizacoes++;
        return $a / $b;
    }
}
