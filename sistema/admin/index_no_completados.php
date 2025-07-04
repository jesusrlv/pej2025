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
    <meta name="INJUVENTUD" content="PEJ24">
    <meta name="" content="">
    <link rel="icon" type="image/png" href="../../img/icon.ico" sizes="22x21">
    <title>Perfil Admin | PEJ2025</title>

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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }
      #colorRounded{
        background-color: rgba(184, 11, 4, 0.5);
      }
      #imgPortrait{
        background-image: url('../../img/fondo_pej2025.png');

        object-fit: cover;
        background-position: auto 100%; /* Center the image */
        background-repeat: repeat;
        background-size: 100% auto; /* Resize the background image to cover the entire container */
        /* background-position: center; */
        width:100%; 
        height:100%;
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
        #imgPortrait{

        object-fit: cover;
        background-repeat: no-repeat;
        background-size: 350% 18%; /* Resize the background image to cover the entire container */
        background-position: 0 0;
        
       
        }
        #colorRounded{
          background-color: rgba(184, 11, 4, 0.5);
          border-radius:0px;
        }
        #textPortada{
          font-size:8px;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <span id="inicio"></span>
  <div class="navbar navbar-dark shadow-sm bg-dark text-light" style="background: #FAD40D;color:white">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="../../img/logo_injuventud_0.png" width="20" alt="" class="me-1">
        <strong class="text-light" id="texto_">ADMINISTRADOR | Consejo Juvenil 2024</strong>
      </a>
      <a href="prcd/sort.php" type="button" class="btn btn-sm btn-outline-light"><i class="bi bi-door-open"></i> Salir</a>
    </div>
  </div>
</header>

<main id="imgPortrait">

<section class="text-center container">
    <!-- <div class="row py-lg-5"  style="background-image: url('../../img/logo_consejo_05.png')"> -->
    <div class="row py-lg-5" >
      <div class="col-lg-6 col-md-8 mx-auto rounded p-2" id="colorRounded">
        <h1 class="fw-light p-3"><img src="../../img/logo_pej2024.png" alt="" width="360"></h1>
        <h2 class="fw-bold" style="color:white">Bienvenido</h2>
        <h2 class="fw-bold" style="color:white"><i class="bi bi-person-circle"></i></h2>
        <h2 class="fw-bold" style="color:white"><?php echo $nombre ?></h2>
        <p id="resultSpan"></p>
        <p class="lead text-light mt-2">Sistema de postulación del INJUVENTUD para integrarse al PEJ2024.</p>
        <p>
          <hr class="text-secondary">
          <a href="#seccion_convocatoria" class="btn btn-primary my-2"><i class="bi bi-clipboard-data-fill"></i> Dashboard</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
    <nav class="navbar bg-body-tertiary">
      <form class="container-fluid justify-content-start">
        <a href="completados.php" class="btn btn-outline-success me-2" type="button"><i class="bi bi-check-circle-fill"></i> Completados</a>
        <a href="no_completados.php" class="btn btn-sm btn-outline-danger" type="button"><i class="bi bi-x-circle-fill"></i> No completados</a>
      </form>
    </nav>
      <div class="mb-4">
        <p><span id="seccion_MX"></span>
          <p class="h2">
          <i class="bi bi-flag-fill text-success"></i> Postulantes expediente completo | 
              <a href="#inicio">
                <i class="bi bi-arrow-bar-up"></i>
              </a>
          </p>
        </p>
        <p><small>Postulantes nacidos en <strong>el estado de Zacatecas</strong>.</small></p>
      </div>
      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control" placeholder="Buscar ..." aria-label="Buscar ..." aria-describedby="basic-addon1" id="myInput">
      </div>
            <?php
            include('query/lista_postulantes_no_completados2.php');
            ?>
          </tbody>
        </table>
       
      </div><!-- row -->
    </div>
  </div>

</main>

<footer class="text-light py-5" style="background:rgb(61, 42, 93)">
  <div class="container">
    <div>
      <div class="row">
        <div class="col-sm-3 col-md-6 col-lg-4 mt-2">
          <p class="mb-0 text-center"><img src="../../img/logo_white_02.png"  width="180" alt=""></p>
          <p class="mb-0 mt-1 text-center"><small>&copy; Desarrollo:<br> <strong class="text-light">Tecnologías de la Información | INJUVENTUD</strong></small></p>
          <!-- <p class="mb-0 text-center"><small><a href="/" style="text-decoration: none;" class="text-light">Gobierno del estado de Zacatecas</a>.</small></p> -->
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4 mt-2 text-center">
          <img src="../../img/logo_pej2025_01.png" width="180" alt="">
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4 mt-2">
          <p class="float-end mb-1 text-center">
            <a href="#inicio" style="text-decoration: none;" class="text-light"><i class="bi bi-arrow-bar-up"></i> Arriba</a>
          </p>
        </div>
      </div>
    </div>
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

$(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
$(document).ready(function () {
        $("#myInput2").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable2 tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<!-- modal datos visualizar -->
