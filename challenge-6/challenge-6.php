<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-6.php" method="get">
            Informe o numero: <input type="number" name="numero" id="numero"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            6) Faça um programa que leia um número inteiro e mostre o seu antecessor e seu
            sucessor.
            Ex:
            Digite um número: 9
            O antecessor de 9 é 8
            O sucessor de 9 é 10
            */
            $numero = $_GET['numero'] ?? 0;
            if($numero == null){
                echo "Informe um numero!";
            } else {
                echo "O antecessor de $numero é " . $numero - 1 . " <br>";
                echo "O sucessor de $numero é " . $numero + 1 . " <br>";
            }
            voltar();
        ?>
    </div>
</body>
</html>