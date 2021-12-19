<?php
session_start();
include('Controller/verifica_login.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Projeto emprego">
    <meta name="author" content="Leo">
    <meta name="description" content="">
    <title>SISTEMA DE BLOG</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-image: url('b1.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	  <header>
	  <div class="container">
          <?php include("menu.php");?>

          <h2><a href="logout.php">Sair</a></h2>

			</div>
		</header>

		<div class="container-fluid col-md-11 col-sm-12">
		<section id="top-title">
		<br><br><br>
			<div class="card">
			  <div class="card-body">
			    <H2 class="display-4">BLOG DO LÉO</H2>
              </div>
			</div>
		</section>
		<br>
		<section id="about">
			<div class="jumbotron">

		  <p class="lead">Blog criado para postar conteúdo de tecnologia da informação. Se você é entusiasta dessa área colabore compartilhando informação. Somos eternos estudantes da ciência da informação.
          </p>
		  <hr class="my-6">

		</div>
		</section>
	     <BR>

	</center>
    </footer>
    	<?php include('jquery_dep.php');?>
  </body>
</html>