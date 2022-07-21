<?php include_once "encabezado.php"; 
include_once "../funciones.php";
$productos = obtenerProductos();
?>
<section>
<div class="contenedor">
  <img src="../images/fondo_6.png" class="img-fluid" alt="">
  <div class="texto-encima"></div>
  <div class="centrado">
    <h1 class="display-1">Tenemos Muy en Cuenta tu Opinión</h1>
    <br>
    <br>
    <br>  
    <br>  
    <p class="lead">
  Nuestra misión es poder lograr que las personas estén más conectadas a la tecnología para mejorar su estilo de vida. 
</p>
  </div>
</div>
</section>
  <br />
  <center>
  <h1 class="is-size-2">Responde la Breve Encuesta</h1>
  <br>
  <h2 class="is-size-5">¡Lo que vos pienses de nuestro producto nos ayuda mucho a crecer!</h2>
  <br>
  </center>
  <div class="container">
    <br>
    <!--  Durante la Atención  -->
    <section class="row">
      <div class="col-md-12">
        <h3>Solo llevará unos minutos</h3>
        <p></p>
      </div>
    </section>
    <br>
    <!--  PREGUNTA 1  -->
    <section class="row">
      <div class="col-md-6">
        <p>1-  ¿Tuvo problemas con el envío? </p>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="pregunta1a" value="SI"> Si
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntab" value="NO"> No
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntac" value="NA"> N/A
      </label>
      </div>
    </section>
    <br>
     <!--  PREGUNTA 2  -->
    <section class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="comment">2-  En caso de haber tener problemas con el envío ¿Qué problemas tuvo?</label>
          <textarea class="form-control" rows="6" id="comentarios" placeholder="Escribenos aquí..."></textarea>
        </div>
      </div>
    </section>
    <br>
    <!--  PREGUNTA 3  -->
    <section class="row">
      <div class="col-md-6">
        <p>3-  ¿Está conforme con el producto que adquirió?</p>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="pregunta1a" value="SI"> Si
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntab" value="NO"> No
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntac" value="NA"> N/A
      </label>
      </div>
    </section>
        <br>
   <!--  PREGUNTA 4  -->
    <section class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="comment">4-  En caso de no estar conforme con el producto adquirido ¿Por qué?</label>
          <textarea class="form-control" rows="6" id="comentarios" placeholder="Escribenos aquí..."></textarea>
        </div>
      </div>
    </section>
    <br>
    <!--  PREGUNTA 5  -->
    <section class="row">
      <div class="col-md-6">
        <p>5-  En el momento de la compra ¿Qué influyó más en su decisión?</p>
      </div>
      <div class="col">
        <label class="radio">
        <input type="checkbox" name="pregunta1" id="pregunta1a" value="SI"> Marca
      </label>
      </div>
      <div class="col">
        <label class="radio">
        <input type="checkbox" name="pregunta1" id="preguntab" value="NO"> Modelo
      </label>
      </div>
      <div class="col">
        <label class="radio">
        <input type="checkbox" name="pregunta1" id="preguntac" value="NA"> Calidad
      </label>
      </div>
      <div class="col">
        <label class="radio">
        <input type="checkbox" name="pregunta1" id="preguntab" value="NO"> Color
      </label>
      </div>
    </section>
    <br>
<!--  PREGUNTA 6  -->
    <section class="row">
          <div class="col-md-8">
            <p>6-   Para realizar un promedio ¿Qué edad tiene?</p>
          </div>
          <div class="col-md-4">
            <select class="form-control" id="pregunta4">
            <option value="">Seleccione su Edad: </option>
            <option value="3">Adolescencia (12 - 18 años)</option>
            <option value="2">Juventud (14 - 26 años)</option>
            <option value="1">Adultez (27- 59 años)</option>
            <option value="0">Persona Mayor (60 años o mas) envejecimiento y vejez.</option>
          </select>
          </div>
        </section>
        <br>
     <!--  PREGUNTA 7  -->
       <section class="row">
          <div class="col-md-8">
            <p>7-   ¿Cómo lo calificaría el producto adquirido?</p>
          </div>
          <div class="col-md-4">
            <select class="form-control" id="pregunta4">
            <option value="6">Excelente</option>
            <option value="5">Muy Bueno</option>
            <option value="4">Bueno</option>
            <option value="3">Regular</option>
            <option value="2">Mala</option>
            <option value="1">Muy Mala</option>
            <option value="0">No Responde</option>
          </select>
          </div>
        </section>
        <br>
    <!--  PREGUNTA 7  -->
    <section class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="comment">8-  Si lo desea, dejenos un comentario personal :)</label>
          <textarea class="form-control" rows="6" id="comentarios" placeholder="Escribenos aquí..."></textarea>
        </div>
      </div>
    </section>
    <section class="row">
      <div class="col-md-12">
        <button type="button" class="btn btn-info" id="saveForm" onclick="mensaje()">Guardar Encuesta</button>
      </div>
    </section>
  </div>

  <br /><br />

  echo 
      '<script>
        function mensaje(){
          window.alert("¡Muchas Gracias por Realizar la Encuesta! Tu opinión nos ayuda a Crecer");
         self.location = "../inicio.php";
        };
         
       </script>';
<?php include_once "pie.php";?>

</body>
</html>