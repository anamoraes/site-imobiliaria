<?php 

class Admin extends Conexao{
	private $id;
	private $nome;
	private $email;
	private $senha;
	
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
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	public function logar(){
		if(!empty($this->email) && !empty($this->senha)){
			$sql = "select * from admin where email = '".$this->email."' and senha = '".$this->senha."'";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if(mysqli_num_rows($resp) > 0){
				$_SESSION["email-admin"] = $this->email;
				$_SESSION["senha-admin"] = $this->senha;
				return true;
			}else{
				return false;
			}
			
		}
			
		
		
	}
}

?>