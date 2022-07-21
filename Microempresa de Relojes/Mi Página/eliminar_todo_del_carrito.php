<?php
include_once "funciones.php";

quitarTodoDelCarrito();
# Saber si redireccionamos a tienda o al carrito, esto es porque
# llamamos a este archivo desde la tienda y desde el carrito
header("Location: inicio.php");

