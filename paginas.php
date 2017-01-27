<?php

$pg= isset($_GET["pg"]) ? $_GET["pg"] : null;

switch($pg){
	case "":
	include("paginas/home.php");
	break;
	
	case "contato":
	include("paginas/contato.php");
	break;
	
	case "home":
	include("paginas/home.php");
	break;
	
	case"valida-cadastro":
	include("paginas/usuario/valida-cadastro.php");
	break;
	
	case"logar":
	include("paginas/usuario/logar.php");
	break;
	
	case "sair":
	include("paginas/usuario/sair.php");
	break;
	
	case"apartamento":
	include("paginas/produto/apartamento.php");
	break;
	
	case"casas":
	include("paginas/produto/casas.php");
	break;
	
	case"terrenos":
	include("paginas/produto/terrenos.php");
	break;
	
	case"verProduto":
	include("paginas/produto/verProduto.php");
	break;
	
	case "sobre":
	include("paginas/sobre.php");
	break;
	
	case"valida-alugar":
	include("paginas/alugar/valida-alugar.php");
	break;
	
	case"busca":
	include("paginas/produto/busca.php");
	break;
	
	case "esvaziar-carrinho":
	include("paginas/produto/esvaziar-carrinho.php");
	break;
	
	case"ver-carrinho":
	include("paginas/produto/ver-carrinho.php");
	break;
}

?>