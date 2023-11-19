<?php
$productos = array(
    array(
        'nombre' => 'KIA NEW SELTOS',
        'imagen' => 'img/Producto1.jpg',
        'descripcion' => 'La gama KTM EXC-F  marca el listón como la gama de Enduro más avanzada tecnológicamente del paddock, con un repertorio de trucos totalmente nuevo.',
        'precio' => 25000
    ),
    array(
        'nombre' => 'CARENS',
        'imagen' => 'img/Producto2.jpg',
        'descripcion' => 'Sus 6 airbags brindan seguridad omnidireccional para el conductor y los acompañantes.',
        'precio' => 23000
    ),
    array(
        'nombre' => 'KIA NEW SPORTAGE',
        'imagen' => 'img/Producto3.jpg',
        'descripcion' => 'Con una capacidad de 591L, nunca faltará espacio donde colocar las cosas. Para cargas grandes, los asientos traseros se pliegan con solo presionar un botón',
        'precio' => 26000
    ),
    array(
        'nombre' => 'KIA ',
        'imagen' => 'img/Producto4.jpg',
        'descripcion' => 'El nuevo refinado motor de 4 tiempos y el escape la dotan de un altísimo nivel de prestaciones y la convierten en una máquina a la altura de los campeones es potente y la más emocionante.',
        'precio' => 25000
    ),

    
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Productos </h1>
<h3>Vehiculos  </h3>

<div class="contenedor-productos">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" width="150">
                <h3><?php echo $producto['nombre']; ?></h3>
                <p><?php echo $producto['descripcion']; ?></p>
                <p>Precio: $<?php echo number_format($producto['precio'], 2); ?></p>
                <button onclick="agregarAlCarrito('<?php echo $producto['nombre']; ?>', <?php echo $producto['precio']; ?>)">Agregar al Carrito</button>
            </div>
        <?php endforeach; ?>
    </div>


    <script src="js/script.js"></script>
</body>
</html>
