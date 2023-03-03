<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <!-- Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- NgDialog -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.4.0/css/ngDialog.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.4.0/css/ngDialog-theme-default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.4.0/js/ngDialog.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="app.js"></script>
</head>
<body>
    <div class="container">
        <h1>Registro de Usuarios</h1>
        <div class="alert alert-success" role="alert">
            <p>Here start the Coolest</p>
        </div>
        
        <div ng-app="appRegistroUsuarios" ng-controller="usuariosCtrl">
            
            <button type="button" class="btn btn-primary" ng-click="abrirFormCrear()">Nuevo Usuario</button>
                        
            <br><br>
            <table class="table table-bordered table-hover">
            <tr>
                <th ng-click="orderByMe('nombre')" style="cursor: pointer">Nombre</th>
                <th ng-click="orderByMe('correo')" style="cursor: pointer">Correo</th>
                <th ng-click="orderByMe('celular')" style="cursor: pointer">Celular</th>
                <th style="cursor: pointer">Acciones</th>
            </tr>
            <tr ng-repeat="usuario in usuarios">
                <td>{{usuario.nombre}}</td>
                <td>{{usuario.correo}}</td>
                <td>{{usuario.celular}}</td>
                <td>
                    <button type="button" class="btn btn-warning btn-editar-usuario" ng-click="editarUsuarioForm(usuario)">Editar</button>
                    <button type="button" class="btn btn-danger btn-editar-usuario" ng-click="eliminarUsuario(usuario)">Eliminar</button>
                </td>
            </tr>
            </table>
            
        </div>
    </div>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>