<?php include_once "encabezado_compras.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
$cantidad_productos_en_carrito = obtenerCantidadProductosEnCarrito();

?>
 
<?php
if (count($productos) <= 0) {
?>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
            <br>
            <br>
            <br>
            <br>

                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                <a href="inicio.php" class="button is-warning">Ver tienda</a>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <br>
            <h2 class="is-size-2">Mi carrito de compras</h2>
                <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        
                    ?>
                        <tr>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php foreach ($cantidad_productos_en_carrito as $cantidad_en_carrito) { if($cantidad_en_carrito->id_producto == $producto->id){
                            echo $cantidad_en_carrito->cantidad; 

                            $precio_por_productos = $producto->precio * $cantidad_en_carrito->cantidad; 

                            $total += $precio_por_productos;
                             }
                            }?></td>
                            <td>$<?php echo number_format($precio_por_productos, 2) ?></td>
                            <td>
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <br>
            <form action="acceso/compras/formulario_direccion.php" method="POST">
                <input type="hidden" value="<?php echo $precio_por_productos; ?>" name="precio_por_productos">
                <input type="hidden" value="<?php echo $total; ?>" name="total">
                <button style="margin-left: 20px;" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</button>
            </form>
            
        </div>
    </div>
    <br>
    <br>
    <br>
<?php } ?>

<?php include_once "pie.php" ?>