<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-7.php" method="get">
            Informe o numero: <input type="text" name="numero" id="numero"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            7) Crie um algoritmo que leia um número real e mostre na tela o seu dobro e a
            sua terça parte.
            Ex:
            Digite um número: 3.5
            O dobro de 3.5 é 7.0
            A terça parte de 3.5 é 1.16666
            */
            $numero = $_GET['numero'] ?? 0;
            if (!is_numeric($numero) || $numero == null) {
                echo "Voce deve informa um numero!";
            } else {
                echo "O dobro de $numero é " . number_format($numero * 2,1) . "<br>";
                echo "A terça parte de $numero é " . number_format($numero / 3, 5);
            }
            voltar();
        ?>
    </div>
</body>
</html>