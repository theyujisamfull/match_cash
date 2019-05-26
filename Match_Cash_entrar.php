<?php include("../../conexao.php"); ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
 
<html>
	<head>
		<script type="text/javascript"> function back(){  setTimeout("window.location='Tela_de_transferencia.php'",1);  } </script>
	</head>
	<body>


	
<?php 	

	$resp = mysqli_query($link,"SELECT * FROM match_cash  ORDER BY id  "); 
	while($dado=$resp->fetch_array()){  $id = $dado['id']+1;	}

	$nome_usuario = $_POST['nome_usuario'];
	
	
	$sql=mysqli_query($link,"INSERT INTO match_cash VALUES('$id', '0' ,'0','0','0','0','0','0','0','0','0','0','0','$nome_usuario')"); 
	
		if ($sql){echo "enviado";}
		else{echo "não enviado";}
		echo "<script> back()</script>";
	?>
	

	
	</body>
	
</html>