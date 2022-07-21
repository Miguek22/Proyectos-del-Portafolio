<?php
 
  include ($absolute_include."vistas/plantillas/head_imprimir.php"); 
  
?> 

<body>
    <table width="100%">
        <tr>
            <td width="20%">
                <img src="<?php echo $absolute_include.$GLOBALS['LogoEscuela']; ?>" width="75" height="75">
            </td>
            <td class="text-center">
    
                    <H3> <?php echo $GLOBALS['NombreEscuela']; ?></H3>
                    <H4> <?php echo $GLOBALS['TituloEscuela']; ?></H4>
   
            </td>
            <td width="20%">
                <h5>Fecha :
                <?php
                    echo date("d/m/y");
                ?></h5> 

                <h5>
                <?php
                    echo "Hora  :".date( "H:i:s",time());
                ?></h5> 
                <h6>
                <?php
                    echo "Usuario :".$_SESSION['NombreUsuario'];
                ?></h6> 
            </td>
        </tr>
    </table>
   
    <h3 align="center"> Lista de Etapas </h3> 
  
    <hr>

    <table  class="table table-stripped table-bordered nowrap " cellspacing="0" width="100%">

       <tr>
            <td bgcolor="silver">Nombre de las Etapas</td>
       </tr>
   
        <?php foreach ($etapas as $etapas): ?>
        <tr>
            
            <td class="text-center"><?php echo $etapas['cdescripcion_etapa']; ?></td>

        </tr>
        <?php endforeach; ?>
    
    </table>

    <br>       

    <div id="botones">    
        <form action="<?php echo $carpeta_trabajo;?>/controladores/etapasescolares/controller.etapasescolares.php" target="_blank" method="POST">
            <input type="hidden" name="accion" value="pdf">  
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">  

            <button type="button" class="btn btn-info" onClick = "window.location.href = '<?php echo $carpeta_trabajo;?>/controladores/etapasescolares/controller.etapasescolares.php';" > Volver</button>
            <button type="button" onclick="javascript:window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Imprimir</button>
            <button type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Descargar Informe</button>
        </form>       
    </div>    
    <BR>
    

   