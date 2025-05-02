<?php
session_start();

$id = $_SESSION['id'];
$usr = $_SESSION['usr'];
$nombre = $_SESSION['nombre'];
$perfil = $_SESSION['perfil'];

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="INJUVENTUD" content="Consejo Juvenil">
    <meta name="" content="">
    <link rel="icon" type="image/png" href="../../img/icon.ico" sizes="22x21">
    <title>Perfil Admin | Consejo Juvenil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script src="../../js/files.js"></script>
    <!-- <script src="../../js/index.js"></script> -->

     <!-- type font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      /* buttons hover */

      /* #botonesFiles:hover {
    
        box-shadow: 0 10px 20px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.06);
        transform: scale(1.03);
        transition: width 0.8s, height 0.8s, transform 0.3s;
        
      } */
      .card{
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      }
      .card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        transition: width 0.8s, height 0.8s, transform 0.3s;
      }
     
      /* CELULAR */
      @media screen and (max-width: 600px) {
        .card:active{
          transform: scale(1.03);
          transition: width 0.3s, height 0.3s, transform 0.3s;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
<span id="inicio"></span>
  <!-- <div class="collapse bg-primary" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white"><img src="../../img/logo_injuventud_01.png" alt="" width="90"></h4>
          <p class="text-white">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
  <div class="navbar navbar-dark shadow-sm" style="background: #FAD40D">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="../../img/logo_injuventud_0.png" width="20" alt="" class="me-1">
        <strong class="text-dark">ADMINISTRADOR | Consejo Juvenil 2023</strong>
      </a>
      <a href="prcd/sort.php" type="button" class="btn btn-sm btn-outline-dark"><i class="bi bi-door-open"></i> Salir</a>
    </div>
  </div>
</header>

<main>

  <!-- <section class="py-5 text-center container"> -->
  <section class="text-center container">
    <!-- <div class="row py-lg-5"  style="background-image: url('../../img/logo_consejo_05.png')"> -->
    <div class="row py-lg-5"  style="background-image: url('../../assets/img/background.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;width:100%;">
      <div class="col-lg-6 col-md-8 mx-auto rounded bg-light bg-opacity-50 p-2">
        <h1 class="fw-light"><img src="../../img/logo_consejo_04.png" alt="" width="360"></h1>
        <h2 class="fw-bold" style="color:#5a5557">Bienvenido</h2>
        <h2 class="fw-bold" style="color:#5a5557"><i class="bi bi-person-circle"></i></h2>
        <h2 class="fw-bold" style="color:#5a5557"><?php echo $nombre ?></h2>
        <p class="lead text-dark mt-2">Sistema de postulación del INJUVENTUD para integrarse al Consejo Juvenil del Estado de Zacatecas en su edición 2023.</p>
        <p>
          <hr class="text-secondary">
          <a href="#seccion_MX" class="btn btn-danger my-2"><i class="bi bi-flag-fill text-success"></i> Postulantes Mx</a>
          <a href="#seccion_USA" class="btn btn-primary my-2"><i class="bi bi-flag-fill text-danger"></i> Postulantes USA</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="mb-4">
        <p><span id="seccion_MX"></span>
          <p class="h2">
          <i class="bi bi-flag-fill text-success"></i> Postulantes Mx | 
              <a href="#inicio">
                <i class="bi bi-arrow-bar-up"></i>
              </a>
          </p>
        </p>
        <p><small>Postulantes nacidos en <strong>el estado de Zacatecas</strong>.</small></p>
      </div>
      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <table class="table">
          <thead class="text-light text-center" style="background:#b23933">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">CURP</th>
              <th scope="col">Exposición<br>motivos</th>
              <th scope="col">OSC</th>
              <th scope="col">Acta<br>nacimiento</th>
              <th scope="col">INE</th>
              <th scope="col">CURP</th>
              <th scope="col">Comprobante<br>domicilio</th>
              <th scope="col">Carta<br>manifestación</th>
              <th scope="col">Carta<br>protesta</th>
              <th scope="col">Currículum<br>vitae</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            include('query/lista_postulantes_docs_check.php');
            ?>
          </tbody>
        </table>
       
      </div><!-- row -->
    </div>
  </div>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="mb-4">
        <p><span id="seccion_USA"></span>
          <p class="h2" >
          <i class="bi bi-flag-fill text-danger"></i> Postulantes USA | 
            <a href="#inicio"><i class="bi bi-arrow-bar-up"></i></a></p></p>
            <p><small>Postulantes Migrantes <strong>de Zacatecas</strong>.</small></p>
      </div>
      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       
      <table class="table">
          <thead class="text-light text-center" style="background:#b23933">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">CURP</th>
              <th scope="col">Edad</th>
              <th scope="col">Teléfono</th>
              <th scope="col"># Documentos</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            include('query/lista_postulantes_general_usa.php');
            ?>
          </tbody>
        </table>
     

      </div><!-- row -->
    </div>
  </div>

</main>

<footer class="text-light py-5" style="background:#b23933">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#inicio"  style="text-decoration: none;" class="text-light"><i class="bi bi-arrow-bar-up"></i> Arriba</a>
    </p>
    <p class="mb-1">&copy; Desarrollo por <strong class="text-light">INJUVENTUD</strong></p>
    <p class="mb-0"><a href="/" style="text-decoration: none;" class="text-light">Gobierno del estado de Zacatecas</a>.</p>
  </div>
</footer>

    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

<script>
    $("a[href^='#']").click(function(e) {
    e.preventDefault();
    
    var position = $($(this).attr("href")).offset().top;

    $("body, html").animate({
        scrollTop: position
    } /* speed */ );
});
</script>

<!-- modal datos visualizar -->
