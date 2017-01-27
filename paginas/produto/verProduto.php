<?php 
	if(!empty($_GET["id"])){
		require_once("classes/Conexao.class.php");
		require_once("classes/Produto.class.php");
		
		$produto = new Produto();
		$produto->setId($_GET["id"]);
		
		if($produto->verProduto()){
			if($produto->getTipo() == 1){
				$caminho = "imagens/casas/";
			}
			if($produto->getTipo() == 2){
				$caminho = "imagens/apartamentos/";
			}
			if($produto->getTipo() == 3){
				$caminho = "imagens/terrenos/";
			}
?>		
	<div class="col-md-4">
		<img src="<?php echo $caminho.$produto->getImagem(); ?>" class="img-thumbnail">
	</div>
	<div class="col-md-8">
		<h2><?php echo $produto->getNome();?></h2>
		<div class="panel panel-default">
			<div class="panel-heading">Descrição</div>
			<div class="panel-body">
				<?php echo $produto->getDescricao();?>
			</div>
		</div>
		<div class="list-group">
			<span class="list-group-item"><b>Preço para a Venda:</b> R$<?php echo number_format($produto->getPreco(), 2, ',', '.');?></span>
		</div>		
		<?php 
			if($produto->getTipo() == 1){
				echo "<div class=\"list-group\">
					<span class=\"list-group-item\"><b>Preço para o Aluguel:</b> R$".number_format($produto->getAluguel(), 2, ',', '.')."</span>
				</div>";
			}
		?>
		<?php 
			if($produto->getTipo() == 2){
				echo "<div class=\"list-group\">
					<span class=\"list-group-item\"><b>Preço para o Aluguel:</b> R$".number_format($produto->getAluguel(), 2, ',', '.')."</span>
				</div>";
			}
		?>
		
		<?php 
			if($produto->getTipo() != 3){
				if(!empty($_SESSION["email"]) && !empty($_SESSION["senha"])){
					echo "<a href=\"?pg=valida-alugar&id=".$_GET["id"]."\" class=\"btn btn-primary btn-lg pull-left\">Alugar</a>";
				}
			}
		?>
    <!-- Declaração do formulário -->  
    <form method="post" target="pagseguro" class="col-md-3"  
    action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
              
            <!-- Campos obrigatórios -->  
            <input name="receiverEmail" value="suporte@lojamodelo.com.br" type="hidden">  
            <input name="currency" value="BRL" type="hidden">  
      
            <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
            <input name="itemId1" value="0001" type="hidden">  
            <input name="itemDescription1" value="<?php echo $produto->getNome();?>" type="hidden">  
            <input name="itemAmount1" value="<?php echo number_format($produto->getPreco(), 2, '.', '');?>" type="hidden">
			<input name="itemQuantity1" value="1" type="hidden">  
      
            <!-- Dados do comprador (opcionais) -->  
            <input name="senderName" value="José Comprador" type="hidden">  
            <input name="senderAreaCode" value="11" type="hidden">  
            <input name="senderPhone" value="56273440" type="hidden">  
            <input name="senderEmail" value="comprador@uol.com.br" type="hidden">  
      
            <!-- submit do form (obrigatório) -->  
            <input alt="Pague com PagSeguro" name="submit"  type="submit"  value="Comprar" class="btn btn-primary btn-lg"> 
              
    </form>  		
	</div>
	
		
		
		
<?php 	
		}
	}else{
		echo"erro!";
	}
?>