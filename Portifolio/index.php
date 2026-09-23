<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Weslley Henrique Vieira Ferraz</h1>
        <p>Estou reaprendendo PHP da maneira correta.</p>
    </header>
    <main>
        <h2>Fundamentos de PHP</h2>
        <nav>
            <ul>
                <li><a href="?page=variaveis">Variáveis</a></li>
                <li><a href="?page=operadores">Operadores</a></li>
                <li><a href="?page=condicional">Condicional</a></li>
                <li><a href="?page=array">Arrays</a></li>
                <li><a href="?page=funcoes">Funções</a></li>
            </ul>
        </nav>
    <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page === 'variaveis') {
                include 'fundamentos/variaveis.php';
            } elseif ($page === 'operadores') {
                include 'fundamentos/operadores.php';
            } elseif ($page === 'condicional') {
                include 'fundamentos/condicional.php';
            } elseif ($page === 'array') {
                include 'fundamentos/array.php';
            } elseif ($page === 'funcoes') {
                include 'fundamentos/funcoes.php';
            } else {
                echo "<p>Página não encontrada.</p>";
            }
        } else {
            echo "<p>Bem-vindo ao meu portfólio! Selecione um tópico acima para aprender mais sobre PHP.</p>";
        }
    ?>
</body>
</html>
