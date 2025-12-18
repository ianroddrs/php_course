<?php

    $objeto = null;

    $objeto?->total();


    class Funcionario{
        public function __construct(
            private string $nome = "",
            private float $salario = 0
        ){}

        public function info(){
            return "Nome: $this->nome - Salário: $this->salario";
        }
    }

    class FolhaPagamento {

        private $funcionarios = null;

        public function __construct(){
            $this->funcionarios = [
                new Funcionario('Maria', 1200),
                new Funcionario('Fernando', 3555),
                new Funcionario('Ana', 2344),
                new Funcionario('Paulo', 23465)
            ];
        }

        public function getTotalFuncionarios() {
            return count($this->funcionarios);
        }

        public function getFuncionario(){
            return $this->funcionarios[5];
        }
    }

    $folhaPagamento = new FolhaPagamento();

    echo $folhaPagamento?->getTotalFuncionarios();
    echo "<hr>";
    print_r($folhaPagamento?->getFuncionario()?->info());
?>