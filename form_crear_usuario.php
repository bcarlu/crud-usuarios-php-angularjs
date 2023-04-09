<!-- Bootstrap Modal -->
<div class="modal fade" id="modalCrear" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nuevo usuario</h4>
        </div>
        <div class="modal-body">
            <form name="formCrear">
                <div class="form-group" >
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Escriba el nombre completo" ng-model="nombre" required name="nombre" pattern="^[a-zA-Z\s]+">
                    <span ng-show="formCrear.nombre.$touched && formCrear.nombre.$invalid" style="color: #ff1a75">El nombre debe contener solo letras y es requerido.</span>
                </div>
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" class="form-control" id="correo" placeholder="Escriba el correo" ng-model="correo" required name="correo">
                    <span ng-show="formCrear.correo.$touched && formCrear.correo.$invalid" style="color: #ff1a75">El correo es requerido.</span>
                </div>    
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="number" class="form-control" id="celular" placeholder="Escriba el numero celular" ng-model="celular" required name="celular" pattern="^3[0-9]{9}">
                    <span ng-show="formCrear.celular.$touched && formCrear.celular.$invalid" style="color: #ff1a75">El celular debe contener 10 numeros y es requerido.</span>
                </div>                
                <!-- <button type="submit" class="btn btn-primary" ng-click="crearUsuario()" ng-disabled="formCrear.$invalid">Crear</button> -->
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" ng-click="crearUsuario()" ng-disabled="formCrear.$invalid">Guardar</button>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Fin bootstrap modal -->