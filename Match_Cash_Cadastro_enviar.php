<?php include("../../conexao.php"); ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
 
<html>
	<head>
		<script type="text/javascript"> function back(){  setTimeout("window.location='Match_Cash_match.php'",1);  } </script>
	</head>
	<body>


	
<?php 	

	$resp = mysqli_query($link,"SELECT * FROM match_cash  ORDER BY id  "); 
	while($dado=$resp->fetch_array()){  $id = $dado['id']+1;	
		$id_last = $dado['id'];
		
		
	if($id==4){
		$email_enviar = $dado['nome'];
		$agencia_enviar = $dado['agencia'];
		$banco_enviar = $dado['banco'];
		$cpf_enviar = $dado['cpf'];
	}
	
	}
	
	$email_receber = $_POST['email_receber'];
	$valor_a_transferir = $_POST['valor_a_transferir'];
	
	
	$sql=mysqli_query($link,"INSERT INTO match_cash VALUES('$id', '0' , '0','0','0','0','$email_enviar','$email_receber','$cpf_enviar','0','$agencia_enviar','0','$banco_enviar','0')"); 
	
		if ($sql){echo "enviado";}
		else{echo "não enviado";}
		echo "<script> back()</script>";
	?>
	

	
	</body>
	
</html>