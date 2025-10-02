<?php

    class MinhaExceptionCustomizada extends Exception{
        private $erro = '';


        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemDeErroCustomizada(){
            echo '<div style="background-color: red; color: white; padding: 15px">';
                echo $this->erro;
            echo '</div>';
        }
    }   

    try{
        
        // $sql = 'SELECT * FROM CLIENTES';
        // mysql_query($sql);

        echo '<h3>Try</h3>';

        if(!file_exists('require_arquivo_a.php')){
            throw new Exception('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') . ' mas não foi encontrado');
            // throw new Error('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') . ' mas não foi encontrado');
        }
        
    } catch(Error $e){
        echo '<h3>Error</h3>';
        echo "<p style='color:red'>$e</p>";
    } catch(Exception $e){
        echo '<h3>Exceção</h3>';
        echo "<p style='color:red'>$e</p>";

    }finally{
        echo '<h3>Finally</h3>';
    }


    echo '<hr>';

    try{
        throw new MinhaExceptionCustomizada('Erro de teste');

        // Error (php)
        // Exception (programadores)
        // Customizados (programadores)
        
    }catch(MinhaExceptionCustomizada $e){
        echo '<h3>Error</h3>';
        $e->exibirMensagemDeErroCustomizada();
    }


?>
