
var app = angular.module('appRegistroUsuarios', ['ngDialog'])

app.controller('usuariosCtrl', function($scope, $http, ngDialog) {
    
    $scope.listarUsuarios = function () {
        $http.get("listar_usuarios.php").then(function(response) {
            // console.log(response.data);
            $scope.usuarios = response.data;
        });
    }

    $scope.listarUsuarios();

    // $scope.orderByMe = function(x) {
    //     $scope.myOrderBy = x;
    // }

    $scope.abrirFormCrear = function () {
        $scope.crearDialog = ngDialog.open({
            template: 'form_crear_usuario.php',
            className: 'ngdialog-theme-default',
            scope: $scope,})
    }

    $scope.crearUsuario = function () {
        var data = {
            nombre: $scope.nombre,
            correo: $scope.correo,
            celular: $scope.celular
        }
        console.log("Datos enviados: ", data)
        $http.post("crear_usuario.php", JSON.stringify(data)).then(function(respuesta){
            console.log("La respuesta fue:", respuesta);
        })

        $scope.crearDialog.close();
    }

    $scope.edtUsuario = {};
    $scope.editarUsuarioForm = function (usuario){

        $scope.edtDialog = ngDialog.open({
            template: 'form_editar_usuario.php',
            className: 'ngdialog-theme-default',
            scope: $scope
        });

        $scope.edtUsuario = usuario;
        console.log("Datos de la fila: ", usuario)
        
        $scope.edtId = $scope.edtUsuario.id
        $scope.edtNombre = $scope.edtUsuario.nombre
        $scope.edtCorreo = $scope.edtUsuario.correo
        $scope.edtCelular = parseInt($scope.edtUsuario.celular)
    }

    $scope.actualizarUsuario = function () {
        var data = {
            id: $scope.edtId,
            nombre: $scope.edtNombre,
            correo: $scope.edtCorreo,
            celular: $scope.edtCelular
        }
        console.log("Datos enviados: ", data)
        $http.post("actualizar_usuario.php", JSON.stringify(data)).then(function(respuesta){
            console.log("La respuesta fue:", respuesta);
        })

        // $http.get("listar_usuarios.php").then(function(response) {
        //     console.log("refrescando lista de usuarios");
        //     $scope.usuarios = response.data;
        // });

        $scope.edtDialog.close();

        
        
        // $scope.listarUsuarios();
        // transmitir evento para actualizar lista de usuarios
        // $scope.$broadcast('usuarioActualizado');        
    }

    // $scope.$on('usuarioActualizado', function() {
    //     $http.get("listar_usuarios.php").then(function(response) {
    //         // console.log(response.data);
    //         $scope.usuarios = response.data;
    //     });
    //     console.log("Ejecutando refresh de usuarios")
    // });

    $scope.eliminarUsuario = function (usuario) {
        
        $scope.usuario = usuario;
        console.log("Datos de la fila: ", usuario)

        var data = {
            id: $scope.usuario.id,
            nombre: $scope.usuario.nombre
        }

        console.log("Datos enviados: ", data)
        $http.post("eliminar_usuario.php", JSON.stringify(data)).then(function(respuesta){
            console.log("La respuesta fue:", respuesta);
        })
        // Actualizar lista de usuarios despues de eliminar
        $scope.listarUsuarios();
    }
    
});
    