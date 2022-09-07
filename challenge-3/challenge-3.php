<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../__css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-3.php" method="GET">
            Nome do Funcionário: <input type="text" name="nome" id="nome"><br>
            Salário: <input type="decimal" name="salario" id="salario"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            3) Crie um programa que leia o nome e o salário de um funcionário, mostrando no
            final uma mensagem.
            Ex:
            Nome do Funcionário: Maria do Carmo
            Salário: 1850,45
            O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho.            
            */
            $nome = $_GET['nome'] ?? null;
            $salario = $_GET['salario'] ?? null;

            if($nome == null || $nome == ""){
                echo "Informe o nome!";
            } elseif ($salario == null || $salario == ""){
                echo "Informe o salario!";
            } else {
                echo "O funcionário $nome tem um salário de R$" . number_format($salario,2) . " em Junho.";
            }
            voltar();
        ?>
    </div>
</body>
</html>












