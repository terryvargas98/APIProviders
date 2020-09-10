@extends('Layout')


@section('Container')
@section('title','Project')
<form action="{{route('UpdateProject',$Project)}}" method="post">
    @csrf  @method('PATCH')
  
<label for="">
 Nombre  <input type="text" name="Nombre" value="{{$Project['Nombre']}}">
</label> <br>

<label for="">
    Description  <input type="text" name="Description" value="{{$Project['Description']}}">
   </label> <br>
   <label for="">
 Autor  <input type="text" name="Autor" value="{{$Project['Autor']}}">
   </label>
<br>

   <button>Actualizar </button>


</form>
@include('Partial.Error')
@endsection