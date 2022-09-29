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
            Informe o Ano que deseja verificar: <input type="number" name="ano" id="ano"><br>
            <input type="submit" value="Verificar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            21) Faça um algoritmo que leia um determinado ano e mostre se ele é ou não
            BISSEXTO.
            */

            function verificaAnoBissexto(int $ano): string
            {
                if (($ano % 4) == 0 && ($ano % 100) <> 0) {
                    $mensagem = "O ano de $ano é BISSEXTO. <br>";
                } elseif ($ano % 400 == 0) {
                    $mensagem = "O ano de $ano é BISSEXTO. <br>";
                } else {
                    $mensagem = "O ano de $ano não é BISSEXTO. <br>";
                }
                return $mensagem;
            }

            $ano = $_GET['ano'] ?? 0;

            echo verificaAnoBissexto($ano);

            voltar();
        ?>
    </div>
</body>
</html>