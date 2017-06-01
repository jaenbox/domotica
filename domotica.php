<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="David Jaén Revert">
  <title>David Jaen Revert</title>
  <link rel="shortcut icon" href="assets/images/gt_favicon.png">
  <!-- Bootstrap -->
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/mystyles.css">
  <!-- Fonts -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:500,400,300,200,100' rel='stylesheet' type='text/css'>

  <!-- 
    Magister - single-page Bootstrap template ADAPTED
    Credits  - Design and development: Sergey Pozhilov - http://pozhilov.com
               Photos used in template: Unsplash - http://unsplash.com
               More free templates by Sergey: http://gettemplate.com

  -->
  <!--
    https://www.peatonet.com/raspberry-pi-y-los-pines-gpio-implementando-domotica-asequible-parte-i/
  -->
</head>

<body class="theme-invert" data-spy="scroll">
  <!-- NAVBAR -->
  <nav class="navbar navbar-inverse navbar-fixed-top navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="#"><strong>David Jaén Revert</strong></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav nav-tabs" role="tablist">
                    <li class="active"><a class="nav-link" href="#_home">Controlador<span class="sr-only">(current)</span></a></li>                    
                    <li><a class="nav-link" href="#_contact">Contacto</a></li>
                </ul>
            </div>
      </div>
  </nav>
   
  <section class="section" id="_home">
    <div class="col-xs-12 col-sm-3">
            <p style="padding:20px;"></p>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-2 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">  
          <h1 class="title">Domótica</h1>
          <p class="subtitle">Raspberry pi</p>
        </div>
      </div>  
    </div>
  </section>

  <section class="section" id="_about">

    <div class="container">
      <form action="" method="post">
        Enchufe Acuario [GPIO 17]&nbsp;<input type="submit" name="encender17" value="Encender">
        <input type="submit" name="apagar17" value="Apagar">
      </form>
    </div>
  </section>

  
  <!-- Fifth (Contact) section -->
  <section class="section" id="_contact">
    <div class="container">
    
      <h2 class="text-center title">Contacto</h2>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">
          <p class="lead">Para contactar conmigo podrás seleccionar cualquiera de las redes sociales</p>
          <p>Envia un correo a mi dirección</p>
          <p><a href="mailto:david.jaen.revert@gmail.com"><b>david.jaen.revert@gmail.com</b></a><br><br></p>
          <ul class="list-inline list-social">
            <li><a href="https://twitter.com/jaen64bits" class="btn btn-link"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
            <li><a href="https://github.com/jaenbox" class="btn btn-link"><i class="fa fa-github fa-fw"></i> Github</a></li>
            <li><a href="https://es.linkedin.com/in/davidjaen" class="btn btn-link"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a></li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <div class="col-xs-12">
        <hr class="_footer"/>
        <p align="center">© 2016 David Jaén Revert</p>
    </div>

  <!-- Load js libs only when the page is loaded. -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <!-- Custom template scripts -->
</body>
</html>

<?php
// Funciones PHP del pin GPIO 17
 if ($_POST[encender17]) { 
 $a- exec("sudo sh /var/www/rele/gpio/17/enciende.sh");
 echo $a;
 }

 if ($_POST[apagar17]) { 
 $a- exec("sudo sh /var/www/rele/gpio/17/apaga.sh");
 echo $a;
 }
// Fin de las funciónes del pin GPIO 17
?>