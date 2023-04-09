
var app = angular.module('appRegistroUsuarios', ['ngDialog'])

app.controller('usuariosCtrl', function($scope, $http, ngDialog) {
    $scope.usuarios = [];
    $scope.listarUsuarios = function () {
        $http.get("listar_usuarios.php").then(function(response) {
            // console.log(response.data);
            $scope.usuarios = response.data;
        });
    }

    $('#modalCrear').on('hidden.bs.modal', function (e) {
        console.log("Se cerro el la ventana de crear usuario")
        $scope.listarUsuarios();
    })
    $('#ModalEliminar').on('hidden.bs.modal', function (e) {
        console.log("Se cerro el la ventana de eliminar usuario")
        $scope.listarUsuarios();
    })
    $('#modalEditar').on('hidden.bs.modal', function (e) {
        console.log("Se cerro el la ventana de editar usuario")
        $scope.listarUsuarios();
    })
    

    // $scope.abrirFormCrear = function () {
    //     $scope.crearDialog = ngDialog.open({
    //         template: 'form_crear_usuario.php',
    //         className: 'ngdialog-theme-default',
    //         scope: $scope,
    //     })
    // }
    $scope.mensajeAlerta = null;
    $scope.crearUsuario = function () {
        var data = {
            nombre: $scope.nombre,
            correo: $scope.correo,
            celular: $scope.celular
        }
        console.log("Datos enviados: ", data)
        $http.post("crear_usuario.php", JSON.stringify(data)).then(function(respuesta){
            console.log("La respuesta fue:", respuesta);
            if(respuesta.data.estado == 1){
                $scope.alertaExito = 1
                console.log("Usuario creado con exito")
                $scope.mensajeAlerta = "Usuario creado con exito"
                setTimeout(function(){
                    console.log("timeout esta ok")
                    $scope.mensajeAlerta = null
                }, "3000")
            } else {
                $scope.alertaError = 1
                console.log(respuesta.data.mensaje)
                $scope.mensajeAlerta = "Error al crear el usuario"
                setTimeout(function(){
                    $scope.mensajeAlerta = null
                }, "3000")
            }
            $('#modalCrear').modal('hide');
        })

        // $scope.crearDialog.close();
    }

    $scope.edtUsuario = {};
    $scope.editarUsuarioForm = function (usuario){

        // $scope.edtDialog = ngDialog.open({
        //     template: 'form_editar_usuario.php',
        //     className: 'ngdialog-theme-default',
        //     scope: $scope
        // });

        $scope.edtUsuario = usuario;
        console.log("Datos de la fila: ", usuario)
        
        $scope.edtId = $scope.edtUsuario.id
        $scope.edtNombre = $scope.edtUsuario.nombre
        $scope.edtCorreo = $scope.edtUsuario.correo
        $scope.edtCelular = parseInt($scope.edtUsuario.celular)

        $('#modalEditar').modal('show');
    }

    // $scope.editarUsuarioForm = function (usuario){

    //     // $scope.edtDialog = ngDialog.open({
    //     //     template: 'form_editar_usuario.php',
    //     //     className: 'ngdialog-theme-default',
    //     //     scope: $scope
    //     // });

    //     // Copiar los datos del usuario seleccionado al objeto $scope.usuarioSeleccionado
    //     $scope.usuarioActual = angular.copy(usuario);
    //     console.log("usuario a editar", $scope.usuarioActual)
    //     // Mostrar la ventana modal
    //     $('#modalEditar').modal('show');

    //     // $scope.edtUsuario = usuario;
    //     // console.log("Datos de la fila: ", usuario)
        
    //     // $scope.edtId = $scope.edtUsuario.id
    //     // $scope.edtNombre = $scope.edtUsuario.nombre
    //     // $scope.edtCorreo = $scope.edtUsuario.correo
    //     // $scope.edtCelular = parseInt($scope.edtUsuario.celular)
    // }

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
            if(respuesta.data.estado == 1){
                $scope.alertaInfo = 1
                console.log("Usuario actualizado con exito")
                $scope.mensajeAlerta = "Usuario actualizado con exito"
                setTimeout(function(){
                    console.log("timeout esta ok")
                    $scope.mensajeAlerta = null
                }, "3000")
            } else {
                $scope.alertaError = 1
                console.log(respuesta.data.mensaje)
                $scope.mensajeAlerta = "Error al actualizar el usuario"
                setTimeout(function(){
                    $scope.mensajeAlerta = null
                }, "3000")
            }
            $('#modalEditar').modal('hide');
        })

        // $scope.edtDialog.close();        
    }

    // $scope.actualizarUsuario = function (usuario) {
    //     var data = {
    //         id: usuario.id,
    //         nombre: usuario.nombre,
    //         correo: usuario.correo,
    //         celular: usuario.celular
    //     }
    //     console.log("Datos enviados: ", data)
    //     $http.post("actualizar_usuario.php", JSON.stringify(data)).then(function(respuesta){
    //         console.log("La respuesta fue:", respuesta);
    //         $('#modalEditar').modal('hide');
    //     })

    //     // $scope.edtDialog.close();        
    // }

    $scope.delUsuario = {};
    $scope.formEliminarUsuario = function (usuario){

        // Copiar los datos del usuario seleccionado al objeto $scope.usuarioSeleccionado
        $scope.usuarioSeleccionado = angular.copy(usuario);
        console.log("copia del usuario", $scope.usuarioSeleccionado)
        // Mostrar la ventana modal
        $('#ModalEliminar').modal('show');

        // $scope.delDialog = ngDialog.open({
        //     template: 'form_eliminar.php',
        //     className: 'ngdialog-theme-default',
        //     scope: $scope
        // });

        // $scope.delUsuario = usuario;
        
        // $scope.delId = $scope.delUsuario.id;
        // $scope.delNombre = $scope.delUsuario.nombre;
        // $('#ModalEliminar').modal('show');
    }

    // $scope.eliminarUsuario = function () {
    //     var data = {
    //         id: $scope.delId,
    //         nombre: $scope.delNombre
    //     }

    //     console.log("Datos enviados: ", data)
    //     $http.post("eliminar_usuario.php", JSON.stringify(data)).then(function(respuesta){
    //         console.log("La respuesta fue:", respuesta);
    //         $('#ModalEliminar').modal('hide');
    //     })

    //     // $scope.delDialog.close();
    // }

    $scope.eliminarUsuario = function (usuario){
        console.log("usuario a eliminar es", usuario)
        var data = {
            id: usuario.id,
            nombre: usuario.nombre
        }

        $http.post("eliminar_usuario.php", JSON.stringify(data)).then(function(respuesta){
            console.log("La respuesta fue:", respuesta);
            if(respuesta.data.estado == 1){
                $scope.alertaExito = 1
                console.log("Usuario eliminado con exito")
                $scope.mensajeAlerta = "Usuario eliminado con exito"
                setTimeout(function(){
                    console.log("timeout esta ok")
                    $scope.mensajeAlerta = null
                }, "3000")
            } else {
                $scope.alertaError = 1
                console.log(respuesta.data.mensaje)
                $scope.mensajeAlerta = "Error al eliminar el usuario"
                setTimeout(function(){
                    $scope.mensajeAlerta = null
                }, "3000")
            }
            $('#ModalEliminar').modal('hide');
        })

        // Realizar una petición HTTP DELETE para eliminar el usuario del servidor
        // $http.delete('eliminar_usuario' + usuario.id)
        // .then(function(response) {
        // // Si la petición fue exitosa, actualizar la lista de usuarios y cerrar la ventana modal
        // $('#ModalEliminar').modal('hide');
        // }, function(response) {
        // // Si la petición falló, mostrar un mensaje de error
        // alert('Error al eliminar el usuario. Por favor, inténtelo de nuevo más tarde.');
        // });
    }
    
    $scope.listarUsuarios();
});
    