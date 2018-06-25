<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Vida Animal - Cad Produtos</title>
  </head>
  <body>
    
   <!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">Vida Animal</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="{{ url('/produtos') }}">Produtos</a>
					<a class="nav-item nav-link" href="#">Categorias</a>
					<a class="nav-item nav-link" href="#">Marcas</a>
					<a class="nav-item nav-link" href="#">Compras</a>
					<a class="nav-item nav-link" href="#">Estoque</a>
				</div>
			</div>
			
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">usuário
						</a>
                    </li>
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('/') }}">Sair
						</a>
					</li>
				</ul>
				</ul>
			</div>
        </div>
    </nav>

     <!-- cadastro -->
    <div class="row">
        <div class="container mt-3">
            <h2 class="h5 text-muted mt-2 pb-2">Cadastro de Novos Produtos</h2>
            <form class="pb-4">
                <div class="form-row">
                    <div class="col-3">
                        <label for="codigo" class="text-muted">Código</label>
                        <input id="codigo" type="text" class="form-control text-muted" placeholder="Código">
                    </div>
                    <div class="col-8 ml-3">
                        <label for="nome" class="text-muted">Nome do Produto</label>
                        <input id="nome" type="text" class="form-control text-muted" placeholder="Qual o nome do produto?">
                    </div>
                </div>

                <div class="form-row mt-5">
                        <div class="col-3">
                            <label for="quantidade" class="text-muted">Quantidade de Produtos</label>
                            <input type="text" class="form-control" placeholder="Qual a quantidade?">
                        </div>
                        <div class="col-5 ml-3">
                            <label for="tipo" class="text-muted">Tipo de Pet</label>
                            <input type="text" class="form-control" id="tipo" placeholder="Produto para qual tipo de pet?">
                        </div>
                        <div class="col-3 ml-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control text-muted" aria-label="Amount (to the nearest dollar)" placeholder="Preço">
                                </div>                       
                        </div>
                </div>

                

                <div class="form-group mt-3">
                        <label for="textarea" class="text-muted">Descrição</label>
                        <textarea class="form-control text-muted" id="textarea" rows="4" placeholder="Faça uma breve descrição do produto"></textarea>
                </div>

                <div class="form-row mt-5">
                        <div class="form-group col-md-4">
                                <label for="marca" class="text-muted">Marca do Produto</label>
                                <select id="marca" class="form-control">
                                  <option selected class="text-muted">Qual é a marca?</option>
                                  <option value="1">...</option>
                                  <option value="2">...</option>
                                  <option value="3">...</option>
                                  <option value="4">...</option>
                                </select>
                                <a href="http://">Registrar nova marca</a>
                        </div>
                        <div class="form-group col-md-4 ml-3">
                                <label for="marca" class="text-muted">Categoria do Produto</label>
                                <select id="marca" class="form-control">
                                  <option selected class="text-muted">Qual é a categoria?</option>
                                  <option value="1">...</option>
                                  <option value="2">...</option>
                                  <option value="3">...</option>
                                  <option value="4">...</option>
                                </select>
                                <a href="http://">Registrar nova categoria</a>
                        </div>    
                </div>
               
                <div class="form-group">
                        <button type="button" class="btn btn-outline-success btn-lg mt-3">Cadastrar</button>  
                        <a href="{{ url('/produtos') }}"><button type="button" class="btn btn-outline-danger btn-lg ml-3">Voltar</button></a>        
                </div>  
                
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>