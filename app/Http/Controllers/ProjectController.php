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

        return view('showproject',compact('Projects'));
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

    public function api ($ruc){
         $arreglo =  array(
            ['ruc'=>'1790085783001','SancionesPorObraNC'=>'True','familiaresAutoridades'=>'False','FamiliaresCongresistas'=>'False','NoRegistradoComoProvedor'=>'False','NoDedicadoARubro'=>'True'],
            ['ruc'=>'1790085783002','SancionesPorObraNC'=>'False','familiaresAutoridades'=>'False','FamiliaresCongresistas'=>'False','NoRegistradoComoProvedor'=>'True','NoDedicadoARubro'=>'False'],
            ['ruc'=>'1790085783003','SancionesPorObraNC'=>'True','familiaresAutoridades'=>'True','FamiliaresCongresistas'=>'False','NoRegistradoComoProvedor'=>'False','NoDedicadoARubro'=>'True'],
            ['ruc'=>'1790085783004','SancionesPorObraNC'=>'False','familiaresAutoridades'=>'False','FamiliaresCongresistas'=>'True','NoRegistradoComoProvedor'=>'False','NoDedicadoARubro'=>'False'],
            ['ruc'=>'1790085783005','SancionesPorObraNC'=>'False','familiaresAutoridades'=>'False','FamiliaresCongresistas'=>'False','NoRegistradoComoProvedor'=>'True','NoDedicadoARubro'=>'False'],
            ['ruc'=>'1790085783006','SancionesPorObraNC'=>'True','familiaresAutoridades'=>'False','FamiliaresCongresistas'=>'True','NoRegistradoComoProvedor'=>'False','NoDedicadoARubro'=>'False'],
            ['ruc'=>'1790085783007','SancionesPorObraNC'=>'True','familiaresAutoridades'=>'True','FamiliaresCongresistas'=>'True','NoRegistradoComoProvedor'=>'True','NoDedicadoARubro'=>'False'],
            ['ruc'=>'1790085783008','SancionesPorObraNC'=>'False','familiaresAutoridades'=>'True','FamiliaresCongresistas'=>'False','NoRegistradoComoProvedor'=>'False','NoDedicadoARubro'=>'False'],
            ['ruc'=>'1790085783009','SancionesPorObraNC'=>'False','familiaresAutoridades'=>'False','FamiliaresCongresistas'=>'False','NoRegistradoComoProvedor'=>'False','NoDedicadoARubro'=>'False'],
            ['ruc'=>'1790085783010','SancionesPorObraNC'=>'False','familiaresAutoridades'=>'False','FamiliaresCongresistas'=>'False','NoRegistradoComoProvedor'=>'False','NoDedicadoARubro'=>'False'],
            
        );
        $validacion=array('Message'=>'No cumple con los requisitos');
    foreach ($arreglo as $key=>$item) {
        if (($item['ruc']==$ruc)) {
           
          if ($item['SancionesPorObraNC']=='False' && $item['familiaresAutoridades']=='False'&& $item['familiaresAutoridades']=='False'  ) {
            
            $validacion = $item;
         }
         
        }
    }
      
        $Resultado = \json_encode($validacion);

        return ($Resultado);
    }
}
