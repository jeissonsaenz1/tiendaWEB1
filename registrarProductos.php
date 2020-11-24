<?php

    include("BaseDatos.php");

    if (isset($_POST["botonRegistrar"])){
        $referencia_producto=$_POST["referencia_producto"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $foto=$_POST["foto"];

        $transaccion= new BaseDatos();

        $consultaSQL="INSERT INTO productos (referencia,marca,precio,descripcion,foto) VALUES ('$referencia_producto','$marca','$precio','$descripcion','$foto')";

        $transaccion->agregarDatos($consultaSQL);

    }

?>