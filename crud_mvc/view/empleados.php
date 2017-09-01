<div class="container">
<div class="jumbotron">
    <h2> Registro de Empleados</h2>
</div>
    <div class="col-md-12">
    <div class="form-horizontal" style=""> 
        <form action="index.php?c=empleados&a=guardar" method="post">
            <input type="hidden" name="txt_id" value="<?php echo $data['id'] !=0 ? $data['id'] : "0" ?>"/>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="numero_empleado">Numero de Empleado: </label>
                <div class="col-sm-10"> 
                <input type="number" class="form-control" value="<?php echo $data['numero_empleado'] ?>" name="numero_empleado" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="nombre">Nombre: </label>
                <div class="col-sm-10"> 
                <input type="text" class="form-control" value="<?php echo $data['nombre'] ?>" name="nombre" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="apellido1">Primer Apellido: </label>
                <div class="col-sm-10"> 
                <input type="text" class="form-control" value="<?php echo $data['apellido1'] ?>" name="apellido1" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="apellido2">Segundo Apellido: </label>
                <div class="col-sm-10"> 
                <input type="text" class="form-control" value="<?php echo $data['apellido2'] ?>" name="apellido2"/>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Plaza: </label>
                <div class="col-sm-10"> 
                <select name="sel_plaza" class="form-control" value="<?php echo $data['plaza'] ?>" >
                    <option value="0">-- Selecciona --</option>
                    <?php foreach($query as $row): ?>
                    <option value="<?php echo $row['id'] ?>"> <?php echo $row['nombre_plaza'] ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label" for="activo">Activo: </label>
                <div class="col-sm-10"> 
                <input type="number" class="form-control" value="<?php echo $data['activo'] ?>" name="activo"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default"> Guardar</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</div> 

<!-- readonly="readonly" Para bloquear cajas de textos--> 