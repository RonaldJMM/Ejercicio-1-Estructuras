@extends('master')

@section('contenido')
	<table class="table table-dark">
	  <thead>
	    <tr>
	      
	      <th scope="col">Nombres</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Edad</th>
	      <th scope="col">Pais</th>
	      <th scope="col">Idioma</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach ($datos as $key => $dato) {
   			echo "<tr>";
	    		$bandera=0;
	    		foreach ($dato as $key => $value) {
	    			switch ($buscador) {
	    				case 'Nombres':
	    					if($key=="nombres"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Apellidos':
	    					if($key=="apellidos"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Edad':
	    					if($key=="edad"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Pais':
	    					if($key=="pais"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Idioma':
	    					if($key=="idioma"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				} 
	    					break;
	    				
	    				default:
	    					echo "No existe.";
	    					break;
	    			}
	    			
	    		}
	    		
	    	

		    	echo "</tr>";
	    }
	    ?>
	  </tbody>
	</table>

@stop