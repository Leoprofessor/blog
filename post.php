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


	     <BR>
		<section id="bottom-title-news">
			<div class="card">
			  <div class="card-body" align="center">
			    <H1>POSTS</H1>
			  </div>
			</div>
	    </section>
	    <main role="main">


	    <br>
         <?php
             require("Model/conexao.php");
         $sql = mysqli_query($conexao,"SELECT cd_noticia as c,nm_noticia, nm_imagem_noticia,(SELECT LEFT(ds_noticia,100) FROM tb_noticia where cd_noticia=c) as ds_noticia from tb_noticia ORDER BY cd_noticia DESC") or die("Erro");


            ?><center>
          <div class="row" style="background-color:white; width: 100%;">
             <div class="album text-muted">
        		<div class="container-fluid">
        			<div class="row">
		          <?php
                  while($linha=mysqli_fetch_assoc($sql))
		            {
		        	?>
			            <div class="card col-md-5" style="margin-left:5%; margin-top: 10px;">
			              <img src="App/uploads/<?php echo $linha['nm_imagem_noticia']?>" style="height: 300px;" alt="Card image cap">
			              <h4 class="cad-title"><?php echo $linha['nm_noticia']?></h4>
			              <p class="card-text"><?php echo $linha['ds_noticia'];?></p>
			                <form action="App/leitor.php" method="get">
                    			<input type="hidden" name="id_noticia" value="<?php echo $linha['c']?>">
                    			<input type="submit" name="enviar" value="Ler Mais" class="btn btn-primary col-md-15">
                  			</form>
			            </div>
			       <?php
			         }
			      ?> 
	         		</div>
	         	</div>
	        </div>
	      </div>

	    </main>
   

      <br>
    </div>
    <footer class="footer">
    <center>
		  <div class="jumbotron jumbotron-fluid" style="background-color: black;">
			 <div class="container">
			  <div class="row">
			    <div class="col-md-12 col-sm-12">
			            <h4 class="text-white">Contato</h4>
	        		    <ul class="list-unstyled">
	              				<li><a href="https://www.facebook.com/leoprofessor" class="text-white">Facebook:Leoprofessor</a></li>
	              				<li class="text-white">Email: leoprofessor@gmail.com</li>
	              				<li><a href="https://github.com/Leoprofessor">GitHub:https://github.com/Leoprofessor</a></li>
	            		</ul>
	            </div>
			 </div>
		 </div>
		</div>
	</center>
    </footer>
    	<?php include('jquery_dep.php');?>
  </body>
</html>