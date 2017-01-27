<?php 
if(empty($_GET["usuario"])){
	echo "usuario invalido!";
}else{
require_once("../../classes/Conexao.class.php");
require_once("../../classes/Usuario.class.php");

$usuario = new Usuario();
$usuario->setId($_GET["usuario"]);
$usuario->pesquisaId();
?>
<form method="post" action="?pg=valida-editar-usuario">
  <div class="form-group" >
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite seu nome" name="nome" value="<?php echo $usuario->getNome();?> ">
	<input type="hidden" name="id" value="<?php echo $_GET["usuario"];?>"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite seu endereço" name="endereco" value="<?php echo $usuario->getEndereco();?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu email" name="email" value="<?php echo $usuario->getEmail();?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Senha</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite sua senha" name="senha" value="<?php echo $usuario->getSenha();?>">
  </div>
  
  
  <button type="submit" class="btn btn-default">Editar</button>
</form>

<?php } ?>