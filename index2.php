<?php include("../../conexao.php"); ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
 


<!DOCTYPE html>
<html lang="en">
<head>
<title>Match Cash</title>
<!-- for-mobile-apps -->
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



		<?php $resp = mysqli_query($link,"SELECT * FROM match_cash ORDER BY id");  ?>
		<?php 
			while($dado=$resp->fetch_array()){ 
				if($dado['id']==3){
					$sql=mysqli_query($link,"delete from match_cash where id=2"); 
					$sql=mysqli_query($link,"delete from match_cash where id=3"); 
				}
			} 	
			
		?>



<!-- //header -->
<header class="py-4">
	<div class="container">
			<div id="logo">
        <!-- <span class="fa fa-cloud" aria-hidden="true"></span>  -->
				<h1> <a href="index2.php"> MatchCash </a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars" aria-hidden="true"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class=""><a href="index2.php">Início</a></li>
				<li class=""><a href="#about">Sobre</a></li>
				<li class="">
				
			</ul>
			<div class="login-icon ml-lg-2">
			
			
			
			
				<a class="user" href="#popup3">Entrar</a>
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
					<h2>Conciliações Internacionais</h2>
					<p>Transformação das transações em experiências, conectando pessoas para um bem comum, unindo propósitos e sonhos.</p>
				</div>
				<a class="btn mr-2 text-capitalize" href="#popup1"> Saiba mais </a>
			</div>
			<div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
				<img src="images/capa54.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-lg-5 py-sm-3">
		<div class="row">
			<div class="col-lg-3 about-left">
				<h3 class="heading mb-lg-5 mb-4">Sobre nós</h3>
			</div>
			<div class="col-lg-5 col-md-7 about-text">
				<h3>Bem Vindo a MatchCash </h3>
				<p class="mt-3">Com o crescimento do mercado brasileiro de educação internacional temos hoje 365 Mil estudantes embarcando em um intercâmbio e prontos para uma experiência de vida diferente. E de tempos em tempos com a necessidade de transferir ou receber quantias em dinheiro de familiares ou amigos, utilizando o meio tradicional passam por um processo burocrático e demorado. Visando melhorar a experiência dos usuários nasce a MatchCash que constrói um cenário de confiança entre pessoas que não se conhecem e realiza uma conciliação transfronteiriça, transformando as transações em experiências, conectando pessoas e instituições em uma plataforma de impacto e responsabilidade social que interliga o público ao financeiro.</p>
			</div>
			<div class="col-lg-4 col-md-5 about-img">
				<img src="images/match_cash_001.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- why choose us -->
<section class="choose py-5" id="services">
	<div class="container py-md-3">
		<h3 class="heading mb-5"> O que nós fornecemos</h3>
		<div class="feature-grids row">
			<div class="col-lg-3 col-sm-6">
				<div class="f1 icon1 p-4">
					<div class="icon">
						<span class="fa fa-bandcamp"></span>
					</div>
					<h3 class="my-3">Eficiência</h3>
					<p>Operação 100% online, com conciliação automática por meio da inteligência artificial.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
				<div class="f1 icon2 p-4">
					<div class="icon">
						<span class="fa fa-codepen"></span>
					</div>
					<h3 class="my-3">Segurança</h3>
					<p>Utilização da estrutura do Blockchain para a criação de contratos inteligentes, proporcionando um ambiente confiável.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 icon3 p-4">
					<div class="icon">
						<span class="fa fa-cloud"></span>
					</div>
					<h3 class="my-3">Agilidade</h3>
					<p>Processo de transação simplificado que proporciona aos usuários praticidade e rapidez.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 icon4 p-4">
					<div class="icon">
						<span class="fa fa-btc"></span>
					</div>
					<h3 class="my-3">Economia</h3>
					<p>Ambiente financeiro mais justo, sem intermediários ou taxas abusivas.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top">
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

<!-- popup -->
<div id="popup1" class="popup-effect">
	<div class="popup">
		<img src="images/logo_match_cash_001.png" alt="Popup Image" class="img-fluid" />
		<p class="mt-4 ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
			laudantium, totam rem aperiam, eaque ipsa quae ab illo quasi architecto beatae vitae dicta
			sunt explicabo.</p>
		<a class="close" href="#">&times;</a>
	</div>
</div>

<!-- popup for login -->
<div id="popup3" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Entre no MatchCash</h5>
			<form action="Match_Cash_entrar.php" method="post">
				<div class="form-group">
				
					<label class="mb-2">Nome de Usuário</label>
					<input name='nome_usuario'  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" value='Gregor'>
				
					<label class="mb-2">Endereço de e-mail</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" value='grego_oliveira@gmail.com' >
					<small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos suas informações.</small>
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="" value='0980989080'>
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
			<h5 class="text-center mb-4">Dados do destinatário para Conciliação</h5>
			
			<form  method="post" action='Match_Cash_Cadastro_enviar.php'>
				<div class="form-group">
					<label>Nome</label>
					<input type="text" class="form-control" name='email_receber' placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Valor</label>
					<input type="text" class="form-control" name='valor_a_transferir' placeholder="" required="">
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
