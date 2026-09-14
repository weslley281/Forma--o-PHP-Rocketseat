<section>
    <h2>Condicional em PHP</h2>
    <p>Os operadores condicionais em PHP permitem que você execute diferentes blocos de código com base em condições específicas. Os principais operadores condicionais são o if, else if e else.</p>

    <?php
        $nota = [
            "semestre1" => 8,
            "semestre2" => 7,
            "semestre3" => 9,
            "semestre4" => 6,
            "semestre5" => 10,
            "semestre6" => 5,
            "semestre7" => 8,
            "semestre8" => 6
        ];

        $media = array_sum($nota) / count($nota);

        if ($media >= 7) {
            echo "<p>Parabéns! Você foi aprovado com média $media.</p>";
        } elseif ($media >= 5) {
            echo "<p>Você está de recuperação com média $media.</p>";
        } else {
            echo "<p>Infelizmente, você foi reprovado com média $media.</p>";
        }
    ?>
</section>