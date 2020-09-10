<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;
use Component\ProjectService;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  ProjectService $ProjectService;

    public function Create(Request $request)
    {
        $Project=new Project();
        $ProjectService=new ProjectService();
        $Project=$ProjectService->validate($Project);
        $ProjectService->Create($Project);
        return redirect()->route('ShowProject')->with('status','Projecto creado con exito');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Projects = Project::paginate(15);

        return view('ShowProject',compact('Projects'));
        //
    }
    public function ShowElements(Project $Project)
    {
       
       

        return view('Elements',compact('Project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditProject(Project $Project)
    {

       

        return view('EditProject',compact('Project'));

    }

    public function UpdateProject(Project $Project)
    {

        request()->validate([
            'Nombre'=>'required',
            'Description'=>'required',
            'Autor'=>'required',
        ]);
         $Project->update([
                'Nombre'=>request('Nombre'),
                'Description'=>request('Description'),
                'Autor'=>request('Autor'),
               
            ]);

          
        return redirect()->route('ShowProject',$Project)->with('status','Projecto editado con exito')   ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DeleteProject(Project $Project)
    {
        $Project->delete();


        return redirect()->route('showproject');
    }

    public function api (){
        $url="https://deperu.com/api/rest/cotizaciondolar.json";
        $json =\file_get_contents($url);
        $Resultado = \json_decode($json,true);

        return ($Resultado);
    }
}
