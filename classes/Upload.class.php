<?php 

class Upload{
	private $arquivo;
	private $caminho;
	private $nome;
	
	public function setArquivo($arquivo){
		$this->arquivo = $arquivo;
	}
	public function getArquivo(){
		return $this->arquivo;
	}
	public function setCaminho($caminho){
		$this->caminho = $caminho;
	}
	public function getCaminho(){
		return $this->caminho;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function upload(){
		if($this->arquivo["error"] > 0){
			echo "Erro de Imagem";
			switch($this->arquivo["error"]){
				case 1:
				echo"erro 1";
				return false;
				break;
				
				case 2:
				echo "erro 2";
				return false;
				break;
				
				case 3:
				echo"erro 3";
				return false;
				break;
				
				case 4:
				echo"Erro 4";
				return false;
				break;
	        }
			return false;
		}else{
			if(is_uploaded_file($this->arquivo["tmp_name"])){
				if(!move_uploaded_file($this->arquivo["tmp_name"],$this->caminho . $this->nome)){
					echo"Não foi possivél mover a imagem";
					return false;
				}else{
					return true;
				}
			}else{
				return false;
			}
		}
	}
	
}
?>