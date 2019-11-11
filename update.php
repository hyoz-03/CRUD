<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcoVida</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Eco vida</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sob.php">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cont.php">Contato</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="adm.php">Administrador</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Agenda</h1>
          <div class="list-group">
            <a href="seg.php" class="list-group-item">Segunda</a>
            <a href="ter.php" class="list-group-item">Terça</a>
            <a href="qua.php" class="list-group-item">Quarta</a>
			<a href="quin.php" class="list-group-item">Quinta</a>
			<a href="sext.php" class="list-group-item">Sexta</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="900x350.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="900x350.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="900x350.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
			
			<form method="post" action="update02.php">
				
			<form class="needs-validation" novalidate>
            <div class="row">
				<div class="col-md-6 mb-3">
				<label for="name">Nome</label>
				<input type="text" class="form-control" name="nome" 		placeholder="Nome completo" value="" required>
					<div class="invalid-feedback">
					 É necessário informar o nome.
					</div>
				</div>
				<div class="col-md-3 mb-3">
                <label for="rg">RG</label>
                <input type="text" class="form-control" name="rg" maxlength="10" required>
                <div class="invalid-feedback">
                  É necessário informar o RG.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" maxlength="11" required>
                <div class="invalid-feedback">
                  É necessário informar o CPF.
                </div>
              </div>
			  <div class="col-md-6 mb-3">
				<label for="end">Endereço</label>
				<input type="text" class="form-control" name="end">
				</div>
				<div class="col-md-3 mb-3">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro">
              </div>
              <div class="col-md-3 mb-3">
                <label for="cid">Cidade</label>
                <input type="text" class="form-control" name="cidade">
                <div class="invalid-feedback">
                  É necessário informar a cidade.
                </div>
              </div>
			  <div class="col-md-2 mb-3">
                <label for="uf">UF</label>
                <select class="custom-select d-block w-100" name="uf" placeholder="UF">
                  <option>AC</option>
				  <option>AL</option>
				  <option>AP</option>
				  <option>AM</option>
				  <option>BA</option>
				  <option>CE</option>
				  <option>DF</option>
				  <option>ES</option>
				  <option>GO</option>
				  <option>MA</option>
				  <option>MT</option>
				  <option>MS</option>
				  <option>MG</option>
				  <option>PA</option>
				  <option>PB</option>
				  <option>PR</option>
				  <option>PE</option>
				  <option>PI</option>
				  <option>RJ</option>
				  <option>RN</option>
				  <option>RS</option>
				  <option>RO</option>
				  <option>RR</option>
				  <option>SC</option>
				  <option>SP</option>
				  <option>SE</option>
				  <option>TO</option>
                </select>
              </div>
			  <div class="col-md-3 mb-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" maxlength="8">
              </div>
			  <div class="col-md-3 mb-3">
                <label for="tel">Telefone</label>
                <input type="text" class="form-control" name="tel" maxlength="10" required>
                <div class="invalid-feedback">
                  É necessário informar um Telefone.
                </div>
                </div>
              <div class="col-md-3 mb-3">
                <label for="cel">Celular</label>
                <input type="text" class="form-control" name="cel" maxlength="11" required>
                <div class="invalid-feedback">
                  É necessário informar um celular.
                </div>
			  </div>
			  <div class="col-md-6 mb-3">
				<label for="email">E-mail</label>
				<input type="email" class="form-control" name="email" placeholder="exemplo@example.com">
				<div class="invalid-feedback">
					É necessário um e-mail válido.
				</div>
			  </div>
			  <div class="col-md-4 mb-3">
                <label for="opc">Como ficou sabendo das palestras</label>
                <select class="custom-select d-block w-100" name="opc" placeholder="Escolha uma opção">
                  <option>Através de um amigo</option>
				  <option>Através de um funcionário</option>
				  <option>E-mail</option>
				  <option>Outro</option>
                </select>
				</div>
				<br><br><div class="col-md-3 mb-3">
                <label for="cpf">CPF usado na hora do cadastro</label>
                <input type="text" class="form-control" name="cpfb" maxlength="11" required>
                <div class="invalid-feedback">
                  É necessário informar o CPF.
                </div><br><br>
				<div class="col-md-3 mb-3"></div>
				<button class="btn btn-primary btn-lg btn-block" type="submit">Inscrever-se</button>
				</div>
			</form>
			
          </div>
          
        </div>

      </div>

    </div>
    
	<br><br><br>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; EcoVida 2018</p>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
