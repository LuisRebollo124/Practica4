<?php
include_once "conexion.php"
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php
try {
    $con=getConexion();
    $sql="SELECT id_tarea,nombre FROM tareas";
    $con->close();
}
catch (mysqli_sql_exception $e){
    $error=mensajeError($e->getCode());
    echo "<p>ERROR: $error</p>";
}
?>
<h1>Lista de tareas</h1>
<main>
    <form action="index.php" method="POST">
        <input type="text" id="tarea" name="tarea" placeholder="Nueva tarea">
        <button id="mas" class="anadir">+</button>
    </form>
    <section>
        <ul id="lista">
            <?php
            $tarea=$_POST["tarea"];
            $sql2 = "INSERT INTO usuarios(id_tarea,nombre) VALUES (null,'$tarea') from tareas";
                echo "<li>$tarea <a>quitar</a></li>";
            ?>
        </ul>
    </section>
</main>
</body>
</html>



