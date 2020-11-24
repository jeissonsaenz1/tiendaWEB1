<?php 

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

        $referencia=$_POST["referenciaEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $precio=$_POST["precioEditar"];
        $marca=$_POST["marcaEditar"];

        $id=$_GET["id"];

        $transaccion=new BaseDatos();

        $consultaSQL="UPDATE productos SET referencia='$referencia',precio='$precio',marca='$marca',descripcion='$descripcion' WHERE idProducto='$id'";

        $transaccion->editarDatos($consultaSQL);

        header("location:productos.php");





    }





?>