<?php include("../conexao.php"); ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
 
<html>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<head>
	<title>Match Cash</title>
		<style>
			
		</style>
	</head>
	<body>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6'>
			
					<br>
					<H5>MATCH Found</H5>
					<br>
					<br>
			
					<table class='table table-striped'>
						<H5>Brasil</H5>
						<tr><th>Envia</th><th>Recebe</th><th>Valor</th></tr>
						<tr>
							<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
							<?php 
								while($dado=$resp->fetch_array()){ 
									if($dado['id']==1){
										echo "<td>".$dado['nome_envia']."</td><td>".$dado['nome_recebe']."</td><td>".$dado['valor_a_transferir']."</td>";
									}
								} 	
								
							?>
						</tr>
					</table>
						
					<table class='table table-striped'>			
						<H5>EUA</H5>					
						<tr><th>Envia</th><th>Recebe</th><th>Valor</th></tr>
						<tr>
							<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
							<?php 
								while($dado=$resp->fetch_array()){ 
									if($dado['id']==2){
										echo "<td>".$dado['nome_envia']."</td><td>".$dado['nome_recebe']."</td><td>".$dado['valor_a_transferir']."</td>";
									}
								} 	
								
							?>
						</tr>
						
					
					</table>
					
					
					
				
					
					
					
					
					<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
					<?php while($dado=$resp->fetch_array()){ $id = $dado['id']; } ?>
					
					
	
				<div class='col-md-6'>
	
				</div>
			</div>
		</div>
	</div>
	
	</body>
	
</html>