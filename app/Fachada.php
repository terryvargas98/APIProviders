<?php
use App\SubSistemaA;
use App\SubSistemaB;
use App\Objeto;
namespace App;

class Fachada{


    
    protected SubSistemaA $SubSistemaA; 
    protected SubSistemaB $SubSistemaB;
     
    

    function mostrarDatos($valor){

    $SubSistemaA= new SubSistemaA();
    $SubSistemaB = new SubSistemaB();
    $Objeto = new Objeto();

    $Objeto->valor=$SubSistemaA->MostrarCambio($valor);
    $Objeto->referencia=$SubSistemaB->MostrarDatos();
    

    return $Objeto;

    

    }
}