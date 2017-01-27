<?php 
session_start();
if(!empty($_GET["id"])){
	require_once("../../classes/Conexao.class.php");
	require_once("../../classes/Produto.class.php");

	$produto = new Produto();
	$produto->setId($_GET["id"]);
	if($produto->insereCarrinho()){
		echo count($_SESSION["carrinho"]);
	}else{
		return false;
	}
}else{
	echo"erro";
}

























?>