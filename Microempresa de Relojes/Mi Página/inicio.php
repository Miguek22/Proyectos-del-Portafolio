<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<br>
<br>
<br>
<br>
<center>
<h1  class="is-size-2">Nuestros Productos</h1>
<br>
<br>
<br>
</center>

<?php foreach ($productos as $producto) { ?>
<!-- <center> -->
<div class="site-section-sm bg-light">
      <div class="container">
        <div style = "float: left" class="col-md-6 col-lg-4 mb-4">
          <div class="row mb-5">
            <div class="property-entry h-100">
              <div class="property-thumbnail">
                <div class="offer-type-wrap">
                  <?php if ($producto->cantidad == 0) {?>
                    <span class="offer-type bg-info">Agotados</span>
                  <?php }elseif ($producto->cantidad <= 3) { ?>
                    <span class="offer-type bg-success">Disponible</span>
                  <span class="offer-type bg-danger">Quedan Pocos</span>
                  <?php }else{ ?>
                    <span class="offer-type bg-success">Disponible</span>
                  <?php } ?> 
                  
                </div>

                <img src="<?php echo $producto->imagen ?>">


              </div>
              <div class="p-4 property-body">
                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                <h2 class="property-title"><?php echo $producto->nombre ?></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span></span>
                <strong class="property-price text-primary mb-3 d-block text-success">ARS <?php echo number_format($producto->precio, 2) ?></strong>
            
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Quedan</span>
                    <center>
                    <span class="property-specs-number"><?php echo $producto->cantidad ?></span>
                    </center>                    
                  </li>
                  <form action="compras.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Ver Producto
                            </button>
                        </form>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- </center> -->
<?php } ?>

        
</section>
</body>
</html>