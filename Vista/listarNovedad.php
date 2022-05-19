<?php
require_once('../Controlador/ControlaNovedad.php');
$controlaNovedad = new controlaNovedad();
$listarNovedad = $controlaNovedad->listarNovedad();
//var_dump($listarCategoria);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Mostrar Novedad</title>
</head>
<body>
    <a class="btn btn-dark btn-block" href="../Vista/registrarNovedad.php">Registrar Novedad</a>
    <br> <br>
    <a class="btn btn-dark btn-block" href="../Vista/registrarAmbiente.php">Registrar Ambiente</a>
    <br> <br>
    <table  id="example" class="table table-dark table-striped-columns" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>idAmbiente</th>
                <th>idTipoNovedad</th>
                <th>descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listarNovedad as $novedad){
                    echo "<tr>";
                    echo "<td>".$novedad['idReporte']."</td>";
                    echo "<td>".$novedad['idAmbiente']."</td>";
                    echo "<td>".$novedad['idTipoNovedad']."</td>";
                    echo "<td>".$novedad['descripcion']."</td>";
                    echo "<td>
                    <form method='POST' action='../Controlador/controlaNovedad.php'>
                    <input type='hidden' name='idReporte' value=".$novedad['idReporte']." />
                    <button type='submit' name='editar'>Editar</button>
                    </form>
                    <a href='#' onclick='validarEliminacion($novedad[idReporte])' >Eliminar</a>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
<script>
    function validarEliminacion(idReporte){
        let eliminar = "";
        if(confirm('¿Está seguro de eliminar la Novedad?')){
            document.location.href = "../Controlador/controlaNovedad.php?idReporte="+idReporte+"&eliminar";
        }
    }



</script>
<script src="../assets/js/jquery-3.5.1.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    } );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
