<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../__css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-2.php" method="GET">
            Qual é o seu nome? <input type="text" name="nome" id="nome"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            2) Faça um programa que leia o nome de uma pessoa e mostre uma mensagem de boasvindas
            para ela:
            Ex:
            Qual é o seu nome? João da Silva
            Olá João da Silva, é um prazer te conhecer!
            */
            $name = $_GET['nome'] ?? null;

            if($name == null || $name == ""){
                echo "Informe seu nome!";
            } else {
                echo "Olá $name, é um prazer te conhecer!";
            }

            voltar();
        ?>
    </div>
</body>
</html>