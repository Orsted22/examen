<?php
require_once('../Modelo/Novedad.php');
require_once('../Modelo/CrudNovedad.php');

class controlaNovedad{
    
    public function __construct(){

    }

    public function listarNovedad(){
        //Crear un objeto de la clase Novedad
        $crudNovedad = new CrudNovedad();
        return $crudNovedad->listarNovedad();
    }

    public function registrarNovedad($idAmbiente, $idTipoNovedad, $descripcion){
        //Crear un objeto de la clase Novedad
        $crudNovedad = new crudNovedad();
        $novedad = new Novedad();
        $novedad->setidReporte('');
        $novedad->setidAmbiente($idAmbiente);
        $novedad->setidTipoNovedad($idTipoNovedad);
        $novedad->setdescripcion($descripcion);
        $mensaje = $crudNovedad->registrarNovedad($novedad);
        echo $mensaje;
        
    }

    public function buscarNovedad($idReporte){
        //Crear un objeto de la clase Reporte
        $crudNovedad = new CrudNovedad();
        $novedad = new Novedad();
        $novedad->setidReporte($idReporte);
        //Buscar los datos de la categoria en la BD
        //var_dump($Categoria);
        $datosNovedad = $crudNovedad->buscarNovedad($novedad);
        $novedad->setidAmbiente($datosNovedad['idAmbiente']);
        $novedad->setidTipoNovedad($datosNovedad['idTipoNovedad']);
        $novedad->setdescripcion($datosNovedad['descripcion']);
        //var_dump($Categoria);
        return $novedad;
    }

    public function actualizarNovedad($idReporte,$idAmbiente,$idTipoNovedad,$descripcion){
        //Crear un objeto de la clase categoria
        $crudNovedad = new CrudNovedad();
        $novedad = new Novedad();
        $novedad->setidReporte($idReporte);
        $novedad->setidAmbiente($idAmbiente);
        $novedad->setidTipoNovedad($idTipoNovedad);
        $novedad->setdescripcion($descripcion);
        //var_dump($Categoria);
        $mensaje = $crudNovedad->actualizarNovedad($novedad);
        echo $mensaje;
    }

    public function eliminarNovedad($idReporte){
        //Crear un objeto de la clase categoria
        $crudNovedad = new crudNovedad();
        $novedad = new Novedad();
        $novedad->setidReporte($idReporte);
        $novedad->setidAmbiente('');
        $novedad->setidTipoNovedad('');
        $novedad->setdescripcion('');
        //var_dump($Categoria);
        $mensaje = $crudNovedad->eliminarNovedad($novedad);
        //echo $mensaje;
         //El siguiente script muestra eventos con javascript
        echo "<script>
            alert('$mensaje');
            document.location.href='../Vista/listarNovedad.php';
        </script>";
    }

    public function desplegarVista($pagina){
        header("Location:../Vista/".$pagina);
    }
}

$controlaNovedad = new controlaNovedad();
if (isset($_POST['registrar'])){ //Si la variable existe 
    //Recibir variables del formulario
    $idAmbiente = $_POST['idAmbiente'];
    $idTipoNovedad = $_POST['idTipoNovedad'];
    $descripcion = $_POST['descripcion'];
    
    $controlaNovedad->registrarNovedad($idAmbiente, $idTipoNovedad, $descripcion);
}
else if(isset($_REQUEST['editar'])){
    //Recibir variables desde el formulario
    $idReporte = base64_encode($_REQUEST['idReporte']);
    $idReporte = base64_encode($idReporte);
    //base_decode: función que encripta una variable
    //var_dump($categoria);
    $controlaNovedad->desplegarVista('editarNovedad.php?idReporte='.$idReporte);
}
else if (isset($_POST['actualizar'])){ //Si la variable existe 
    //Recibir variables del formulario
    $idReporte = $_POST['idReporte'];
    $idAmbiente = $_POST['idAmbiente'];
    $idTipoNovedad = $_POST['idTipoNovedad'];
    $descripcion = $_POST['descripcion'];
    $controlaNovedad->actualizarNovedad($idReporte,$idAmbiente,$idTipoNovedad,$descripcion);

}
else if(isset($_GET['eliminar'])){
    //Recibir variables desde el formulario
    $idReporte = $_REQUEST['idReporte'];
    //var_dump($Novedad);
    $controlaNovedad->eliminarNovedad($idReporte);
    //$controladorCategoria->desplegarVista('listarCategorias.php');

}
elseif(isset($_REQUEST['vista'])){
    $controlaNovedad->desplegarVista($_REQUEST['vista']);
}

?>