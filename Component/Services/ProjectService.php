<?php

namespace Component; 
use App\Project;

class ProjectService {


    function Create ($Project){

        Project::create($Project);

    }
    function validate($Project){
       $Project=request()->validate([
            'Nombre'=>'required',
            'Description'=>'required',
            'Autor'=>'required',
        ]);
        return $Project;
    }
}