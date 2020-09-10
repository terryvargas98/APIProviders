<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table='project';
   protected $fillable =['Nombre','Description','Autor'];
    public function getRouteKeyName()
{
    return 'Nombre';
}

}
