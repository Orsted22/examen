<?php
require_once('conexion.php');

class CrudNovedad{

    public function __construct(){

    }

    public function listarNovedad(){
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Definir el la sentencia sql
        //sql: Struct Query Language: Lenguaje Estructurado de Consulta
        $sql = $baseDatos->query('SELECT * FROM novedad ORDER BY idReporte ASC');
        //Ejecutar la consulta
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return($sql->fetchAll()); //retornar todos los registros de la consulta.
    }

    public function registrarNovedad($novedad){
        $mensaje = "";
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Preparar la sentencia sql
        $sql = $baseDatos->prepare('INSERT INTO novedad(idReporte,idAmbiente, idTipoNovedad, descripcion) VALUES (:idReporte, :idAmbiente, :idTipoNovedad, :descripcion)');
        $sql->bindValue('idReporte', '');
        $sql->bindValue('idAmbiente', $novedad->getidAmbiente());
        $sql->bindValue('idTipoNovedad', $novedad->getidTipoNovedad());
        $sql->bindValue('descripcion', $novedad->getdescripcion());
        try{
            $sql->execute(); //Ejecutar el sql
            $mensaje =  "Registro Exitoso <a href='../Vista/listarNovedad.php'>Volver</a>";
        }
        catch(Excepcion $e){
            $mensaje = $e->getMessage(); //Obtener el mensaje de error.
        }
        Conexion::desconectar($baseDatos); //Cierra la conexión.
        return $mensaje;
    }
    
    public function buscarNovedad($novedad){
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Definir el la sentencia sql
        //sql: Struct Query Language: Lenguaje Estructurado de Consulta
        $sql = $baseDatos->query("SELECT * FROM novedad 
               WHERE idReporte=".$novedad->getIdReporte());
        //Ejecutar la consulta
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return $sql->fetch();
        //return($sql->fetch()); //retornar todos los registros de la consulta.
    }

    public function actualizarNovedad($novedad){
        $mensaje = "";
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Preparar la sentencia sql
        $sql = $baseDatos->prepare('UPDATE novedad 
        SET idAmbiente =:idAmbiente,
        idTipoNovedad =:idTipoNovedad,
        descripcion =:descripcion
        WHERE idReporte=:idReporte');
        $sql->bindValue('idReporte', $novedad->getIdReporte());
        $sql->bindValue('idAmbiente', $novedad->getidAmbiente());
        $sql->bindValue('idTipoNovedad', $novedad->getidTipoNovedad());
        $sql->bindValue('descripcion', $novedad->getdescripcion());
        try{
            $sql->execute(); //Ejecutar el sql
            $mensaje =  "Actualización Exitosa <a href='../Vista/listarNovedad.php'>Volver</a>";
        }
        catch(Excepcion $e){
            $mensaje = $e->getMessage(); //Obtener el mensaje de error.
        }
        Conexion::desconectar($baseDatos); //Cierra la conexión.
        return $mensaje;
    }

    public function eliminarNovedad($novedad){
        $mensaje = "";
        //Establecer la conexión a la base datos
        $baseDatos = Conexion::conectar();
        //Preparar la sentencia sql
        $sql = $baseDatos->prepare('DELETE FROM novedad 
        WHERE idReporte=:idReporte');
        $sql->bindValue('idReporte', $novedad->getIdReporte());
        try{
            $sql->execute(); //Ejecutar el sql
            $mensaje =  "Eliminación Exitosa";
        }
        catch(Excepcion $e){
            $mensaje = $e->getMessage(); //Obtener el mensaje de error.
        }
        Conexion::desconectar($baseDatos); //Cierra la conexión.
        return $mensaje;
    }
 
}

//$prueba = new CrudNovedad();
//var_dump($prueba->listarCrud());
?>