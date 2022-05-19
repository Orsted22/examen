<?php
require_once('conexion.php');

class CrudAmbiente{

    public function __construct(){

    }

    public function listarAmbiente(){
        
        $baseDatos = Conexion::conectar();
    
        $sql = $baseDatos->query('SELECT * FROM ambiente ORDER BY idAmbiente ASC');

        $sql->execute();
        Conexion::desconectar($baseDatos);
        return($sql->fetchAll()); 
    }

    public function registrarAmbiente($ambiente){
        $mensaje = "";
    
        $baseDatos = Conexion::conectar();
       
        $sql = $baseDatos->prepare('INSERT INTO ambiente(idAmbiente, Descripcion, NumeroComputadores) VALUES (:idAmbiente, :Descripcion, :NumeroComputadores)');
        $sql->bindValue('idAmbiente', '');
        $sql->bindValue('Descripcion', $ambiente->getdescripcion());
        $sql->bindValue('NumeroComputadores', $ambiente->getnumeroComputadores());
        try{
            $sql->execute();
            $mensaje =  "Registro Exitoso <br> <a href='../Vista/listarAmbiente.php'>Ver ambientes</a>
            <br>
            <a href='../Vista/listarNovedades.php'>Volver a Novedades</a>";
        }
        catch(Excepcion $e){
            $mensaje = $e->getMessage(); 
        }
        Conexion::desconectar($baseDatos);
        return $mensaje;
    }
    
    public function buscarAmbiente($ambiente){
       
        $baseDatos = Conexion::conectar();
       
        $sql = $baseDatos->query("SELECT * FROM ambiente 
               WHERE idAmbiente=".$ambiente->getidAmbiente());
       
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return $sql->fetch();
       
    }

}

?>