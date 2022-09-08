<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../__css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-5.php" method="get">
            Nota 1: <input type="text" name="n1" id="n1" max="10" maxlength="4"><br>
            Nota 2: <input type="text" name="n2" id="n2" max="10" maxlength="4"><br>
            <input type="submit" value="Calcular Media">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            5) Faça um programa que leia as duas notas de um aluno em uma matéria e mostre
            na tela a sua média na disciplina.
            Ex:
            Nota 1: 4.5
            Nota 2: 8.5
            A média entre 4.5 e 8.5 é igual a 6.5
            */

            $nota1 = $_GET['n1'] ?? 0;
            $nota2 = $_GET['n2'] ?? 0;
            if($nota1 == null || $nota2 == null){
                echo "Informe as notas para calcular a media!";
            } elseif ($nota1 < 0 || $nota2 < 0) {
                echo "Os valores das notas informadas nao pode ser negativos!";
            } else {
                $media = ($nota1 + $nota2) / 2;
                echo "A média entre $nota1 e $nota2 é igual a $media";
            }
            voltar();
        ?>
    </div>
</body>
</html>