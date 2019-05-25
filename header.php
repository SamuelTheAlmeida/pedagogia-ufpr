<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pedagogia - UFPR</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<!-- include the calendar js and css files -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/zabuto_calendar/1.6.4/zabuto_calendar.css">
</head>

<body>
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar">
        <div class="sidebar-header">
            <h3><img class="pedagogia-icon" src="res/pedagogia-icon.svg" width= "40px";> Pedagogia</h3>
        </div>
        <ul class="list-unstyled">
        	<li class="px-5 py-2">
        		<img class="img-fluid" src="http://www.pedagogia.ufpr.br/imagens/logo_Setor_31302017.png">
        	</li>
            <li class="active">
                <a href="#">Ementa</a>
            </li>
            <li>
                <a href="#">Banco de TCCs</a>
            </li>
            <li>
				<a href="#">Estágios</a>
            </li>
            <li>
                <a href="#">Projeto Pedagógico</a>
            </li>
            <li>
                <a href="#">Ensalamento</a>
            </li>
        </ul>	
        <ul class="list-unstyled">
            <li class="">
                <a href="#linksSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Links importantes</a>
                <ul class="collapse list-unstyled" id="linksSubmenu">
                    <li>
                        <a href="#">Pedagogia EAD</a>
                    </li>
                    <li>
                        <a href="#">Portal do Aluno</a>
                    </li>
                    <li>
                        <a href="#">PRAE</a>
                    </li>
                </ul>

            </li>
        </ul>       	
		</nav>

		<!-- Page Content -->
		<div id="content">
			<nav class="navbar navbar-dark bg-primary navbar-expand-md py-md-2" id="menu-horizontal">
				<a class="nav-link" href="#">Sobre o curso</a>
					<ul class="navbar-nav">
						<li class="nav-item py-md-2"><a href="#" class="nav-link">Secretaria</a></li>
						<li class="nav-item py-md-2"><a href="#" class="nav-link">COE (Estágios)</a></li>
					</ul>
				<form class="form-inline my-2 my-lg-0 ml-auto">
				   <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
	              <div class="input-group-append bg-dark">
	                <button class="btn btn-outline-secondary text-light" type="button"><i class="fas fa-search"></i></button>
	              </div>
			    </form> 	
			</nav>
				<div class="row mx-0 my-3">
					<div class="col-lg-12">
						<img class="img-topo" src="https://4.bp.blogspot.com/-iVLhvCxT5k4/V081nO0o6nI/AAAAAAAAAhk/FOOIU5ysGgwJEhzDoQxQUhQJ_1MhdqWFwCLcB/s1600/paranagua1.jpg">
						<h1 class="titulo-pagina text-center">
							<?php
                                if (ISSET($tituloPagina)) {
                                    ECHO $tituloPagina;
                                }
                            ?>
						</h1>
					</div>
				</div>
			<div class="container my-1 conteudo py-1 px-4 text-center">
				<div class="row">
					<div class="col-lg-9">
						<div class="jumbotron">