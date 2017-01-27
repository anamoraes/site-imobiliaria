<?php 
	if(!empty($_GET["id"])){
		require_once("../../classes/Conexao.class.php");
		require_once("../../classes/Produto.class.php");
		$produto = new Produto();
		$produto->setId($_GET["id"]);
		if($produto->verProduto()){
	
	?>
<form method="POST" action="?pg=valida-edita-produto" enctype="multipart/form-data">
  <div class="form-group" >
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control"  value="<?php echo $produto->getNome(); ?>" id="exampleInputEmail1" placeholder="Digite seu nome" name="nome"> 
	<input type="hidden" class="form-control"  value="<?php echo $_GET["id"]; ?>" id="exampleInputEmail1" placeholder="Digite seu nome" name="id"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço</label>
    <input type="text" class="form-control" value="<?php echo $produto->getPreco(); ?>" id="exampleInputEmail1" placeholder="Digite o preço" name="preco">
  </div>
  <?php if($produto->getTipo() == 1 || $produto->getTipo() == 2){ ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Aluguel</label>
    <input type="text" class="form-control" value="<?php echo $produto->getAluguel(); ?>" id="exampleInputEmail1" placeholder="Digite o aluguel" name="aluguel">
  </div>
  <?php } ?>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Descrição</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Digite a descrição" name="descricao"><?php echo $produto->getDescricao(); ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Editar</button>
</form>
<?php

	}else{
		echo"Produto não encontrado!";
		
	} 
}else{
	echo"produto invalido!";
	}
?>