<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio extends Controller
{
    //
    public function MatrizEjercicio(Request $request){

	    	$datoBusqueda = $request->input('datoBusqueda');
	    	$buscador = $request->input('buscador');

	    	$bandera=0;
	        
	    	$datos=[];

	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'11','pais'=>'Colombia','idioma'=>'Español Colombia'];

	      

	    	
	    	foreach ($datos as $key => $dato) {
	    		$bandera=0;
	    		foreach ($dato as $key => $value) {
	    			switch ($buscador) {
	    				case 'Nombres':
	    					if($key=="nombres"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo $value,"<br>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Apellidos':
	    					if($key=="apellidos"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo $value,"<br>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Edad':
	    					if($key=="edad"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo $value,"<br>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Pais':
	    					if($key=="pais"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo $value,"<br>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Idioma':
	    					if($key=="idioma"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo $value,"<br>";
						    		}
		    					}
		    				} 
	    					break;
	    				
	    				default:
	    					echo "No existe.";
	    					break;
	    			}
	    			
	    		}
	    		if($bandera==1){
	    		
		    		echo "<br>";
		    	}
	    	


	    }

	   	
	    return view('master');
	}

}
