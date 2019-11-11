<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcoVida</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
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
			<a href="cadastro_no_banco.php" class="list-group-item">Cadastro</a>
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
			<div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a><img class="card-img-top" src="700x400.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a>Obrigações ambientais da industria</a>
                  </h4>
                  <p class="card-text">Relatório anual de atividades potencialmnte poluidoras (RAPP), compensação ambiental e florestal...</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a><img class="card-img-top" src="700x400.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a>Reduzir, reutilizar e reciclar</a>
                  </h4>
                  <p class="card-text">Nessa palestra é oferecido aos participantes atitudes que podem ser cultivadas para transformar a relação que temos com...</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a><img class="card-img-top" src="700x400.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a>O desenvolvimento para uma cultura de sustentabilidade</a>
                  </h4>
                  <p class="card-text">Uma reflexão sobre a importância de desenvolvimento de líderes para uma cultura de...</p>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; EcoVida 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
