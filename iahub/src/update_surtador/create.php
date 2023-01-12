<?php

include("../../db/conexao.php");
$nomeem = $_POST['surto'];


$result_usuarios  = $pdo-> prepare( "INSERT INTO `surtadores` (`id`, `surto`, `user`) VALUES (NULL, 'texto', $nomeem );");
$result_usuarios-> execute();



         



?>


