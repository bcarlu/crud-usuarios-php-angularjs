<!-- <form ng-controller="usuariosCtrl" id="formEliminar" name="formEliminar">
    <h1>Eliminar usuario</h1>
    <input type="text" hidden ng-model="delId" value="{{ delId }}">
    <p>Realmente desea eliminar el usuario {{ delNombre }} {{ delId }}</p>               
    <button type="button" class="btn btn-primary" ng-click="eliminarUsuario()">Eliminar</button>
</form> -->

 <!-- Bootstrap Modal -->
 <div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Eliminar usuario</h4>
            </div>
            <div class="modal-body">
            <!-- <form id="formEliminar" name="formEliminar">
                <h1>Eliminar usuario</h1>
                <input type="text" hidden ng-model="delId" value="{{ delId }}">
                <p>Realmente desea eliminar el usuario {{ delNombre }} {{ delId }}</p>               
                <button type="button" class="btn btn-primary" ng-click="eliminarUsuario()">Eliminar</button>
            </form> -->
            <form id="formEliminar" name="formEliminar">
                <!-- <h1>Eliminar usuario</h1> -->
                <p>Realmente desea eliminar el usuario {{ usuarioSeleccionado.nombre }} {{ usuarioSeleccionado.id }}</p>               
                <!-- <button type="button" class="btn btn-primary" ng-click="eliminarUsuario(usuarioSeleccionado)">Eliminar</button> -->
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" ng-click="eliminarUsuario(usuarioSeleccionado)">Eliminar</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Fin bootstrap modal -->