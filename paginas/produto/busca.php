<?php
echo "<h2>Pesquisando por.. ".$_GET["pesquisa"]."</h2>";
if(!empty($_GET["pesquisa"])){
	require_once("classes/Conexao.class.php");
	require_once("classes/Produto.class.php");
	
	
	$produto = new Produto();
	$produto->setBusca($_GET["pesquisa"]);
	if($produto->busca()){
		$ap = $produto->busca();
		foreach($ap as $i => $v){
			if($ap[$i]["tipo"] == 1){
				$caminho = "imagens/casas/";
			}
			
			if($ap[$i]["tipo"] == 2){
				$caminho = "imagens/apartamentos/";
			}
			
			if($ap[$i]["tipo"] == 3){
				$caminho = "imagens/terrenos/";
			}
			echo "<div class=\"col-sm-4 col-md-3\">
					<div class=\"thumbnail\">
					  <img src=\"$caminho".$ap[$i]["imagem"]."\" alt=\"...\">
					  <div class=\"caption\">
						<h3>".$ap[$i]["nome"]."</h3>
						<ul class=\"list-group\">
						  <li class=\"list-group-item\">R$".number_format($ap[$i]["preco"], 2, ',', '.')."</li>
						</ul>
						<a class=\"btn btn-primary\" href=\"?pg=verProduto&id=".$ap[$i]["id"]."\">Ver Produto</a>
						</div>
					</div>
				  </div>";
		}
	}else{
		echo"<h4>Nenhum produto encontrado</h4>";
	}
	}else{
		echo"<h4>Nenhum produto encontrado</h4>";
	}
?>
