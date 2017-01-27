<?php 
require_once("classes/Conexao.class.php");
require_once("classes/Usuario.class.php");

$usuario = new Usuario();
if($usuario->sair()){
	echo "<script>top.location.href='javascript: window.history.go(-1)';</script>";

}else{
	echo "<script>top.location.href='javascript: window.history.go(-1)';</script>";
}
















?>