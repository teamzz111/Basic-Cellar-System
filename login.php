<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>INICIAR SESIÓN</title>
</head>

<body style="background: rgba(236, 236, 236, 0.788);">
    <div id="Login">
        <h2>Bienvenido al sistema <br> de gestión de bodega</h2>
        <form class="formulario" id="formularioL"  accept-charset="utf-8" action="validar.php?opt=1" method="post">
            <input id="ccc" type="number" autocomplete="off" name="user" value="" placeholder="Usuario" required>
            <input id="password" type="password" autocomplete="off" name="pass" value="" placeholder="Contraseña" required>
            <br>
            <?php
            if(isset($_GET['error']) && $_GET['error'] == 1){
                echo "<li style='color: white; list-style-type: none; background: red; padding: 3%;'>Autenticación fallida!</li>";
            } else if(isset($_GET['error']) && $_GET['error'] == 2) {
                echo "<li style='color: white; list-style-type: none; background: red; padding: 3%;'>¡Debes iniciar sesión!</li>";
            }
            ?>          
            <input type="submit" value="INICIAR SESIÓN">
        </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

</html>

</html>