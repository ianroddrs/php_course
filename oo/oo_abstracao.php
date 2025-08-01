<?php

    // modelo
    class Funcionario {
        
        // atributos
        public $nome = 'José';
        public $telefone = 919192933;
        public $numFilhos = 3;

        // métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos){  
            // afetar um atributo
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();

    echo $y->resumirCadFunc();
    echo '<br>';
    
    $y->modificarNumFilhos(6);
    echo $y->resumirCadFunc();
    echo '<br>';
    
?>