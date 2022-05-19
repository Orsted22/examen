<?php
require_once('../Modelo/Ambiente.php');
require_once('../Modelo/CrudAmbiente.php');

class controlaAmbiente{
    
    public function __construct(){

    }

    public function listarAmbiente(){
    
        $crudAmbiente = new CrudAmbiente();
        return $crudAmbiente->listarAmbiente();
    }

    public function registrarAmbiente( $descripcion, $numeroComputadores){
     
        $crudAmbiente = new crudAmbiente();
        $ambiente = new Ambiente();
        $ambiente->setnumeroComputadores($numeroComputadores);
        $ambiente->setdescripcion($descripcion);
        $mensaje = $crudAmbiente->registrarAmbiente($ambiente);
        echo $mensaje;
        
    }

    public function buscarAmbiente($idAmbiente){
    
        $crudAmbiente = new CrudAmbiente();
        $ambiente = new Ambiente();
        $ambiente->setidAmbiente($idAmbiente);
    
        $datosAmbiente = $crudAmbiente->buscarAmbiente($ambiente);
        $ambiente->setdescripcion($datosAmbiente['descripcion']);
        $ambiente->setnumeroComputadores($datosAmbiente['numeroComputadores']);
    
        return $ambiente;
    }

    public function desplegarVista($pagina){
        header("Location:../Vista/".$pagina);
    }
}

$controlaAmbiente = new controlaAmbiente();
if (isset($_POST['registrar'])){ 
    $idAmbiente = $_POST['idAmbiente'];
    $descripcion = $_POST['Descripcion'];
    $numeroComputadores = $_POST['NumeroComputadores'];
    
    $controlaAmbiente->registrarAmbiente( $descripcion, $numeroComputadores);
}

elseif(isset($_REQUEST['vista'])){
    $controlaAmbiente->desplegarVista($_REQUEST['vista']);
}

?>