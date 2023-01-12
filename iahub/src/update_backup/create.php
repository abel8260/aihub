<?php

include("../../db/conexao.php");
$nomeem = $_POST['nomeem'];


$result_usuarios  = $pdo-> prepare( "INSERT INTO `backupia` (`id`, `backup`, `photocard`, `consulta`, `médico`, `lifebck2`, `exbck2`, `musica`, `relamigas`, `relfilhas`, `tectechvelocity`, `nomm`) VALUES (NULL, 'backup0', '...', '', 'nnn', 'n voltas', 'exemplo', 'blight', '3', '1', 'takions', '$nomeem');");
$result_usuarios-> execute();


	$sth=$pdo->prepare("SELECT count(*) AS total  FROM 'backup-ia'  where nomm= '$nomeem' AND senha=  '$senhaa'");



			$sth->execute();


			echo $sth ->rowCount();
			  var_dump($sth); 
			$row = $sth ->rowCount();

			  echo $sth ->rowCount();
			  var_dump($sth);


					if($row >= 1){

		 $_SESSION['number_backup_ia'] = $usuario ;
		 
         



?>


