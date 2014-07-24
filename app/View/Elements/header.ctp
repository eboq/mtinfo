<!DOCTYPE html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/templatemo_justified.css" rel="stylesheet">
</head>

<body>
	<div id="container" class="container">

		<img src="images/templatemo_header.jpg">
		<ul class="nav nav-justified">
	<?php 
	$arr = $this->requestAction('/users/getRole');
	
	if( $arr === 'admin' ){

			echo '<li><a href="/mtinfo/users">Inicio</a></li>';
			echo '<li><a href="/mtinfo/alunos">Alunos</a></li>';
			echo '<li><a href="/mtinfo/professors">Professores</a></li>';
			echo '<li><a href="/mtinfo/pacientes">Pacientes</a></li>';
			echo '<li><a href="/mtinfo/formularios">Formulários</a></li>';
			echo '<li><a href="/mtinfo/campos">Campos</a></li>';
	}	
	else if ( $arr === 'professor' ){
		echo '<li><a href="/mtinfo/users">Inicio</a></li>';
		echo '<li><a href="/mtinfo/alunos">Alunos</a></li>';
		echo '<li><a href="/mtinfo/pacientes">Pacientes</a></li>';
	}
	else if ( $arr === 'aluno' ){
		echo '<li><a href="/mtinfo/users">Inicio</a></li>';
		echo '<li><a href="/mtinfo/pacientes">Pacientes</a></li>';
	}
	echo '<li><a href="/mtinfo/users/logout">Sair</a></li>';
	?>
	</ul>

