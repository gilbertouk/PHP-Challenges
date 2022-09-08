<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../__css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Challenges</title>
</head>
<body>
    <div>    
        <form action="challenge-4.php" method="get">
            Primeiro numero: <input type="text" name="n1" id="n1" size="10" maxlength="10"><br>
            Segundo numero: <input type="text" name="n2" id="n2" size="10" maxlength="10"><br>
            <input type="submit" value="Somar">
        </form>
    
        <?php
            require_once '../__includes/funcoes.php';
            /*
            4) Desenvolva um algoritmo que leia dois números inteiros e mostre o somatório
            entre eles.
            Ex:
            Digite um valor: 8
            Digite outro valor: 5
            A soma entre 8 e 5 é igual a 13.            
            */

            $n1 = $_GET['n1'] ?? 0;
            $n2 = $_GET['n2'] ?? 0;
            if($n1 == null || $n2 == null){
                echo "Informe os numeros para realizar a soma!";
            } else {
                $soma = $n1 + $n2;
                echo "A soma entre $n1 e $n2 é igual a $soma.";
            }
            
            voltar();
        ?>
    </div>
</body>
</html>