<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="./css/app.css">
    <script src="./js/app.js"></script>

    

    <title>@yield('title')</title>
</head>
<body>  


     
<nav class="navbar bg-white shadow-sm">
        
        <a class="nav-item" {{LinkActive('Home')}} href="{{Route('Home')}}"> {{__('Home')}} </a>
        
      
         <a class="{{LinkActive('About')}}  "href="{{Route('About')}}"> About </a>
       
        <a class="{{LinkActive('Contact')}} " href="{{Route('Contact')}}"> Contact  </a>  

    
    <a class="{{LinkActive('ShowProject')}} " href="{{Route('ShowProject')}}"> Project </a>
    <a class="{{LinkActive('Index')}}" href="/" >  </a>

    @auth
    <p style="color:gray;">  Bienvenido {{auth()->user()->name}}  </p>   
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Cerrar Sesion</button>
    </form>
   
    @else
   
    <a href="{{route('login')}}">Login</a>
    <a href="{{route('register')}}">Registrarse</a>

    @endauth
       
</nav>
@include('Partial.session')

@yield('Container')
</body>
</html>