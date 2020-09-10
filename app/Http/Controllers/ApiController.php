<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fachada;
class ApiController extends Controller
{
    
    protected Fachada $MiFachada ;
    
    
    
    function MostrarVista(){
        
       return view('FormApi');
       
    }

    function Calcular(Request $request){
       $MiFachada= new Fachada();
            $Resultado = $MiFachada->MostrarDatos(request('valor'));
               return view('ValorMostrado',compact('Resultado')) ; 
    
    }

}

