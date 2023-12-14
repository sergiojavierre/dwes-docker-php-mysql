<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexion.php");
        if(isset($_POST["nombre"])) {
            insertaProducto($conn, $_POST["nombre"]);
        }
        $productos = buscaProductos($conn);
    ?>
    <h1>Productos</h1>
    <ul>
        <?php
            while($producto = $productos->fetch_assoc()) {
                echo "<li>" . $producto["nombre"] . "</li>";
            }
        ?>
    </ul>
    <form action="index.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>