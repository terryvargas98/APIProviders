<?php

namespace App;

 class SubSistemaA {

    public function __construct() {
       
    }
    function MostrarCambio($valor){

        $url="https://api.cambio.today/v1/quotes/USD/PEN/json?quantity=".$valor."&key=4791|vRgaaZB~ZgXDFdmeqgH3caT~0Z8ZYk1b";
        $json =\file_get_contents($url);
        $Resultado = \json_decode($json,true); 

        return $Resultado;
  
    }



}




