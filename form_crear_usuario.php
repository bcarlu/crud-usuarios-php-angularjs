<form ng-controller="usuariosCtrl" name="formCrear">
    <h1>Nuevo usuario</h1>
    <div class="form-group" >
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Escriba el nombre completo" ng-model="nombre" required name="nombre" pattern="^[a-zA-Z]+$">
        <span ng-show="formCrear.nombre.$touched && formCrear.nombre.$invalid" style="color: #ff1a75">El nombre debe contener solo letras y es requerido.</span>
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" class="form-control" id="correo" placeholder="Escriba el correo" ng-model="correo" required name="correo">
        <span ng-show="formCrear.correo.$touched && formCrear.correo.$invalid" style="color: #ff1a75">El correo es requerido.</span>
    </div>
    <div class="form-group">
        <label for="celular">Celular</label>
        <input type="number" class="form-control" id="celular" placeholder="Escriba el numero celular" ng-model="celular" required name="celular" pattern="[0-9]{10}">
        <span ng-show="formCrear.celular.$touched && formCrear.celular.$invalid" style="color: #ff1a75">El celular debe contener 10 numeros y es requerido.</span>
    </div>                
    <button type="submit" class="btn btn-primary" ng-click="crearUsuario()" ng-disabled="formCrear.$invalid">Crear</button>
</form>