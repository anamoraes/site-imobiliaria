<?php session_start(); 

if(empty($_SESSION["carrinho"])){
	$_SESSION["carrinho"] = array();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Imobiliaria Matão</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="js/jquery-2.1.4.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="?pg=home">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="?pg=casas">Casas</a></li>
		<li><a href="?pg=apartamento">Apartamentos</a></li>
		<li><a href="?pg=terrenos">Terrenos</a></li>
		<li><a href="?pg=contato">Fale Conosco</a></li>
		<li><a href="?pg=sobre">Sobre</a></li>
      </ul>
	  <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <div class="input-group">
			  <input type="hidden" name="pg" value="busca">
			  <input type="text" class="form-control" placeholder="Pesquisar" name="pesquisa" required>
			  <span class="input-group-btn">
				<button type="submit" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
			  </span>
			</div><!-- /input-group -->
        </div>
      </form>
	  <?php 
	  
		if(!empty($_SESSION["email"]) && !empty($_SESSION["senha"])){
		?>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bem vindo <?php echo $_SESSION["nome"]; ?> <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="?pg=sair">Sair</a></li>
					</ul>
				</li>
				
			</ul> 
		<?php 
		}else{
		
		?>
			<ul class="nav navbar-nav navbar-right">
				<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#logar">Entrar</button>
			</ul> 
			<ul class="nav navbar-nav navbar-right">
				<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#cadastrar">Cadastrar</button>
			</ul>		
		<?php } ?>
		<ul class="nav navbar-nav navbar-right">
			<div class="btn-group carrinho">
			  <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="badge" id="qtd-carrinho"><?php echo count($_SESSION["carrinho"]); ?></span></button>
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="?pg=ver-carrinho">Ver carrinho</a></li>
				<li><a href="?pg=esvaziar-carrinho">Esvaziar carrinho</a></li>
			  </ul>
			</div>
		</ul>
		
	
	
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imagens/slide/01.jpg" alt="..." width="100%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="imagens/slide/02.jpg" alt="..." width="100%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	<div class="item">
      <img src="imagens/slide/03.jpg" alt="..." width="100%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid principal">
	
	
		<div class="col-md-12">
	<?php include_once ("paginas.php"); ?>
	</div>
	
	
  </div>
  
  <div class="rodape">
      <div class="col-md-12">
        Copyright 2015 | Todos os Direitos Reservados.
      
    </div>
  </div>
<div class="modal fade" id="logar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulário de login</h4>
      </div>
      <div class="modal-body">
			<form method="post" action="?pg=logar">
			  <div class="form-group">
				<label for="exampleInputEmail1">Endereço de email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu email" name="email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" name="senha">
			  </div>
			
				</div>
		  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-primary" value="entrar">
		</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulário de cadastro</h4>
      </div>
      <div class="modal-body">
			<form action="?pg=valida-cadastro" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Nome</label>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite seu nome" name="nome">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Endereço </label>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite seu endereço" name="endereco">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu email" name="email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" name="senha">
			  </div>
			
				</div>
		  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-primary" value="cadastrar">
		</form>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>