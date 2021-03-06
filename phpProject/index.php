<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Moodle Project Sumare</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- build:css(.tmp) styles/main.css -->
	<link rel="stylesheet" href="styles/login.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/docs/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/docs/assets/css/bootstrap-responsive.css">
	<!-- endbuild -->

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="bower_components/bootstrap/docs/assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="bower_components/bootstrap/docs/assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="bower_components/bootstrap/docs/assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="bower_components/bootstrap/docs/assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="bower_components/bootstrap/docs/assets/ico/favicon.png">

	<!-- build:js scripts/vendor/modernizr.js -->
	<script src="bower_components/modernizr/modernizr.js"></script>
	<!-- endbuild -->
</head>
<body>
	<!--[if lt IE 10]> <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p> <![endif]-->
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="index.php">Project Moodle</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">Sobre</a></li>
						<li><a href="#contact">Contato</a></li>
					</ul>
					<form action="server/login.php" method="post" id="form_login" class="navbar-form pull-right">
						<input type="text" placeholder="Login" name="username" id="username" class="span2" />
						<input type="password" placeholder="Senha" name="password" id="password" class="span2" />
						<button type="submit" id="submitLogin" name="send" class="btn">Acessar</button>
					</form>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<h1>Objeto de Aprendizado EAD</h1>
			<p>Bem-vindo, a aplica&ccedil;&atilde;o web para aperfei&ccedil;oamento de seu conhecimento e aprendizado, baseado em acompanhamento autom&aacute;tico dos alunos, atraves da logica Fuzzy.</p>
			<p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		</div>

		<!-- Example row of columns -->
		<div class="row">
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; Objeto de Aprendizagem de Projeto 2013</p>
		</footer>

	</div> <!-- /container -->

	<!-- build:js scripts/vendor.js -->
	<!-- bower:js -->
	<script src="bower_components/jquery/jquery.js"></script>
	<!-- endbower -->
	<!-- endbuild -->

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>

	<!-- build:js scripts/main.js -->
	<script data-main="scripts/main" src="bower_components/requirejs/require.js"></script>
	<!-- endbuild -->
</body>
</html>