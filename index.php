<?php require_once '__includes/funcoes.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="__css/estilo.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Challenges</title>
</head>
<body>
    <div>
    <?php 
        $numChallenges = 100;
        echo "<h4>Selecione abaixo a lista de exercicios que quer acessar.</h4>";
        for ($i=1; $i <= $numChallenges; $i++) { 
            echo "<a href='challenge-$i/challenge-$i.php'>Challenge - $i</a><br>";
        }        
    ?>   
    </div> 
</body>
</html>