<form method="post" target="pagseguro"
    action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
              
            <!-- Campos obrigatórios -->  
            <input name="receiverEmail" value="suporte@lojamodelo.com.br" type="hidden">  
            <input name="currency" value="BRL" type="hidden">  

<table class="table table-bordered">
<tr><th colspan="2"><h2>Carrinho de Compras</h2></th></tr>
<tr><th>Nome</th><th>Preço</th></tr>
<?php 

if(!empty($_SESSION["carrinho"])){
	$total = 0;
	$cont = 1;
	$car = $_SESSION["carrinho"];
	require_once("classes/Conexao.class.php");
	require_once("classes/Produto.class.php");
	
	$produto = new Produto();
	
	foreach($car as $i => $v){
		$produto->setId($car[$i]);
		if($produto->verProduto()){
			$total += $produto->getPreco();
			echo "<tr><td>".$produto->getNome()."</td><td>".number_format($produto->getPreco(), 2, ',', '.')."</td></tr>";
			?>
	 
            <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
            <input name="itemId<?php echo $cont; ?>" value="<?php echo $cont; ?>" type="hidden">  
            <input name="itemDescription<?php echo $cont; ?>" value="<?php echo $produto->getNome();?>" type="hidden">  
            <input name="itemAmount<?php echo $cont; ?>" value="<?php echo number_format($produto->getPreco(), 2, '.', '');?>" type="hidden">
			<input name="itemQuantity<?php echo $cont; ?>" value="1" type="hidden">  
	
	<?php
		$cont++;
		}
		
		
	}
	
	
	
	echo "<tr><td></td><td><b>Total ".number_format($total, 2, ',', '.')."</b></td></tr>";



	echo"     
            <!-- submit do form (obrigatório) -->  
            <tr><td></td><td><input alt=\"Pague com PagSeguro\" name=\"submit\"  type=\"submit\"  value=\"Finalizar compra\" class=\"btn btn-primary\"></td></tr> 
              
    </form>";
	
}else{
	echo "<h2>Carrinho Vazio</h2>";

}
?>

</table>