<div class="container" style="margin-top:80px">
    <div class="jumbotron">
        <h2> Registro de Empleados</h2>
    </div>
    <div class="container"> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> Numero Empleado</th>
                    <th> Nombre</th>
                    <th> Plaza</th>
                    <th> Activo</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($query as $data): ?>
                <tr>
                    <td><?php echo $data['numero_empleado'] ?></td>
                    <td><?php echo $data['nombre']." ".$data['apellido1']." ".$data['apellido2'] ?></td>
                    <td><?php echo $data['plaza'] ?></td>
                    <td><?php echo $data['activo'] ?></td>
                    <td>
                        <a href="index.php?c=empleados&a=empleados&id=<?php echo $data['id'] ?>" class="btn btn-default">
                        Editar</a>
                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?c=empleados&a=delete&id=<?php echo $data['id'] ?>" class="btn btn-danger">
                        Eliminar</a>
                    </td>
                </tr>
                <?php endforeach ?>         
            </tbody>
        </table>
    </div>
</div>