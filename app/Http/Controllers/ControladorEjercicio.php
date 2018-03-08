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

	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'23','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Juan','apellidos'=>'Enriquez','edad'=>'31','pais'=>'España','idioma'=>'Español España'];
	    	$datos[]=['nombres'=>'Maria','apellidos'=>'Mora','edad'=>'21','pais'=>'Colombia','idioma'=>'Ingles'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'17','pais'=>'Chile','idioma'=>'Japones'];
	    	$datos[]=['nombres'=>'Mario','apellidos'=>'Martinez','edad'=>'43','pais'=>'Argentina','idioma'=>'Español Argentino'];
	    	$datos[]=['nombres'=>'Mario','apellidos'=>'Sandoval','edad'=>'17','pais'=>'Colombia','idioma'=>'Español Colombia'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Moreno','edad'=>'36','pais'=>'Mexico','idioma'=>'Español Mexico'];
	    	$datos[]=['nombres'=>'Juan','apellidos'=>'Mora','edad'=>'23','pais'=>'Mexico','idioma'=>'Español Mexico'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Martinez','edad'=>'50','pais'=>'Chile','idioma'=>'Español Chile'];
	    	$datos[]=['nombres'=>'Anival','apellidos'=>'Sandoval','edad'=>'54','pais'=>'Brazil','idioma'=>'Portugues'];

	      

	    	$info=[
	    		'datos'=>$datos,
	    		'buscador'=>$buscador,
	    		'datoBusqueda'=>$datoBusqueda
	    	];
	    	

	   	
	    return view('contenido2',$info);
	}

}
