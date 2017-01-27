<?php 

if(!empty($_POST["nome"]) && !empty($_POST["endereco"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){
	require_once("classes/Conexao.class.php");
	require_once("classes/Usuario.class.php");
	
	$usuario = new Usuario();
	
	$usuario->setNome($_POST["nome"]);
	$usuario->setEndereco($_POST["endereco"]);
	$usuario->setEmail($_POST["email"]);
	$usuario->setSenha($_POST["senha"]);
	
	if($usuario->insere()){
		echo "<script>alert('USUARIO CADASTRADO COM SUCESSO!!');top.location.href='javascript: window.history.go(-1)';</script>";
	}else{
        echo "<script>alert('ERRO COM NOSSOS SERVIDORES!!');top.location.href='javascript: window.history.go(-1)';</script>";
    }
}else{
    echo "<script>alert('DADOS INVÁLIDOS!!');top.location.href='javascript: window.history.go(-1)';</script>";   
}




















?>