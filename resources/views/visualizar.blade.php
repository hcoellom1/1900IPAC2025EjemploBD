<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h1>Visualizar Cliente</h1>
                <div class="mb-3">
                    <label for="codigo" class="form-label">Codigo Cliente</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" readonly value={{$cliente->codigoCliente}}>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" readonly value="{{$cliente->nombre}}">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" readonly value={{$cliente->apellido}}>
                </div>
                <div class="mb-3">
                    <label for="sueldo" class="form-label">Sueldo</label>
                    <input type="text" class="form-control" id="sueldo" placeholder="sueldo" name="sueldo" readonly value={{$cliente->salario}}>
                </div>
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimiento"  name="fechaNacimiento" readonly value={{$cliente->fechaNacimiento}}>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            
        </div>
        
    </div>

</body>
</html>