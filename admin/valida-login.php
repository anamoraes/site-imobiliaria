<meta charset="utf-8">
<?php
session_start(); 
if(!empty($_POST["email"]) && !empty($_POST["senha"])){
require_once("../classes/Conexao.class.php");
require_once("../classes/Admin.class.php");

$admin = new Admin();
$admin->setEmail($_POST["email"]);
$admin->setSenha($_POST["senha"]);
if($admin->logar()){
	echo "<script language= \"JavaScript\">
			location.href=\"logado/\"
		   </script>";
}else{
	echo "<script>alert('Usuário ou senha inválidos');top.location.href='javascript: window.history.go(-1)';</script>";
}





}










?>