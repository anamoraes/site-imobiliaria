<?php

class Produto extends Conexao{
	private $id;
	private $nome;
	private $preco;
	private $descricao;
	private $imagem;
	private $tipo;
	private $busca;
	private $aluguel;
	
	
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
	
	public function setPreco($preco){
		$this->preco = $preco;
	}
	
	public function getPreco(){
		return $this->preco;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setImagem($imagem){
		$this->imagem = $imagem;
	}
	
	public function getImagem(){
		return $this->imagem;
	}
	
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	public function setBusca($busca){
		$this->busca = $busca;
	}
	
	public function getBusca(){
		return $this->busca;
	}
	
	public function setAluguel($aluguel){
		$this->aluguel = $aluguel;
	}
	
	public function getAluguel(){
		return $this->aluguel;
	}
	
	public function insere(){
		if(!empty($this->nome) && !empty($this->preco) && !empty($this->descricao) && !empty($this->imagem) && !empty($this->tipo) && !empty($this->aluguel)){
		$sql = "insert into produto values(NULL, '".$this->nome."', '".$this->preco."', '".$this->descricao."', '".$this->imagem."', '".$this->tipo."', '".$this->aluguel."')";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				return true;
			}else{
				return false;
			}		
		}
	}
	public function listaTipo(){
		if(!empty($this->tipo)){
			$sql = "select * from produto where tipo = '".$this->tipo."'";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				if(mysqli_num_rows($resp) > 0){
					$i = 0;
					while($dado=mysqli_fetch_object($resp)){
						$a[$i]["id"] = $dado->id;
						$a[$i]["nome"] = $dado->nome;
						$a[$i]["preco"] = $dado->preco;
						$a[$i]["descricao"] = $dado->descricao;
						$a[$i]["imagem"] = $dado->imagem;
						$a[$i]["tipo"] = $dado->tipo;
						$i++;
					}
					return $a;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
	public function listaTudo(){
		
			$sql = "select * from produto";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				if(mysqli_num_rows($resp) > 0){
					$i = 0;
					while($dado=mysqli_fetch_object($resp)){
						$a[$i]["id"] = $dado->id;
						$a[$i]["nome"] = $dado->nome;
						$a[$i]["preco"] = $dado->preco;
						$a[$i]["descricao"] = $dado->descricao;
						$a[$i]["imagem"] = $dado->imagem;
						$a[$i]["tipo"] = $dado->tipo;
						$i++;
					}
					return $a;
				}else{
					return false;
				}
			}else{
				return false;
			}
		
	}
	public function destaque(){
		if(!empty($this->tipo)){
			$sql = "select * from produto where tipo = '".$this->tipo."' limit 4";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				if(mysqli_num_rows($resp) > 0){
					$i = 0;
					while($dado=mysqli_fetch_object($resp)){
						$a[$i]["id"] = $dado->id;
						$a[$i]["nome"] = $dado->nome;
						$a[$i]["preco"] = $dado->preco;
						$a[$i]["descricao"] = $dado->descricao;
						$a[$i]["imagem"] = $dado->imagem;
						$a[$i]["tipo"] = $dado->tipo;
						$i++;
					}
					return $a;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
	public function verProduto(){
		if(!empty($this->id)){
			$sql = "select * from produto where id = '".$this->id."'";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				if(mysqli_num_rows($resp) > 0){
					while($dado=mysqli_fetch_object($resp)){
						$this->nome = $dado->nome;
						$this->preco = $dado->preco;
						$this->descricao = $dado->descricao;
						$this->imagem = $dado->imagem;
						$this->tipo = $dado->tipo;
						$this->aluguel = $dado->aluguel;
					}
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}	
	}
	public function busca(){
		if(!empty($this->busca)){
				$sql = "select * from produto where nome LIKE '%$this->busca%' OR descricao LIKE '%$this->busca%' OR preco LIKE '%$this->busca%'";
				$link = parent::conectar();
				$resp = mysqli_query($link, $sql);
					if($resp){
					if(mysqli_num_rows($resp) > 0){
						$i = 0;
						while($dado=mysqli_fetch_object($resp)){
							$a[$i]["id"] = $dado->id;
							$a[$i]["nome"] = $dado->nome;
							$a[$i]["preco"] = $dado->preco;
							$a[$i]["descricao"] = $dado->descricao;
							$a[$i]["imagem"] = $dado->imagem;
							$a[$i]["tipo"] = $dado->tipo;
							$i++;
						}
						return $a;
					}else{
						return false;
					}
				}else{
					return false;
				}
		
		
		}
	}
	public function edita(){
		if(!empty($this->id) && !empty($this->nome) && !empty($this->preco) && !empty($this->descricao) && !empty($this->aluguel)){
			$sql = "update produto set nome = '".$this->nome."', preco = '".$this->preco."', descricao = '".$this->descricao."', aluguel = '".$this->aluguel."' where id = '".$this->id."'";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				return true;
			}else{
				return false;
			}
		}
	}
	
	public function insereCarrinho(){
		if(!empty($this->id)){
			array_push($_SESSION["carrinho"], $this->id);
			return true;
		}else{
			return false;
		}		
	}
	
	public function deletar(){
		if(!empty($this->id)){
			$sql = "delete from produto where id = '".$this->id."'";
			$link = parent::conectar();
			$resp = mysqli_query($link, $sql);
			if($resp){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}
?>