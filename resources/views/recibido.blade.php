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
        <!-- LIBRERIA CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="css/consultas.css">
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="img/favicon2.svg">
        <title>G&A Estudio Jurídico</title>
</head>

<body class="animate__animated animate__fadeIn animate__delay-2s">
    
    <div class="contenedor">
        
        <div class="row">
            <div class="col-12">
                <header class="h-100">
                    <img src="./img/logow.png" alt="LOGO" class="logo">
                </header>
            </div>
            
            <aside class="col-12">
                <h5 class="bold">Gracias por comunicarte con nosotros!</h5>
                <p class="cursiva">A la brevedad te estaremos contactando para hacer un seguimiento de tu caso</p>

                <form action="{{ route('inicio') }}" method="get">
                    <button type="submit" class="btn btn-primary btn-sm">Aceptar</button>
                </form>

            </aside>
            
        </div>

    </div>


</body>

</html>