<?php

class BaseDatos{

    public $usuarioBD="root";
    public $passwordBD="";  

    public function __construct(){}

    public function conectarBD(){

        try{

            $infoBD="mysql:host=localhost;dbname=admin_productos";
            $conexionBD= new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
            return($conexionBD);
        
        }catch(PDOException $error){

            echo($error->getMessage());

        }
    }

    public function agregarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        $consultaAgregarDatos= $conexionBD->prepare($consultaSQL);
        $resultado=$consultaAgregarDatos->execute();
        
        
        if($resultado){
            echo("Registro agregado con éxito");
        }else{
            echo("Error agregando el registro");
        }

    }

    public function buscarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
        $consultaBuscarDatos->execute();
        return($consultaBuscarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL){

        //1. Conectarme a la BD
        $conexionBD=$this->conectarBD();
    
        //2. Preparar la consulta
        $consultaEliminarDatos= $conexionBD->prepare($consultaSQL);
    
        //3. Ejecutar la consulta
        $resultado=$consultaEliminarDatos->execute();
    
        //4. verifique el resultado
        if($resultado){
            echo("Registro eliminado con éxito");
        }else{
            echo("Error eliminando el registro");
        }
    
    }

    public function editarDatos($consultaSQL){

        //1. Conectarme a la BD
        $conexionBD=$this->conectarBD();
    
        //2. Preparar la consulta
        $consultaEditarDatos= $conexionBD->prepare($consultaSQL);
    
        //3. Ejecutar la consulta
        $resultado=$consultaEditarDatos->execute();
    
        //4. verifique el resultado
        if($resultado){
            echo("Registro editado con éxito");
        }else{
            echo("Error editando el registro");
        }
    
    }
}


?>