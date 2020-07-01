<?php
require_once '../controllers/FormController.php';
$form = new FormController();
$response = $form->getTeams();
?>
<html>
<head>
    <title>Formulario mundial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
</html>
<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Datos del mundial</a>
    <a class="nav-link active" href="../index.php">Volver</a>
</nav>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre del Equipo</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($response as $currentRow) {
        echo '<tr>';
        echo "<td>" . $currentRow['idEquipo'] . "</td>";
        echo "<td>" . $currentRow['nombreEquipo'] . "</td>";
        echo '</tr>';
    }
    ?>
    </tbody>

</table>
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