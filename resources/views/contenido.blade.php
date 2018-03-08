@extends('master')

@section('contenido')
   <font color="black" face="Lithos Pro">
			<br><br>
			<div class="container">
			  
			  	<blockquote>
			    <div class="col"><h1>Ejercicio de Busqueda</h1>
			    </blockquote>
			    	
					  <form action="{{url('Informacion')}}" method="POST">
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
@stop
