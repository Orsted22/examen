<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registrar Novedad</title>
</head>
<body>
    <center><form action="../Controlador/ControlaNovedad.php" method="POST">
    <br> <br>
        <label>IdAmbiente:</label>
        <select name="idAmbiente" id="idAmbiente" required>

	        <option>1</option>
	        <option>2</option>

        </select>
        <br> <br>
        <label>IdTipoNovedad:</label>
        <select name="idTipoNovedad" id="idAmbiente" required>

            <option>1</option>
            <option>2</option>

        </select>
        <br> <br>
        <label>Descripcion:</label>
        <br> 
        <textarea name="descripcion" rows="5" cols="50"></textarea>
        <br>
        
        <button type="submit" class="btn btn-dark btn-block" name="registrar">Registrar</button></center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>