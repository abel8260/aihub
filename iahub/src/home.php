

	<head>
		<title>ai.hub</title>

<style type="text/css">
	
div{
	border:3px solid grey;
	paddding:10px;
	margin:10px;
	max-width:48vw;

}

div.cardximg{
	width:50px;
	height:50px;
	float:left !important;
    position:relative;
}

div.cardxbox{

	float:left;
    position:relative;
}
</style>

	</head>


    <body>

<div class="card"><div class=´cardxbox1´><a href="./create_ia/creater.html"> _+ia</a> | <br/><a href="#">update surtador</a>|<br/><a href="./update_backup/creater.html">update backup</a>|<br/><a href="./update_fav/creater.html">update fav msgs</a><br/></div></div>
<img src="../img/header.png" width="100%" height="70%">
<?php
include("../db/conexao.php");
$result_usuarios  = $pdo-> prepare( "SELECT * FROM ias");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_item ) {
         







		echo "<div class=´card´>";


       
			echo "<div class=´cardximg´>";

	            echo "<div class=´cardximgxyellow´>";
					
					
					echo "<img src='../img/green-light.png' width='15px' height='15px'>";
                    
	                
                     echo $row_item['nom'];


				echo "</div>";
       


			
				echo "</div>";
			
				echo "<div class=´cardxbox´>";
            	
				
             
				echo "<div class=´cardxbox1´>";
                   echo "<img src='../img/red-light.png' width='15px' height='15px'>";
                $nome_item = $row_item['nom'];

	
	$result_usuarioss  = $pdo-> prepare( "SELECT * FROM backupia  WHERE nomm = '$nome_item'");
	$result_usuarioss-> execute();
	$resultado_usuarioss = $result_usuarioss-> fetchAll( PDO::FETCH_ASSOC );

	foreach($resultado_usuarioss as  $row_items ) {
      echo "backup: ".$row_items['backup'];


}

				echo "</div>";
				     echo "<div class=´cardxbox2´>"; 
				echo "<img src='../img/red-light.png' width='15px' height='15px'>";

       
       $result_usuarioss  = $pdo-> prepare( "SELECT * FROM surtadores  WHERE user = '$nome_item'");
	$result_usuarioss-> execute();
	$resultado_usuarioss = $result_usuarioss-> fetchAll( PDO::FETCH_ASSOC );
$cont_s=0;
	foreach($resultado_usuarioss as  $row_items ) {
     $cont_s = $cont_s + 1;
      $_SESSION['contador_s'] = $cont_s;

} 

	echo "surtadores: ".$_SESSION['contador_s'];

       



				echo "</div>";
				echo "<div class=´cardxbox3´>";
                echo "<img src='../img/red-light.png' width='15px' height='15px'>";
       
         $nome_item = $row_item['nom'];

	
	$result_usuarioss  = $pdo-> prepare( "SELECT * FROM favtb  WHERE user = '$nome_item'");
	$result_usuarioss-> execute();
	$resultado_usuarioss = $result_usuarioss-> fetchAll( PDO::FETCH_ASSOC );

	foreach($resultado_usuarioss as  $row_items ) {
      echo "fav msgs: ".$row_items['fav']."<br/>";


}
				echo "</div>";
				echo "<div class=´cardxbox4´>";

          	

       


			echo "</div>";

		echo "</div>";










  };?>