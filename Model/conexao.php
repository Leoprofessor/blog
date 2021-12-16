<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'db_postagens');
mysqli_set_charset($conexao,'utf8');
if(!$conexao){
    die('Não foi possível conectar ao banco.Erro detectado:'.mysql_error());
}
//mysql_set_charset('utf8',$conexao);

