<section>
    <h2>Variáveis em PHP</h2>
    <p>Váriaveis são espaços na memória do computador que armazenam valores que podem ser alterados durante a execução de um programa. Em PHP, as variáveis são representadas pelo símbolo "$" seguido do nome da variável. Por exemplo, $nome = "Weslley";</p>

    <?php
        $nome = "Weslley";
        $idade = 30;
        $altura = 1.75;
        $estaGordo = true;

        echo "Meu nome é $nome, tenho $idade anos, minha altura é $altura metros e estou gordo? " . ($estaGordo ? "Sim" : "Não") . ".";
    ?>
</section>