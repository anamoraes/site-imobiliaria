<?php 

class Usuario extends Conexao{
	private $id;
	private $nome;
	private $email;
	private $endereco;
	private $senha;
	private $produtoid;
	
	public function __construct(){
		parent::__construct();
	
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	
	public function getEndereco(){
		return $this->endereco;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function setProdutoid($produtoid){
		$this->produtoid = $produtoid;
	}
	
	public function getProdutoid(){
		return $this->produtoid;
	}
	
	public function insere(){
		if(!empty($this->nome) && !empty($this->endereco) && !empty($this->email) && !empty($this->senha)){
			$sql = "insert into usuario values(NULL, '".$this->nome."', '".$this->endereco."', '".$this->email."', '".$this->senha."')";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				return true;
			}else{
				return false;
			}		
		}
	}
	
	public function logar(){
		if(!empty($this->email) && !empty($this->senha)){
			$sql = "select * from usuario where email = '".$this->email."' and senha = '".$this->senha."'";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if(mysqli_num_rows($resp) > 0){
				$_SESSION["email"] = $this->email;
				$_SESSION["senha"] = $this->senha;
				while($dados=mysqli_fetch_object($resp)){
				
					$_SESSION["nome"] = $dados->nome;
				}
				return true;
			}else{
				session_destroy();
				return false;
			}
		}
	}
	public function sair(){
		if(!empty($_SESSION["email"]) && !empty($_SESSION["senha"])){
			session_destroy();
			return true;
		}else{
			return false;
		}
	
	}
	
	public function lista(){
		$sql = "select * from usuario";
		$link = parent::conectar();
		$resp = mysqli_query($link, $sql);
		if(mysqli_num_rows($resp) > 0){
			$i = 0;
			while($dados=mysqli_fetch_object($resp)){
				$a[$i]["id"] = $dados->id;
				$a[$i]["nome"] = $dados->nome;
				$a[$i]["email"] = $dados->email;
				$a[$i]["senha"] = $dados->senha;
				$a[$i]["endereco"] = $dados->endereco;
				
				$i++;
			}
			return $a;
		}else{
			return false;
		}
	
	}
	public function pesquisaId(){
		if(!empty($this->id)){
			$sql = "select * from usuario where id = '".$this->id."'";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if(mysqli_num_rows($resp) > 0){
				while($dados=mysqli_fetch_object($resp)){
					$this->nome = $dados->nome;
					$this->endereco = $dados->endereco;
					$this->email = $dados->email;
					$this->senha = $dados->senha;
				}
			}
	
		}
	
	}
	public function edita(){
		if(!empty($this->id) && !empty($this->nome) && !empty($this->endereco) && !empty($this->email) && !empty($this->senha)){
			$sql = "update usuario set nome = '".$this->nome."', email = '".$this->email."', endereco = '".$this->endereco."', senha = '".$this->senha."' where id = '".$this->id."'";
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