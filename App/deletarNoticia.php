<?php
    $id=$_POST['del_noticia'];

    include("../Model/conexao.php");

$sql = "delete from tb_noticia where cd_noticia='$id'";

if ($conexao->query($sql) === TRUE) {
    header("Location:montador.php");
} else {
    echo "Error deleting record: " . $conexao->error;
}