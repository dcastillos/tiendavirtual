<div class="modal-header">
    <h4 class="modal-title">Actualizar la categoria de producto</h4>
</div>

<form action="" id="formulario-editar" autocomplete="off">
    <div class="modal-body">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="nombre">Nombre</label>
            <div class="col-sm-8">
                <input type="text" value="<?php echo $registro->nombre?>" name="nombre" class="form-control"/>
            </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-default" data-dismiss="modal">
            <i class="fas fa-save"></i>Cerrar
        </button>
        <button id="btn-submit" type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>Actualizar
        </button>
    </div>
</form>