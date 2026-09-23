<section>
    <h2>Funções</h2>
    <p>Funções são blocos de código que realizam uma tarefa específica e podem ser chamadas em qualquer parte do programa.</p>

    <?php
        function calcularMedia($notas) {
            return array_sum($notas) / count($notas);
        }

        $notas = [
            "semestre1" => 8,
            "semestre2" => 7,
            "semestre3" => 9,
            "semestre4" => 6,
            "semestre5" => 10,
            "semestre6" => 5,
            "semestre7" => 8,
            "semestre8" => 6
        ];

        $media = calcularMedia($notas);

        echo "<p>A média das notas é: $media</p>";

        if ($media >= 7) {
            echo "<p>Parabéns! Você foi aprovado com média $media.</p>";
        } elseif ($media >= 5) {
            echo "<p>Você está de recuperação com média $media.</p>";
        } else {
            echo "<p>Infelizmente, você foi reprovado com média $media.</p>";
        }

    ?>
</section>