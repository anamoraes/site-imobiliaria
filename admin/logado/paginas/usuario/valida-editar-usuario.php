<?php 
if(!empty($_POST["nome"]) && !empty($_POST["endereco"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){
	require_once("../../classes/Conexao.class.php");
	require_once("../../classes/Usuario.class.php");
	
$usuario = new Usuario();
$usuario->setId($_POST["id"]);
$usuario->setNome($_POST["nome"]);
$usuario->setEmail($_POST["email"]);
$usuario->setSenha($_POST["senha"]);
$usuario->setEndereco($_POST["endereco"]);


    if($usuario->edita()){
        echo "<script>alert('Usuario alterado com sucesso');top.location.href='javascript: window.history.go(-2)';</script>";
    }else{
        echo "<script>alert('Erro com nossos servidores');top.location.href='javascript: window.history.go(-1)';</script>";
    }
}else{
    echo "<script>alert('Dados inválidos');top.location.href='javascript: window.history.go(-1)';</script>";
}













?>