<?php
require_once('../Controlador/ControlaAmbiente.php');
$controlaAmbiente = new controlaAmbiente();
$listarAmbiente = $controlaAmbiente->listarAmbiente();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Mostrar Ambiente</title>
</head>

<body>
    <a href="../Vista/listarNovedad.php">Volver a Novedades</a>
    <table  id="example" class="table table-dark table-striped-columns" style="width:100%">
        <thead>
            <tr>
                <th>idAmbiente</th>
                <th>Descripcion</th>
                <th>Cantidad Computadores</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listarAmbiente as $ambiente){
                    echo "<tr>";
                    echo "<td>".$ambiente['idAmbiente']."</td>";
                    echo "<td>".$ambiente['Descripcion']."</td>";
                    echo "<td>".$ambiente['NumeroComputadores']."</td>";
                    echo "<td>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

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
