<?php
    class ventas{
        public function obtenerdatosproducto($id_producto){
            require "conexion.php";

            $sql="SELECT `id`, `nombre`, `descripcion`, `precio`, `cantidad`, `id_proveedor` FROM `productos` WHERE id_producto='$id_producto'";
            $result=mysqli_query($conexion,$sql);

            $verdatos=mysqli_fetch_row($result);

            $datos=array(
                'nombre' => $verdatos[1],
                'descripcion' => $verdatos[2],
                'precio' => $verdatos[3],
                'cantidad' => $verdatos[4]
            );
            return $datos;
        }

    }


?>