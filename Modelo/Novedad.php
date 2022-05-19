<?php

class Novedad{
    //Definir los atributos
    private $idRegistro;
    private $idAmbiente;
    private $idTipoNovedad;
    private $descripcion;

    //Definir el constructor
    
    public function __construct(){ //Constructor vacio

    }
    
    /*
    public function __construct($idCategoria,$idAmbiente){ //constructor lleno
        $this->idCategoria = $idCategoria;
        $this->idAmbiente = $idAmbiente;
    }
    */

    //Definir los métodos de set y get.
    public function setidReporte($idReporte){
        $this->idReporte = $idReporte;
    }
    public function getidReporte(){
        return $this->idReporte;
    }



    public function setidAmbiente($idAmbiente){
        $this->idAmbiente = $idAmbiente;
    }
    public function getidAmbiente(){
        return $this->idAmbiente;
    }


    public function setidTipoNovedad($idTipoNovedad){
        $this->idTipoNovedad = $idTipoNovedad;
    }
    public function getidTipoNovedad(){
        return $this->idTipoNovedad;
    }



    public function setdescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function getdescripcion(){
        return $this->descripcion;
    }





}
?>

