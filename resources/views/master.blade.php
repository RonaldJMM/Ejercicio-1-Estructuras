<!DOCTYPE html>
<html>
	
	<head>
		
		<title> Introducción </title>
		<!-- css boostrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  
	</head>

	<body background="imagenes/fondos/degrade ocuro.jpg" link="#ffffcc" vlink="#ffffcc" alink="#ffffcc">
			<center>
			<font color="white" face="Lithos Pro">
			<h1>
			<b> 
				<?php 
					echo "Medios De Comunicación";
				?>
			</b>	
			</h1>
			</font>
			</center>
			</p>
			</p>
			<br>
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<center>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					    
					      <img class="d-block w-1" src="imagenes/fondos/medios1.png" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-1" src="imagenes/fondos/medios2.png" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w--34" src="imagenes/fondos/medios3.png" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					  </center>
					</div>
					<br><br>
				<center>
						<a href="http://localhost/ProyectoI/public/index"><button type="button" class="btn btn-secondary">Inicio</button></a>
						&nbsp;&nbsp;
						<a href="http://localhost/ProyectoI/public/definicion"><button type="button" class="btn btn-secondary">Definición</button></a>
						&nbsp;&nbsp;
						<a href="http://localhost/ProyectoI/public/clasificacion"><button type="button" class="btn btn-secondary">Clasificación</button></a>
						&nbsp;&nbsp;
						<a href="http://localhost/ProyectoI/public/tipos"><button type="button" class="btn btn-secondary">Tipos</button></a>
						&nbsp;&nbsp;
						<a href="http://localhost/ProyectoI/public/medios"><button type="button" class="btn btn-secondary">Medios</button></a>

					</center>
		<div class="container-fluid">
		 	
			<font color="black" face="Lithos Pro">
			<br><br>
			<div class="container">
			  
			  	<blockquote>
			    <div class="col"><h1>Ejercicio de Busqueda</h1>
			    </blockquote>
			    	
					  <form action="{{ url('Informacion')}}" method="post">
					  	{{csrf_field()}}

					  	<label for="buscador">Selecionar: </label><br>

					    <select class="custom-select my-1 mr-sm-2" class="border border-dark"name="buscador">
					      <option>Nombres</option>
					      <option>Apellidos</option>
					      <option>Edad</option>
					      <option>Pais</option>
					      <option>Idioma</option>
					    </select>	
					  	<br><br>
					  	<input type="text" name="datoBusqueda" class="border border-dark" class="rounded">
					  	<br><br><button type="submit" class="btn btn-primary">Enviar</button>
					  </form>
			</div>
			</font>
			
		</div>
		

        <div class="container">
            @yield('content')
        </div>
		<!-- js boostrap -->
		 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>


</html>