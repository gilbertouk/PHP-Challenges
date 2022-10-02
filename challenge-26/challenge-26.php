<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-26.php" method="get">
            Informe o primeiro Valor: <input type="number" name="valorA" id="valorA"><br>
            Informe o segundo Valor: <input type="number" name="valorB" id="valorB"><br>
            <input type="submit" value="Comparar valores">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            * 26) Escreva um algoritmo que leia dois números inteiros e compare-os, mostrando
            * na tela uma das mensagens abaixo:
            * - O primeiro valor é o maior
            * - O segundo valor é o maior
            * - Não existe valor maior, os dois são iguais
            */
            voltar();
        ?>
    </div>
</body>
</html>