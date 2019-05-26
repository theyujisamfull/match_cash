<?php include("../../conexao.php"); ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
 
<html>
	<head>
		<script type="text/javascript"> function back(){  setTimeout("window.location='Match_Cash_match2.php'",1);  } </script>
	</head>
	<body>


	
<?php 	

	$resp = mysqli_query($link,"SELECT * FROM match_cash  ORDER BY id  "); 
	while($dado=$resp->fetch_array()){  $id = $dado['id']+1;		}

	
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	
	
	$sql=mysqli_query($link,"INSERT INTO match_cash VALUES('$id', '$nome' , '$valor')"); 
	
		if ($sql){echo "enviado";}
		else{echo "não enviado";}
		echo "<script> back()</script>";
	?>
	

	
	</body>
	
</html>