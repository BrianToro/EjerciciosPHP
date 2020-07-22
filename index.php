<html>
<head>
    <title>Formulario mundial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
</html>
<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Datos del mundial</a>
    <?php
        if(isset($_GET['name'])){
            echo '<a class="nav-link active" href="./index.php">Cerrar sesion</a>';
        } else {
            echo '<a class="nav-link active" href="./login.php">Iniciar Sesion</a>
                <a class="nav-link active" href="./register.php">Registrarse</a>';
        }
    ?>
</nav>
<?php
    if(isset($_GET['name'])){
        echo '<div style="margin-top: 5%">
                <h1 style="text-align: center;">Hola '.$_GET['name'].'</h1>
            </div>';
    } 
?>
<div class="card" style="margin: 20%; margin-top: 10%;">
    <div class="card-body">
        <form action="index.php" method="POST">
            <label for="mundial" style="margin: 1%;">¿Que datos del mundial desea?</label>
            <select class="custom-select" name="mundial" id="mundial" style="margin: 1%;" required>
                <option selected>-- Seleccione los datos --</option>
                <option value="equipos">Equipos</option>
                <option value="jugadores">Jugadores</option>
            </select>
            </br>
            <input class="btn btn-primary" type="submit" value="Solicitar datos" style="margin: 1%;">
        </form>
    </div>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
<?php
error_reporting(0);
if ($_POST['mundial'] == 'equipos') {
    header('Location: views/Teams.php');
} elseif($_POST['mundial'] == 'jugadores') {
    header('Location: views/Players.php');
}
?>
