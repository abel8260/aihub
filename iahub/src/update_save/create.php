<?php

include("../../db/conexao.php");
$nomeem = $_POST['nomeem'];


$result_usuarios  = $pdo-> prepare( "INSERT INTO `ias` (`id`, `nom`, `id_bck`, `id_fav`, `id_surt`) VALUES (NULL, '$nomeem', '0', '0', '0');'");
$result_usuarios-> execute();



         



?>


