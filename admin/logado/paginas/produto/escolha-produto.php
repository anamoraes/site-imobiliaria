<table class="table table-bordered">
<tr><th colspan="4"><h2>Lista de Produtos</h2></th></tr>
<tr><th>Nome</th><th>Preço</th><th colspan="2">Opção</th></tr>
<?php 

require_once("../../classes/Conexao.class.php");
require_once("../../classes/Produto.class.php");

$produto = new Produto();
if($produto->listaTudo()){
$array = $produto->listaTudo();
foreach($array as $i => $v){
	echo "<tr><td>".$array[$i]["nome"]."</td><td>".$array[$i]["preco"]."</td><td><a class=\"btn btn-default\" href=?pg=edita-produto&id=".$array[$i]["id"].">Editar</a></td><td><a href=\"?pg=valida-apaga-produto&id=".$array[$i]["id"]."\" class=\"btn btn-danger\">Apagar</a></td></tr>";
}
}
?>
</table>