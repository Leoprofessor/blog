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
    <meta name="description" content="Páginal Inicial de Apresentação">
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
			    <H2 class="display-4"> SISTEMA DE BLOG</H2>
			    <H3 class="lead">Desenvolvido por Leo</H3>
			  </div>
			</div>
		</section>
		<br>
		<section id="about">
			<div class="jumbotron">
		  <h2 class="display-4">Teste para emprego</h2>
		  <p class="lead">Desenvolva um pequeno sistema de blog utilizando arquitetura MVC o projeto deve conter as seguintes características:<br>

              Sistema de rotas para acessar a página inicial, página de post e página administrativa, e outras se achar necessário.<br>

              Sistema de gerenciamento de permissões (ACL).<br>

              Usuário Visitante e administrador (CRUD).<br>

              Gerenciamento dos posts (CRUD).<br>

              Sistema de backup, o sistema deve permitir gerar um dump da base por dentro do painel administrativo.<br>
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