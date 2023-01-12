<?php

include("../../db/conexao.php");
$nomeem = $_POST['nomeem'];
$textoo = $_POST['textoo'];

$result_usuarios  = $pdo-> prepare( "INSERT INTO `favtb` (`id`, `fav`, `user`) VALUES (NULL, '$textoo','$nomeem');");
$result_usuarios-> execute();



         



?>


