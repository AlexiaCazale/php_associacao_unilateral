<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";

    $fornecedor = new Fornecedor('Faber Castel', 'Faber Castel', '11.111.111/0001-11', '(11)91145-6325');
    
    $produto = new Produto('Régua T', 'Régua para engenharia', 45.00, 220, $fornecedor);

    // echo '<pre>';
    // var_dump($produto);
    // echo '</pre>';

    echo '<h3>Produto</h3>';
    echo "Nome: {$produto -> getNome()} <br>";
    echo "Descrição: {$produto -> getDescricao()} <br>";
    echo "Preço: " . number_format($produto -> getPreco(),2, ",", ".") . "<br>";
    echo "Estoque: {$produto -> getEstoque()} <br>";
    
    echo "<br>----------------------------------------------<br>";

    echo '<h4>Fornecedor</h4>';
    echo "Razão Social: {$fornecedor -> getRazao()} <br>";
    echo "Nome Fantasia: {$fornecedor -> getNomeFantasia()} <br>";
    echo "CNPJ: {$fornecedor -> getCnpj()} <br>";
    echo "Telefone: {$fornecedor -> getTelefone()} <br>";
?>