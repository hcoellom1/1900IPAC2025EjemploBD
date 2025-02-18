<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
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
            <h1>Clientes</h1>
            <button type="button" class="btn btn-success">Crear</button>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Codigo cliente</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Sueldo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->codigoCliente}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->salario}}</td>
                    <td class="action-buttons">
                        <button type="button" class="btn btn-primary btn-sm">Editar</button>
                        <button type="button" class="btn btn-info btn-sm">Visualizar</button>
                        <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>