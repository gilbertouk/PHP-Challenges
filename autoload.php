<?php
    /*
    spl_autoload_register(function (string $nomeCompletoDaClasse){
        $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
        $caminhoArquivo .= '.php';
        //echo $caminhoArquivo;
        //exit();
        if(file_exists($caminhoArquivo)){
            require_once $caminhoArquivo;
        } else {
            echo "Arquivo da classe nao encontrado no caminho $caminhoArquivo";
            exit();
        }
    });
    */
    
    function exibir (){        
        for($i=1; $i <= $100; $i++) { 
            $caminhoArquivo = 'challenge-'. $i . '\\challenge-' . $i . '.php';
            $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
            
            if(file_exists($caminhoArquivo)){
                echo "<a href='$caminhoArquivo'>Challenge - $i</a><br>";
            } else {
                echo "Arquivo da classe nao encontrado no caminho $caminhoArquivo";
                exit();
            }          
        }
    }
?>