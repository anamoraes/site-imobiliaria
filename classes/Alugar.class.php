<?php 
class Alugar extends Conexao{
	private $id;
	private $produto;
	private $usuario;
	
	
	public function setId($id){
	$this->id = $id;
	}
	
	public function getId(){
	return $this->id;
	}
	
	public function setProduto($produto){
	$this->produto = $produto;
	}
	
	public function getProduto(){
	return $this->produto;
	}
	
	public function setUsuario($usuario){
	$this->usuario = $usuario;
	}
	
	public function getUsuario(){
	return $this->usuario;
	}
	public function insere(){
	if(!empty($this->produto) && !empty($this->usuario)){
			$sql = "insert into aluguel values(NULL, '".$this->produto."', '".$this->usuario."')";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				return true;
			}else{
				return false;
			}		
		}
	}

	
}

























?>