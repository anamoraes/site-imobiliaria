<?php 
if(!empty($_GET["id"]) && !empty($_SESSION["email"])){
	require_once("classes/Conexao.class.php");
	require_once("classes/Alugar.class.php");
	
	$alugar = new Alugar();
	$alugar->setProduto($_GET["id"]);
	$alugar->setUsuario($_SESSION["email"]);
	if($alugar->insere()){
		echo "<script>alert('AGUARDE O CONTATO COM A EMPRESA PARA A SUA LOCAÇÃO!!');top.location.href='javascript: window.history.go(-1)';</script>";
	}else{
		echo "<script>alert('Erro ao Alugar');top.location.href='javascript: window.history.go(-1)';</script>";
	}





















}
?>