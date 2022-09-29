<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-21.php" method="get">
            Informe o Ano que deseja verificar: <input type="number" name="year" id="year"><br>
            <input type="submit" value="Verificar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            21) Faça um algoritmo que leia um determinado ano e mostre se ele é ou não
            BISSEXTO.
            */

            function verificaAnoBissexto(int $year): string
            {
                if (($year % 4) == 0 && ($year % 100) <> 0) {
                    $mensagem = "O ano de $year é BISSEXTO. <br>";
                } elseif ($year % 400 == 0) {
                    $mensagem = "O ano de $year é BISSEXTO. <br>";
                } else {
                    $mensagem = "O ano de $year não é BISSEXTO. <br>";
                }
                return $mensagem;
            }

            $year = $_GET['year'] ?? 0;

            echo verificaAnoBissexto($year);

            voltar();
        ?>
    </div>
</body>
</html>