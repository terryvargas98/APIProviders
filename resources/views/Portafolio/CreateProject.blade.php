@extends('Layout')


@section('Container')
@section('title','Project')
    


<form action={{route('PostCreateProject')}} method="post">

        @csrf
        <label >Nombre</label> <input type="text"  name='Nombre'>  <br>
        <label >Descripcion</label> <input type="text" name='Description'>  <br>
        <label >Autor</label> <input type="text" name='Autor'>   <br>
        <button type="submit"> Enviar </button>
    </form>

@include('Partial.Error')
@endsection