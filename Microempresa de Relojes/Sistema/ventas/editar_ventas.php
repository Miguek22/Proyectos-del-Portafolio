<?php
    require_once "conexion.php";
?>
<!-- Modal -->
<?php
    $id_venta=$_GET['ids'];

    $consulta = "select * from ventas where id_venta='$id_venta'";
    $resultado = $conexion->query($consulta);

while($fin = $resultado->fetch_assoc()){ 

                                                       
?>
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
<!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="terminar_edicion.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputName">Seleccione el Producto</label>
                        <input type="hidden" value="<?php echo $fin['id_venta']; ?>" name="id" id="id">
                        <input type="hidden" value="<?php echo $fin['producto']; ?>" name="producto1">
                        <select class="form-control" name="productoventa2" id="productoventa2">
										        <option class="form-group" value="A">Seleccione</option>
										        <?php 
										            $sql="SELECT `id`, `nombre` FROM `productos`";
										            $result=mysqli_query($conexion,$sql);
										            while($producto=mysqli_fetch_row($result)):
										        ?>
										        <option value="<?php echo $producto[1]?>"><?php echo $producto[1]?></option>
										        <?php endwhile; ?>
										    </select>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Cantidad</label>
                        <input type="hidden" value="<?php echo $fin['cantidad']; ?>" name="cantidad_pro1" id="cantidad_pro1">
                        <input value="<?php echo $fin['cantidad']; ?>" type="text" class="form-control" name="cantidad_pro2" id="cantidad_pro2" placeholder="Cantidad"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Precio</label>
                        <input type="hidden" value="<?php echo $fin['monto']; ?>" name="precio_pro1" id="precio_pro1">
                        <input value="<?php echo $fin['monto']; ?>" type="text" class="form-control" name="precio_pro2" id="precio_pro2" placeholder="Precio"/>
                    </div>
                    <div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				                <button type="submit" class="btn btn-primary submitBtn">Guardar</button>
				            </div>
                </form>
            </div>
          <?php } ?>
            
        </div>
    </div>
</div>
