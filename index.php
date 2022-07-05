<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
print_r($carrinho1->exibirItens());

echo 'valor total:'. $carrinho1->exibirValorTotal();

/* $carrinho1->adicionarItem('Bicicleta', 750.10);
$carrinho1->adicionarItem('Geladeira', 1950.15);
$carrinho1->adicionarItem('Tapete', 350.20); */

$carrinho1->adicionarItem('Televisão', 3750.10);
echo "<br />";
print_r($carrinho1->exibirItens());
echo "<br />";

$carrinho1->exibirValorTotal();
echo 'Valor total recalculado:'. $carrinho1->exibirValorTotal();

echo "<br />";
echo 'Status:'. $carrinho1->exibirStatus();


echo "<br />";
if($carrinho1->confirmarPedido()){
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'erro na confirmação do pedido. Carrinho vazio';
}

echo "<br />";
echo 'Status:'. $carrinho1->exibirStatus();