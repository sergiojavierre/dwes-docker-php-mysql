<?

include_once("productos/application/ProductoUseCases.php");
include_once("productos/infrastructure/db/ProductoRepositoryMySQL.php");

$productoUseCases = new ProductoUseCases(new ProductoRepositoryMySQL());
$productos = $productoUseCases->findAll();


?>

<main>
<h1>Productos</h1>
    <ul>
        <?php
            foreach($productos as $producto){
                echo "<li>".$producto->getNombre()."</li>";
            }
        ?>
    </ul>
    <form action="index.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
    </form>
</main>