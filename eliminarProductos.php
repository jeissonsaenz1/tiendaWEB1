<?php
    include("BaseDatos.php");

    $id=$_GET["id"];

    $transaccion= new BaseDatos();

    $consultaSQL="DELETE FROM productos WHERE idProducto='$id'";

    $transaccion->eliminarDatos( $consultaSQL);
?>