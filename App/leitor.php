<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Projeto emprego">
    <meta name="author" content="Leo">
    <meta name="description" content="Página com as noticias Cadastradas">
      <title>Notícias Cadastradas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-image: url('../b1.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
  <?php include('menuAdm.php');?>
  <div class="container" style="margin-top: 10%;">
    <?php
    $id=$_GET['id_noticia'];

    require("../Model/conexao.php");
    $sql = mysqli_query($conexao,"SELECT * FROM tb_noticia where cd_noticia = '$id'") or die("Erro");
    //pegando os dados da tabela. Executando query
    while($linha=mysqli_fetch_assoc($sql))
    {


            ?>

         <!-- START THE FEATURETTES -->
        <section id="news" style="background-color: white; padding: 20px;">
          <div class="row featurette">
            <div class="col-md-7" id='<?php echo $linha['nm_noticia']?>'>
              <h1 class="featurette-heading"> <?php echo $linha['nm_noticia']?></h1>
              <hr>
              <p class="lead"><?php echo $linha['ds_noticia'];?></p>
            </div>
            <div class="col-md-5 col-sm-12">
             <?php echo "<img class='featurette-image img-fluid mx-auto' style='max-height:300px; min-width: 90%;' src='../App/uploads/".$linha['nm_imagem_noticia']."'>";?>
            </div>
          </div>
        </section>
      <?php
        }
      ?> 
</div>
</body>
</html>
