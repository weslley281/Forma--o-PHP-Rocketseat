<section>
    <h2>Arrays</h2>
    <p>Arrays são estruturas de dados que permitem armazenar múltiplos valores em uma única variável.</p>

    <?php
        $frutas = ["maçã", "banana", "laranja", "uva"];
        echo "<p>Frutas disponíveis: " . implode(", ", $frutas) . "</p>";

        $idades = [
            "João" => 25,
            "Maria" => 30,
            "Pedro" => 20
        ];
        echo "<p>Idades: João tem {$idades['João']} anos, Maria tem {$idades['Maria']} anos e Pedro tem {$idades['Pedro']} anos.</p>";

        $numeros = [1, 2, 3, 4, 5];
        $soma = array_sum($numeros);

        echo "<p>A soma dos números é: $soma</p>";

        foreach ($numeros as $numero) {
            $numero *= 2; // Multiplica cada número por 2
            echo "<p>Número: $numero</p>";
        }
        ?>
</section>