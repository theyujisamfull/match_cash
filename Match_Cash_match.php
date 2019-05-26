<?php include("../../conexao.php"); ?>
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
			
					<table class='table table-striped'>
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
					
					
					
					<BR>
					<BR>
					<H5>Aguardando MATCH...</H5>
					
					<script type="text/javascript"> 
						
					setTimeout( function(){window.location.reload(1)},1000 ) ;
					
					function match_found(){
						setTimeout("window.location='Match_Cash_deu_match.php'",1); 
					}
						
					</script>
					
					
					<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
					<?php while($dado=$resp->fetch_array()){ 
					
						if($dado['id']==2){
							echo "<script> match_found(); </script>";
						}
					
					
					
					
					} ?>
					
					
	
				<div class='col-md-6'>
	
				</div>
			</div>
		</div>
	</div>
	
	</body>
	
</html>