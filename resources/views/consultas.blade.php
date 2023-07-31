<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FUENTE -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--ICONOS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/consultas.css') }}">
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="img/favicon2.svg">
    <title>Consultas y Mensajes</title>
</head>
<body>

    <h1>Mensajes</h1>

    <div class="contenedor">

        

        @if($mensajes->isEmpty())
                <p class="aviso">No hay mensajes en la bandeja</p>
            
        @else       

            @foreach ($mensajes as $msj)
                
                <div class="card" style="width: 18rem;">                
                        <div class="card-body">
                            <h5 class="mayus card-title">{{$msj->nombre}}</h5>
                            <h6 class="card-subtitle"><i class="fas fa-phone"></i>{{$msj->telefono}}</h6>
                            <h6 class="card-subtitle"><i class="fas fa-solid fa-user"></i>{{$msj->mail}}</h6>                  
                            <h6 class="card-subtitle"><i class="fas fa-solid fa-hourglass-start"></i>{{$msj->fecha}}</h6>
                            <p class="card-text"><i class="fas fa-comment-alt"></i>{{$msj->mensaje}}</p>
                            
                            
                            <form action="{{ route('consultas.destroy', $msj) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-solid fa-trash"></i>Eliminar</button>
                            </form>
                        
                        </div>                
                </div>  
            @endforeach
        
        
        @endif 


    </div>


    
        

</body>
</html>