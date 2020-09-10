<?php
namespace App;
class SubSistemaB{

   function MostrarDatos() {
    $url="https://deperu.com/api/rest/cotizaciondolar.json";

    $json=file_get_contents($url);

    $array = json_decode($json,true);
    return $array;
   }
}