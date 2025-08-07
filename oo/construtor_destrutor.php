<?php 
    
    class Pessoa{
        public $nome = null;

        function __contruct($nome){
            echo 'Objeto Iniciado';
            $this->nome = $nome;
        }
        
        function ___destruct(){
            echo 'Objeto Removido';

        }

        function __get($atributo){
            return $this->atributo;
        }

        function correr(){
            return "$this->__get('nome') está correndo";
        }
    }
    
    $pessoa = new Pessoa('Jorge');

    echo "<br> Nome: $pessoa->__get('nome')";
    echo "<br> Nome: $pessoa->correr()";

    // destruir objeto
    // unset($pessoa)
?>