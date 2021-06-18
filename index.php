<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cabesário</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
	<?php require('./assets/parcials/header.php') ?>

<section class="container-banner">
	<div class="titulo-banner">Bootstrap</div>
	<div class="desc-banner">Sleek, intuitive, and powerful front-end framework for faster and <br>easier web development.</div>
	<div class="download-button"><button>Download Bootstrap</button></div>
	<div></div>


</section>
<section class="direitos-autorais-bar">
	<div class="direitos-autorais">Todos os direitos devidamente reservados!</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

	$('header nav ul li').click(function(){
		$('header nav ul li').removeAttr('id','selected');
		$(this).attr('id','selected');
	})

</script>

</body>
</html>