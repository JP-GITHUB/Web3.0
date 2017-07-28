<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Web3.0</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body id="Web 3.0" data-spy="scroll" data-target=".navbar" data-offset="60">
    
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <div class="collapse navbar-collapse" id="myNavbar">
                  <a class="navbar-brand" href="#">Web 3.0</a>
                <ul class="nav navbar-nav navbar-left">
                  <li><a href="#about">Inicio</a></li>
                  <li><a href="#services">Estilos</a></li>
                </ul>
                 
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>Diseno/listar">Ver diseños</a></li>
                    <li><a href="<?php echo base_url();?>Cliente/ingreso">Ingreso a usuarios</a></li>
                  </ul>
                   </div>
        </div>
      </nav>

<div class="jumbotron text-center">
  <h1>Web 3.0</h1> 
  <p>Todo para crear tu pagina web, en un mismo lugar...</p> 
  <form>
    <div class="input-group">
      <div class="input-group-btn">
        <a class="btn btn-default" href="<?php echo base_url();?>Cliente/ingreso" role="button">Ingresar aqui.</a></p>
      </div>
    </div>
  </form>
</div>
</div>
    
    

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Todo lo que necesitas para crear tu increíble página web</h2><br>
      <h4>Tenemos todo lo que buscas. Páginas web gratis, un editor 
sencillo e intuitivo, plantillas diseñadas profesionalmente,
espectaculares galerías, versión móvil optimizada, dominios, 
hosting seguro, SEO, centro de ayuda las 24 hrs. y mucho
más en una sola plataforma de creación de páginas web.</h4><br>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Más de 2 millones de personas en 30 países eligen Web 3.0</h2><br>
      <h4>Personas con todo tipo de profesiones y negocios han creado su página
        web gratis con Web 3.0. Músicos, dueños de tiendas online, diseñadores,
        dentistas, paseadores de perros, novias, blogeros, planeadores de 
        eventos, fotógrafos, abogados, entrenadores y muchos más eligen
        nuestro sencillo editor de páginas web.</h4><br>
      
    </div>
  </div>
</div>


<div id="services" class="container-fluid text-center">
  <h2>Estilos</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>Informaticos</h4>
      <p></p>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4></h4>
      <p></p>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4></h4>
      <p></p>
      
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Naturales</h4>
      <p></p>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Publisitarios</h4>
      <p></p>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Ingenieria</h4>
      <p></p>
      
    </div>
  </div>
</div>

  <br>
  
  <h2>Comentarios</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Excelente pagina muy practica!!"<br><span>Daniel Gonzalez, Microempresario</span></h4>
      </div>
      <div class="item">
        <h4>"Me costo solo un par de minutos para poder tener mi propia pagina web, muchas gracias..."<br><span>John Doe, Auditor</span></h4>
      </div>
      <div class="item">
        <h4>"Gracias, me facilitaron todo... igual agradeceria mas estilos.. saludos."<br><span>Claudia Bing, Doctora</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
