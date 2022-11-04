<!DOCTYPE html>
<html lang="Es-MEX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!--Estilos-->
    <link rel="stylesheet" href="css\style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap\css\docs.css">
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <script src="bootstrap\js\bootstrap.bundle.min.js"></script>
</head>
<body id="body1">
    <!----Banner---->
    <header>
        <div class="banner">
            <a href="index.php">
                <img src="img\Deforestacion.png" alt="Proyecto Deforestación">
                <h1>La deforeestacion</h1>                
            </a>
        </div>
    </header>

  <!--Navegacion-->
  <nav class="navegacion">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Pages\Noticias.php">Noticias</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Pages\Nosotros.php">Nosotros</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Pages\Contactos.php">Contactos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Pages\Donaciones.php">Donaciones</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Pages\cuenta.php">Cuenta</a>
      </li>
    </ul>
  </nav>
    
  <!--Contenido-->
  <main class="Contenido">
    <article id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">    
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/UNACH.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="img/Auditorio.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="img/Biblioteca.jpg" alt="">
        </div>
      </div>
            
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
            
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </article>
  </main>

  <!--Pie de Pagina-->
  <footer style="text-align:right;">
    <br><br>
    <h6>&copy;Universidad Autónoma de Chiapas</h6>
  </footer>

</body>
</html>