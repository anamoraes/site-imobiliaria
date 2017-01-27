<?php
 abstract class Conexao{
	protected $banco;
	protected $user;
	protected $pass;
	protected $host;
	
	public function __construct(){
		$this->banco = "imobiliaria";
		$this->user = "root";
		$this->pass = "";
		$this->host = "localhost";
	
	}
	
	public function conectar(){
		$con = mysqli_connect($this->host, $this->user, $this->pass, $this->banco);
		return $con;
	}
}