<?php 
require_once("../../classes/Conexao.class.php");
require_once("../../classes/Usuario.class.php");

$usuario = new Usuario();
$array = $usuario->lista();
if($array != null){
	echo "<table class=\"table table-bordered\">
			<tr><th>Nome</th><th>Email</th><th>Endereço</th><th>Editar</th></tr>";
	foreach($array as $i => $v){
		echo "<tr><td>".$array[$i]["nome"]."</td><td>".$array[$i]["email"]."</td><td>".$array[$i]["endereco"]."</td><td><a class=\"btn btn-default\" href=\"?pg=edita-usuario&usuario=".$array[$i]["id"]."\" role=\"button\">Editar</a></td></tr>";
	
	}
	echo "</table>";

}













?>