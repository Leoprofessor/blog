<!doctype html>
<html lang="pt-br">
    <head>
        <title>Montar Notícias</title>
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

    <body >
    <div class="container-fluid col-md-11 col-sm-12">
        <section id="top-title">
            <br><br><br>
            <div class="card">
                <div class="card-body">
                    <H2 class="display-4">Cadastrar Posts</H2>



        <div class="container">
          <?php include("menuAdm.php");?>
            <div class="formularioCriacao">
                <center> <h1 class="page-header"></h1></center>
                <!--O enctype é necessário pra realizar o upload-->
                <form class="form-horizontal" method="POST" action="criarNoticia.php" enctype="multipart/form-data" name="upload">
                    <div class="form-group">
                      <label class="col-sm-12 control-label" style="margin-top: 3%;"><h3>Titulo do Post</h3></label>
                      <div class="col-sm-8">
                        <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Digite o título do post">
                      </div>
                    </div>
                      <div class="form-group">
                          <!--Realizando Upload de Imagem da enquete-->
                      <label class="col-sm-12 control-label"><h4>Imagem</h4></label>
                      <div class="col-sm-8">
                      <!--Estou usando o required para deixar obrigatório toda vez que for carregar uma nova enquete o uso de imagens-->
                      <input class="form-control" type="file" required name="img">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12 control-label"><h4>Conteúdo da Post</h4></label>
                      <div class="col-sm-8">
                          <textarea class="form-control" rows="5" cols="4"  id="conteudo" name="conteudo" placeholder="Digite o conteúdo do post"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                          <!--Com a execução do botão criar o titulo e o conteudo do post serão armazenados no banco de dados na tb_enquete. De lá, o site poderá acessar as enquetes existentes e carregar na pagina-->
                          <button type="submit" class="btn btn-primary" name="upload">Criar</button>
                      </div>
                    </div>
              </form>
            </div>
<div class="centralTabela">
             <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                    <th>#</th>   
                    <th>Título</th>
                    <th>Ações</th>
                </thead>
              <tbody>                      
                <?php
                 //Chamando banco de dados
                 require("../Model/conexao.php");
                 $sql = mysqli_query($conexao,"SELECT * FROM tb_noticia ORDER BY cd_noticia DESC") or die("Erro");
                //pegando os dados da tabela. Executando query
                while($linha=mysqli_fetch_assoc($sql))
                {

                   echo '<tr>';                  
                       echo  '<td>'.$linha['cd_noticia'].'</td>';
                       echo  '<td>'.$linha['nm_noticia'].'</td>';  
                       //Ações                                      
                       echo  "<td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[cd_noticia]'> Mostrar</button>&nbsp<button type='button' class='btn btn-sm btn-warning' data-toggle='modal' data-target='#editar$linha[cd_noticia]'>Editar</button>&nbsp<button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#apagar$linha[cd_noticia]'>Deletar</button>&nbsp</td>";
                                                           
                  echo "</tr>";
                  ?>
                 <!--Inicio Modal visualizar-->
                  <div class="modal fade" id="myModal<?php echo $linha['cd_noticia'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <center><h3 class="modal-title" id="myModalLabel"> Post <?php echo $linha['cd_noticia'];?></h3></center>
                        </div>
                        <div class="modal-body">
                            <h4><b>imagem:</b><img src="../App/uploads/<?php echo $linha['nm_imagem_noticia'];?>" width="100%"height="20%"><br><br>
                         <b>Conteúdo:</b><?php echo $linha['ds_noticia'];?><br><br>
                        <!--<b>Data Evento:</b><?php //echo $linha['dt_insercao'];?><br><br>-->             
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
<!--fim modal visualizar-->
<!--Inicio Modal editar-->
                    <div class="modal fade" id="editar<?php echo $linha['cd_noticia'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <center><h3 class="modal-title" id="myModalLabel"> Post <?php echo $linha['cd_noticia'];?></h3></center>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" method="POST" action="editarNoticia.php" enctype="multipart/form-data" name="upload">
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label" style="margin-top: 3%;" ><h3>Titulo do Post</h3></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="titulo" name="titulo" value="<?php echo $linha['nm_noticia'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!--Realizando Upload de Imagem da enquete-->
                                            <label class="col-sm-12 control-label"><h4>Imagem</h4></label>
                                            <div class="col-sm-8">
                                                <!--Estou usando o required para deixar obrigatório toda vez que for carregar uma nova enquete o uso de imagens-->
                                                <input class="form-control" type="file"  name="img">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label"><h4>Conteúdo da Post</h4></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="5" cols="4"  id="conteudo" name="conteudo" value="<?php echo $linha['ds_noticia'];?>" ><?php echo $linha['ds_noticia'];?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <!--Com a execução do botão criar o titulo e o conteudo do post serão armazenados no banco de dados na tb_enquete. De lá, o site poderá acessar as enquetes existentes e carregar na pagina-->
                                                <input type="hidden" name="cd_noticia" value="<?php echo $linha['cd_noticia'];?>" readonly>
                                                <button type="submit" class="btn btn-primary" name="upload">Editar</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fim modal editar-->
                    <!--Inicio Modal deletar-->
                  <div class="modal fade" id="apagar<?php echo $linha['cd_noticia'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <form action="deletarNoticia.php" method="post">
                         <span aria-hidden="true">Tem certeza?</span><br>
                                  <span aria-hidden="true"><input type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close" value="CANCELAR"></button></span>&nbsp;
                                <span aria-hidden="true"><input type="submit" class="btn btn-default" value="APAGAR"></span>

                          <center><h3 class="modal-title" id="myModalLabel"> Post <?php echo $linha['cd_noticia'];?></h3></center>
                        </div>
                          <div class="modal-body">
                              <h4><b>imagem:</b><img src="../App/uploads/<?php echo $linha['nm_imagem_noticia'];?>" width="100%"height="20%"><br><br>
                                  <b>Conteúdo:</b><?php echo $linha['ds_noticia'];?><br><br>
                                  <!--<b>Data Evento:</b><?php //echo $linha['dt_insercao'];?><br><br>-->
                          </div>
                        <div class="modal-footer">

                            <input type="hidden" name="del_noticia" value="<?php echo $linha['cd_noticia'];?>" readonly>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
<!--fim modal deletar-->
                      <?php
                }

              ?>
            </tbody>
          </table>
          </div>
          <!--Fechando centralTabela-->

 <!--Fechando o "Container principal"-->
            </div>
        </div>
    </div>
</section>
<?php include('../jquery_dep.php');?>      
</body>    
</html>