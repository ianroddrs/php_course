<?php 

    class Produto {
        public string $nome = "";
        public float $valor = 0;

        public function __construct($nome, $valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    $produto = new Produto("Smartphone", 1500);

    echo "produto: " . $produto->nome;
    echo "<br>";
    echo "valor: " . $produto->valor;

?>