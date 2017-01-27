<?php 
if(!empty($_POST["nome"]) && !empty($_POST["preco"]) && !empty($_POST["descricao"]) && !empty($_POST["tipo"]) && !empty($_FILES["imagem"]) && !empty($_POST["aluguel"]){
	require_once("../../classes/Conexao.class.php");
	require_once("../../classes/Produto.class.php");
	require_once("../../classes/Upload.class.php");
	if($_POST["tipo"] == 1){
		$caminho = "../../imagens/casas/";
	}
	
	if($_POST["tipo"] == 2){
		$caminho = "../../imagens/apartamentos/";
	}
	
	if($_POST["tipo"] == 3){
		$caminho = "../../imagens/terrenos/";
	}
	
	$nomeImagem =  md5(microtime()) . ".jpg";
	$upload = new Upload();
	$upload->setCaminho($caminho);
	$upload->setArquivo($_FILES["imagem"]);
	$upload->setNome($nomeImagem);
	
	$upload->upload();
	

	$produto = new Produto();
	$produto->setNome($_POST["nome"]);
	$produto->setPreco($_POST["preco"]);
	$produto->setTipo($_POST["tipo"]);
	$produto->setDescricao($_POST["descricao"]);
	$produto->setImagem($nomeImagem);
	$produto->setAluguel($_POST["aluguel"]);
	if($produto->insere()){
		echo "<script>alert('Produto inserido com sucesso');top.location.href='javascript: window.history.go(-1)';</script>";
	}else{
		echo "<script>alert('Erro com nossos servidores');top.location.href='javascript: window.history.go(-1)';</script>";
	}
}else{
	echo "<script>alert('Dados inválidos');top.location.href='javascript: window.history.go(-1)';</script>";
}
?>