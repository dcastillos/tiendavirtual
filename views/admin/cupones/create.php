<div class="modal-header">
    <h4 class="modal-title">Registrar Cupon</h4>
    <buton type="button" class="close" data-dismiss="modal" arial-label="close">
        <span aria-hidden="true">$times;</span>
    </buton>
</div>

<form action="" id="formulario-crear" autocomplete="off">
    <div class="modal-body">
        <div class="form-group row">
            <label for="tipo" class="col-sm-5 col-form-label">Tipo</label>
            <div class="col-sm7 input-validation">
                <select name="tipo" id="tipo" class="form-control">
                    <option value="">Seleccione...</option>
                    <option value="PORCENTAJE">PORCENTAJE</option>
                    <option value="MONTO">MONTO</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="monto" class="col-sm-5 col-form-label">Monto</label>
                <div class="col-sm-7 input-validation">
                    <input type="number" class="form-control" name="monto" id="monto">
                </div>
        </div>
        <div class="form-group row">
            <label for="codigo" class="col-sm-5 col-form-label">Codigo</label>
                <div class="col-sm-7 input-validation">
                    <input type="text" class="form-control" name="codigo" id="codigo">
                </div>
        </div>
        <div class="form-group row">
            <label for="monto_minimo" class="col-sm-5 col-form-label">Monto Minimo</label>
                <div class="col-sm-7 input-validation">
                    <input type="number" class="form-control" name="monto_minimo" id="monto_minimo">
                </div>
        </div>
        <div class="form-group row">
            <label for="fecha_vencimiento" class="col-sm-5 col-form-label">Fecha Vencimiento</label>
                <div class="col-sm-7 input-validation">
                    <input type="date" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento">
                </div>
        </div>
        <div class="form-group row">
            <label for="hora" class="col-sm-5 col-form-label">Hora Vencimiento</label>
                <div class="col-sm-7 input-validation">
                    <input type="time" class="form-control" name="hora" id="hora">
                </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">
            <i class ="fas fa-windows-close"></i>Cerrar
        </button>
        <button id="btn-submit" type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>Guardar
        </button>
    </div>
</form>