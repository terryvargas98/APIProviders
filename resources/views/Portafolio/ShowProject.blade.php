@extends('Layout')

@section('Container')
    
<h1> Lista de projectos </h1>
@auth
<h3><a href="{{route('GetCreateProject')}}" style="text-decoration: none">Create Project</a></h3>
    
@endauth



@forelse ($Projects as $Project)
<li> <a href="{{Route('ShowElements',$Project)}}"> {{$Project['Nombre']}} </a>  </li>
{{$Project->created_at->diffForHumans()}}
 @empty
        
 @endforelse
  
 @endsection
