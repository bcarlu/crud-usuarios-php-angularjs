

<!-- Bootstrap Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar usuario</h4>
        </div>
        <div class="modal-body">
        <form id="formularioEditar" name="formEditar">
            <input type="text" hidden ng-model="edtId" value="{{ edtId }}">
            <div class="form-group" >
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="edtNombre" placeholder="Escriba el nombre completo" ng-model="edtNombre" value="{{ edtNombre }}" required pattern="^[a-zA-Z\s]+" name="nombre">
                <span ng-show="formEditar.nombre.$touched && formEditar.nombre.$invalid" style="color: #ff1a75">El campo no puede estar vacio</span>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="edtCorreo" placeholder="Escriba el correo" ng-model="edtCorreo" value="{{ edtCorreo }}" required name="correo">
                <span ng-show="formEditar.correo.$touched && formEditar.correo.$invalid" style="color: #ff1a75">El campo debe ser un correo y no puede estar vacio</span>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="number" class="form-control" id="edtCelular" placeholder="Escriba el numero celular" ng-model="edtCelular" value="{{ edtCelular }}" required pattern="^3[0-9]{9}" name="celular">
                <span ng-show="formEditar.celular.$touched && formEditar.celular.$invalid" style="color: #ff1a75">El campo debe ser un celular valido y no puede estar vacio</span>
            </div>
            <!-- <button type="button" class="btn btn-primary" ng-click="actualizarUsuario()" ng-disabled="formEditar.$invalid">Actualizar</button> -->
            <!-- <input type="text" hidden ng-model="usuarioActual.id">
            <div class="form-group" >
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control"placeholder="Escriba el nombre completo" ng-model="usuarioActual.nombre" required pattern="^[a-zA-Z\s]+" name="nombre">
                <span ng-show="formEditar.nombre.$touched && formEditar.nombre.$invalid" style="color: #ff1a75">El campo no puede estar vacio</span>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" placeholder="Escriba el correo" ng-model="usuarioActual.correo" required name="correo">
                <span ng-show="formEditar.correo.$touched && formEditar.correo.$invalid" style="color: #ff1a75">El campo debe ser un correo y no puede estar vacio</span>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="number" class="form-control" placeholder="Escriba el numero celular" ng-model="usuarioActual.celular" required pattern="^3[0-9]{9}" name="celular">
                <span ng-show="formEditar.celular.$touched && formEditar.celular.$invalid" style="color: #ff1a75">El campo debe ser un celular valido y no puede estar vacio</span>
            </div> -->
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" ng-click="actualizarUsuario()" ng-disabled="formEditar.$invalid">Guardar</button>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Fin bootstrap modal -->

<!-- <form ng-controller="usuariosCtrl" id="formularioEditar" name="formEditar">
    <h1>Editar usuario</h1> -->
    <!-- Test -->
    <!-- <div class="form-group" >
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="edtNombre" placeholder="Escriba el nombre completo" ng-model="edtNombre" value="{{ edtNombre }}" name="nombre">
        <span ng-show="formEditar.nombre.$touched && formEditar.nombre.$invalid" style="color: #ff1a75">El campo no puede estar vacio</span>
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" class="form-control" id="edtCorreo" placeholder="Escriba el correo" ng-model="edtCorreo" value="{{ edtCorreo }}" name="correo">
        <span ng-show="formEditar.correo.$touched && formEditar.correo.$invalid" style="color: #ff1a75">El campo debe ser un correo y no puede estar vacio</span>
    </div>
    <div class="form-group">
        <label for="celular">Celular</label>
        <input type="number" class="form-control" id="edtCelular" placeholder="Escriba el numero celular" ng-model="edtCelular" value="{{ edtCelular }}" name="celular">
        <span ng-show="formEditar.celular.$touched && formEditar.celular.$invalid" style="color: #ff1a75">El campo debe ser un celular valido y no puede estar vacio</span>
    </div> -->
    <!-- Fin test -->
    <!-- <input type="text" hidden ng-model="edtId" value="{{ edtId }}">
    <div class="form-group" >
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="edtNombre" placeholder="Escriba el nombre completo" ng-model="edtNombre" value="{{ edtNombre }}" required pattern="^[a-zA-Z\s]+" name="nombre">
        <span ng-show="formEditar.nombre.$touched && formEditar.nombre.$invalid" style="color: #ff1a75">El campo no puede estar vacio</span>
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" class="form-control" id="edtCorreo" placeholder="Escriba el correo" ng-model="edtCorreo" value="{{ edtCorreo }}" required name="correo">
        <span ng-show="formEditar.correo.$touched && formEditar.correo.$invalid" style="color: #ff1a75">El campo debe ser un correo y no puede estar vacio</span>
    </div>
    <div class="form-group">
        <label for="celular">Celular</label>
        <input type="number" class="form-control" id="edtCelular" placeholder="Escriba el numero celular" ng-model="edtCelular" value="{{ edtCelular }}" required pattern="^3[0-9]{9}" name="celular">
        <span ng-show="formEditar.celular.$touched && formEditar.celular.$invalid" style="color: #ff1a75">El campo debe ser un celular valido y no puede estar vacio</span>
    </div>
    <button type="button" class="btn btn-primary" ng-click="actualizarUsuario()" ng-disabled="formEditar.$invalid">Actualizar</button>
</form> -->