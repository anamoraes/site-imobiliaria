<?php 
if(!empty($_POST["email"]) && !empty($_POST["senha"])){
	require_once("classes/Conexao.class.php");
	require_once("classes/Usuario.class.php");
	
	$usuario = new Usuario();
	$usuario->setEmail($_POST["email"]);
	$usuario->setSenha($_POST["senha"]);
	if($usuario->logar()){
		 echo "<script>top.location.href='javascript: window.history.go(-1)';</script>";
	}else{
		 echo "<script>alert('Usuário ou senha inválidos');top.location.href='javascript: window.history.go(-1)';</script>";
	}
}else{
	echo "<script>alert('Dados inválidos');top.location.href='?pg=home';</script>";
}










?>