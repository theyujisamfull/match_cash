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
						
						<tr>
							<td>
							<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
							<?php 
							
								while($dado=$resp->fetch_array()){  echo $dado['nome'];} 	
								
							?>
						
							</td>
						</tr>
					
					</table>
	
				<div class='col-md-6'>
	
				</div>
			</div>
		</div>
	</div>
	
	</body>
	
</html>