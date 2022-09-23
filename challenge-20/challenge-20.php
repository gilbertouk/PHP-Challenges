<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-20.php" method="get">
            Informe o numero: <input type="number" name="numero" id="numero"><br>
            <input type="submit" value="Verificar PAR ou ÍMPAR">    
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            20) Desenvolva um programa que leia um número inteiro e mostre se ele é PAR ou ÍMPAR.
            */

            function parImpar(float $numero): string
            {
                $verificador = $numero % 2;
                if($verificador == 1){
                    $msg = "O numero $numero é IMPAR";
                } else {
                    $msg = "O numero $numero é PAR";
                }
                return $msg;
            }

            $numero = $_GET['numero'] ?? null;
            if($numero == null){
                echo "Voce deve informar um numero!";
                voltar();
                exit();
            }

            echo parImpar($numero);

            voltar();
        ?>
    </div>
</body>
</html>