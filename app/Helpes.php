<?php 
function LinkActive($Ruta){

    return request()->routeIs($Ruta) ? 'active' : '';


}
function Devolver($d){
    return $d;
}



