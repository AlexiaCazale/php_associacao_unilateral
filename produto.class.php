<?php
    class Produto{
        
        //Fortemente tipado
        public function __construct(private string $nome = '', private string $descricao = '', private float $preco = 0, private int $estoque = 0, private Fornecedor $fornecedor = new Fornecedor()){}

        //Fracamente tipado
        //public function __construct(private string $nome = '', private string $descricao = '', private float $preco = 0, private int $estoque = 0, private $fornecedor = null){}

        public function getNome(){
            return $this -> nome;
        }

        public function getDescricao(){
            return $this -> descricao;
        }

        public function getPreco(){
            return $this -> preco;
        }

        public function getEstoque(){
            return $this -> estoque;
        }

        public function getFornecedor(){
            return $this -> fornecedor;
        }
    }
    
?>