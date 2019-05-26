<?php include("../../conexao.php"); ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
 


<!DOCTYPE html>
<html lang="en">
<head>
<title>MatchCash</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Digital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>


<!-- //header -->
<header class="py-4">
	<div class="container">
			<div id="logo">
        <!-- <span class="fa fa-cloud" aria-hidden="true"></span>  -->
				<h1> <a href="index.html"> MatchCash </a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars" aria-hidden="true"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class=""><a href="index.html">Início</a></li>
				<li class=""><a href="#about">Sobre</a></li>
				<li class="">
				<!-- First Tier Drop Down -->
				<!-- <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
				<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
				<input type="checkbox" id="drop-2"/>
				<ul class="inner-ul">
					<li><a href="#process">Marketing Process</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#partners">Partners</a></li>
				</ul>
				</li>
				<!-- <li class=""><a href="team.html">Team Page</a></li> -->
				<li class=""><a href="#popup5">Transferência</a></li>
			</ul>
			<div class="login-icon ml-lg-2">
				<a class="user" href="#popup3"> Entrar</a>
			</div>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="container">
		<div class="row banner-text">
			<div class="slider-info col-lg-6">
				<div class="banner-info-grid mt-lg-5">
					
					<!-- <p>badbaolibdlabdlabd</p> -->
				</div>
				
				<!-- <a class="btn text-capitalize" href="#popup2">watch video </a> -->
			</div>
			<div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
				
					<H5>MATCH Found</H5> <br>
					
					<H6>Brasil -> EUA</H6>
					<table class='table table-striped'>
						<tr><th>Envia</th><th>Recebe</th><th>Valor</th></tr>
						<tr>
							<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
							<?php 
								while($dado=$resp->fetch_array()){ 
									if($dado['id']==1){
										echo "<td>".$dado['nome']."</td><td>".$dado['valor']."</td><td>";
									}
								} 	
								
							?>
						</tr>
						
					
					</table>
					
					<H6>EUA -> Brasil</H6>
					<table class='table table-striped'>
						<tr><th>Envia</th><th>Recebe</th><th>Valor</th></tr>
						<tr>
							<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
							<?php 
								while($dado=$resp->fetch_array()){ 
									if($dado['id']==2){
										echo "<td>".$dado['nome']."</td><td>".$dado['valor']."</td>";
									}
								} 	
								
							?>
						</tr>
						
					
					</table>
					
					
				
				
				
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- copyright -->
<!-- <div class="copy-right-top border-top">
	<p class="copy-right text-center py-4">&copy; 2019 Digital. All Rights Reserved | Design by
		<a href="http://w3layouts.com/"> W3layouts </a>
	</p>
</div> -->
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top">
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>




<!-- popup for login -->
<div id="popup3" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Entre no MatchCash</h5>
			<form action="#" method="post">
				<div class="form-group">
					<label class="mb-2">Endereço de e-mail</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
					<small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos suas informações.</small>
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
				</div>
				<button type="submit" class="btn btn-primary submit mt-2">Entrar</button>
				<p class="text-center mt-2">
					<a href="#popup4"> Não tem uma conta?</a>
				</p>
			</form>
		</div>

		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup for login -->

<!-- popup for register -->
<div id="popup4" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Cadastre-se Agora</h5>
			<form action="#" method="post">
				<div class="form-group">
					<label>Nome Completo</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Endereço de e-mail</label>
					<input type="email" class="form-control" id="validationDefault02" placeholder="" required="">
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" id="password1" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" id="password2" placeholder="" required="">
				</div>

				<a   href="#popup6" class="btn btn-primary submit">Próxima Página</a>
				<!-- <p class="text-center mt-3">
					<a href="#">Clicando aqui, você confirma com os termos de serviço.</a>
				</p> -->
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>

<div id="popup6" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Cadastre-se Agora</h5>
			<form action="#" method="post">
        <div class="form-group">
					<label>CPF</label>
					<input type="text" class="form-control" id="cpf1" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Banco</label>
					<input type="text" class="form-control" id="banco1" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Conta</label>
					<input type="text" class="form-control" id="conta1" placeholder="" required="">
				</div>
				<div class="form-group">
					<label class="mb-2">Agência</label>
					<input type="text" class="form-control" id="agencia1" placeholder="" required="">
				</div>
				<button type="submit" class="btn btn-primary submit">Registrar</button>
				<p class="text-center mt-3">
					<a href="#">Clicando aqui, você confirma com os termos de serviço.</a>
				</p>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>

<!-- //popup for register -->
<div id="popup5" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Dados do destinatário para transferência</h5>
			
			<form  method="post" action='Match_Cash_Cadastro_enviar.php'>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name='nome' placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Valor</label>
					<input type="text" class="form-control" name='' placeholder="" required="">
				</div>

				

				<button type="submit" class="btn btn-primary submit">MATCH</button>
				<!-- <p class="text-center mt-3">
					<a href="#">Clicando aqui, você confirma com os termos de serviço.</a>
				</p> -->
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
</body>
</html>
