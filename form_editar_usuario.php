<form ng-controller="usuariosCtrl" id="formularioEditar" name="formEditar">
    <h1>Editar usuario</h1>
    <input type="text" hidden ng-model="edtId" value="{{ edtId }}">
    <div class="form-group" >
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="edtNombre" placeholder="Escriba el nombre completo" ng-model="edtNombre" value="{{ edtNombre }}" required name="nombre">
        <span ng-show="formEditar.nombre.$touched && formEditar.nombre.$invalid" style="color: #ff1a75">El campo no puede estar vacio</span>
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" class="form-control" id="edtCorreo" placeholder="Escriba el correo" ng-model="edtCorreo" value="{{ edtCorreo }}" required name="correo">
        <span ng-show="formEditar.correo.$touched && formEditar.correo.$invalid" style="color: #ff1a75">El campo debe ser un correo y no puede estar vacio</span>
    </div>
    <div class="form-group">
        <label for="celular">Celular</label>
        <input type="number" class="form-control" id="edtCelular" placeholder="Escriba el numero celular" ng-model="edtCelular" value="{{ edtCelular }}" required name="celular">
        <span ng-show="formEditar.celular.$touched && formEditar.celular.$invalid" style="color: #ff1a75">El campo debe ser un celular valido y no puede estar vacio</span>
    </div>                
    <button type="button" class="btn btn-primary" ng-click="actualizarUsuario()" ng-disabled="formEditar.$invalid">Actualizar</button>
</form>