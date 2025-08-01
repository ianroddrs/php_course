<?php

    // modelo
    class Funcionario {
        
        // atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


        // getters setters (overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        /*
        // getters setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getTelefone(){
            return $this->telefone;
        }
        */

        // métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s) e seu telefone é: $this->telefone";
        }

        function modificarNumFilhos($numFilhos){  
            // afetar um atributo
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    $x = new Funcionario();

    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);

    echo $y->__get('nome');

    // $y->setNome('José');
    // $y->setNumFilhos(2);
    // $y->settelefone(556372902);
    // echo $y->resumirCadFunc();
    // echo '<br>';
    
    // $x->modificarNumFilhos(6);
    // echo $x->resumirCadFunc();
    // echo '<br>';
    
?>