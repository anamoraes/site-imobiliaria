<?php 
if(!empty($_POST["nome"]) && !empty($_POST["id"]) && !empty($_POST["preco"]) && !empty($_POST["descricao"]) && !empty($_POST["aluguel"])){

require_once("../../classes/Conexao.class.php");
require_once("../../classes/Produto.class.php");

$produto = new Produto();
$produto->setId($_POST["id"]);
$produto->setNome($_POST["nome"]);
$produto->setPreco($_POST["preco"]);
$produto->setDescricao($_POST["descricao"]);
$produto->setAluguel($_POST["aluguel"]);

if($produto->edita()){
echo "foi";
}else{
echo "erro!";
}

}else{ 
	echo"dados inválidos";
}



















?>