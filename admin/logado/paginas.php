<?php

$pg= isset($_GET["pg"]) ? $_GET["pg"] : null;

switch($pg){
	case "":
	include("paginas/home.php");
	break;
	
	case "lista-usuario":
	include("paginas/usuario/lista-usuario.php");
	break;
	
	case "edita-usuario":
	include ("paginas/usuario/edita-usuario.php");
	break;
	
	case "valida-editar-usuario":
	include("paginas/usuario/valida-editar-usuario.php");
	break;
	
	case "cadastrar-produto":
	include ("paginas/produto/cadastrar.php");
	break;
	
	case "valida-cadastrar-produto":
	include ("paginas/produto/valida-cadastrar.php");
	break;
	
    case "sair":
    include ("sair.php");
    break;
	
	case"escolha-produto":
	include("paginas/produto/escolha-produto.php");
	break;
	
	case"edita-produto":
	include("paginas/produto/editar.php");
	break;
	
	case"valida-edita-produto":
	include("paginas/produto/valida-editar.php");
	break;
	
	case"valida-apaga-produto":
	include("paginas/produto/apagar.php");
	break;

}

?>