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
	
		<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
		<?php 
			while($dado=$resp->fetch_array()){ 
				if($dado['id']==2){
					$sql=mysqli_query($link,"delete from match_cash where id=1"); 
					$sql=mysqli_query($link,"delete from match_cash where id=2"); 
				}
			} 	
			
		?>

	
	
		<div class='container'>
			<div class='row'>
				<div class='col-md-6'>
									
					<h4> Envia </h4>
					<form class='form' method='post' action='Match_Cash_Cadastro_enviar.php'>
						Nome Completo: <input type='text' name='nome_envia' class='form-control'>
						CPF: <input type='text' name='cpf_envia' class='form-control'>
						Agência:<input type='text' name='agencia_envia' class='form-control'>
					
					<h4> Recebe </h4>
						Nome Completo: <input type='text' name='name_recebe' class='form-control'>
						CPF: <input type='text' name='cpf_recebe' class='form-control'>
						Agência:<input type='text' name='agencia_recebe' class='form-control'>
						<br>
						<strong>Valor a enviar:</strong><input type='text' name='valor_a_enviar' class='form-control'>
						<br>
						<input type='submit' value='MATCH' class='btn btn-success'>
					</form>

					
					</table>
	
				<div class='col-md-6'>
	
				</div>
			</div>
		</div>
	</div>
	
	</body>
	
</html>