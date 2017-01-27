<?php
if(!empty($_GET["id"])){
	require_once("../../classes/Conexao.class.php");
	require_once("../../classes/Produto.class.php");
	
	$produto = new Produto();
	$produto->setId($_GET["id"]);
	if($produto->verProduto()){
		if($produto->deletar()){
			if($produto->getTipo() == "1"){
				$caminho = "../../imagens/casas/".$produto->getImagem();
			}
	
			if($produto->getTipo() == "2"){
				$caminho = "../../imagens/apartamentos/".$produto->getImagem();
			}
	
			if($produto->getTipo() == "3"){
				$caminho = "../../imagens/terrenos/".$produto->getImagem();
			}
			
			unlink($caminho);
			echo "produto apagado com sucesso!";
			echo $produto->getTipo();
			


		}else{
			echo "erro ao apagar produto!";
		}
	}else{
		echo "erro ao encontrar o produto!";
	}
}else{
	echo "dados invalidos!";
}












?>
