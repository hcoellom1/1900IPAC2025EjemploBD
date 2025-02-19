<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    
</head>
<body>
    <div class="container mt-5">
        
            <h1>Agregar nuevo cliente</h1>
            <div></div>
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <form action="{{ route('guardar') }}"  method="post">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido">
                        </div>
                        <div class="mb-3">
                            <label for="sueldo" class="form-label">Sueldo</label>
                            <input type="text" class="form-control" id="sueldo" placeholder="sueldo" name="sueldo">
                        </div>
                        <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" placeholder="sueldo" name="fechaNacimiento">
                        </div>
        
                        <div class="mb-3">
                            <a href="{{ route('clientes') }}" class="btn btn-secondary">Volver</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
        
                    </form>
                </div>
            </div>

        
    </div>

</body>
</html>