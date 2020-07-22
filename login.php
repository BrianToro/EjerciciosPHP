<html>

<head>
    <title>Formulario mundial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

</html>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Datos del mundial</a>
        <a class="nav-link active" href="./index.php">Volver</a>
    </nav>
    <div style="margin-top: 5%">
        <h1 style="text-align: center;">Inicio de Sesion</h1>
    </div>
    <div class="card" style="margin: 20%; margin-top: 10%;">
        <form action="login.php" method="POST">
            <div class="form-group" style="padding: 1% 3%;">
                <label for="exampleInputEmail1">Nombre de usuario</label>
                <input type="text" class="form-control" name="userName" required>
            </div>
            <div class="form-group" style="padding: 1% 3%;">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="userPwd" required>
            </div>
            <button style="margin-left: 3%;" type="submit" class="btn btn-primary">Iniciar</button>
            <p style="margin-left: 3%; margin-top: 5px" >¿No tienes cuenta? <a href="./register.php">Registrate</a></p>
        </form>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

<?php
error_reporting(0);
require_once './controllers/UsersController.php';
$userName = $_POST['userName'];
$userPwd = $_POST['userPwd'];
$userController = new UserController();
if(isset($_POST['userName'])){
    if($userController->login($userName, $userPwd)){
        header('Location: index.php?name=' . $userName);
    } else {
        echo '<script type="text/javascript">
                    alert("El usuario o la contraseña no han sido encontrados");
                </script>';
    }
}

?>