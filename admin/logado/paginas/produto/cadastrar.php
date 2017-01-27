<form method="post" action="?pg=valida-cadastrar-produto" enctype="multipart/form-data">
  <div class="form-group" >
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite seu nome" name="nome"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o preço" name="preco">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Aluguel</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o aluguel" name="aluguel">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descrição</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Digite a descrição" name="descricao"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Imagem</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Escolha a imagem" name="imagem">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tipo</label>
    <select class="form-control" id="exampleInputEmail1" placeholder="Escolha o tipo" name="tipo">
		<option value="">Escolha o tipo</option>
		<option value="1">Casas</option>
		<option value="2">Apartamentos</option>
		<option value="3">Terrenos</option>
		
		
	</select>
  </div>
  
  
  <button type="submit" class="btn btn-default">Cadastrar</button>
</form>