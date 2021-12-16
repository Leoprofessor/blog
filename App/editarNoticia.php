<?php
    $cd_noticia = $_POST['cd_noticia'];
	$titulo = $_POST['titulo'];
	$conteudo = $_POST['conteudo'];
	$pasta='uploads';
	$permitido=array('image/jpg','image/jpeg','image/pjpeg');
	$img=$_FILES['img'];
	$tmp=$img['tmp_name'];
	$name=$img['name'];
	$type=$img['type'];
		include("../Model/conexao.php");

		require('funcao.php');



		if(!empty($name) && in_array($type, $permitido)){
		    $nome='img-'.md5(uniqid(rand(),true)).'.jpg';
		    upload($tmp,$nome,500,$pasta);
		   //alterando dados

            $queryUpdate = mysqli_query($conexao,"UPDATE tb_noticia SET nm_imagem_noticia= '$nome', nm_noticia ='$titulo',ds_noticia='$conteudo' WHERE cd_noticia=$cd_noticia");


		      
		}else{
            $queryUpdate = mysqli_query($conexao,"UPDATE tb_noticia SET nm_noticia ='$titulo',ds_noticia='$conteudo' WHERE cd_noticia=$cd_noticia");

		}

 header("Location:./montador.php");
 ?>