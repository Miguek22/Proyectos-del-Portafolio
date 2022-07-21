<?php include_once "encabezado_compras.php" ?>
<?php 
$id = $_POST['id_producto'];
?>

<section>
  <?php foreach ($productos as $producto) { ?>
    <?php if($producto->id == $id){ ?>
  <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="../../images/reloj_5.jpg" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?php echo $producto->nombre ?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Todos los precios están expresados en Pesos</span>
                  </li>
                </ul>
                </div>
              </div>
              
              <h2 class="h4 text-black">Descripción</h2>
              <pre><?php echo $producto->descripcion ?></pre>
              <br>
              <p class="card-header-title is-size-4">Pagá con:</p>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <div><img src="icons/visa.png" width="40" height="40"  class="img-fluid"></div>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <div><img src="icons/mastercard.png" width="40" height="40"  class="img-fluid"></div>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <div><img src="icons/maestro.png" width="40" height="40"  class="img-fluid"></div>
                </div>
              </div>
              <div class="row no-gutters mt-5">
              </div>
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded">
              <img src="<?php echo $producto->imagen ?>">
            </div>
            
        <div class="card">
            
            <div class="card-content">
                
                <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
                <br>

                <?php if ($producto->cantidad == 0) { ?>
                  <button class="button is-danger is-large">
                            Agotados
                        </button>
                <?php }else{ ?>
                <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                    <form action="eliminar_del_carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">

                            <a href="ver_carrito.php" class="button is-success"><i class="fa fa-check"></i>&nbsp;En el carrito</a>

                        <button class="button is-danger">
                            <i class="fa fa-trash-o"></i>&nbsp;Quitar
                        </button>
                    </form>
                <?php } else { ?>
                    <form action="agregar_al_carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <div>
                            <div>   
                            <input class="form-control text-center" aria-describedby="button-addon1" type="number" name="numero_cantidad" min="1" max="<?php echo $producto->cantidad ?>" />
                            <br>
                            </div>
                        </div> 
                        <button class="button is-primary is-large">
                            <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                        </button>
<br>
<br>
                    </form>
                
                    <br>
     
                <?php } ?>
              <?php } ?>   

            </div>
        </div>
      <?php }?>

<?php } ?>
</div>
            

          </div>
          
        </div>
      </div>
    </div>
    <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Información</h3>
              <p>También puede comprar este y otros productos personalmente en:</p>
              <br>
                          <p class="mb-0 font-weight-bold">Dirección</p>
                          <a href="#">Av. González Lelong 600</a>
                          <p class="mb-4"><a href="#">Formosa cap - Argentina</a></p>
            </div>
<br>

</section>
<?php include_once "pie.php" ?>
</body>
</html>