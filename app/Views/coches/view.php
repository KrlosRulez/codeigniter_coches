<?php if (!empty($coches) && is_array($coches)): ?>

    <h2>
        Modelo: <?= $coches['modelo'] ?>
    </h2> <!-- Campo BBDD -->

    <h3 class="main">
        Precio: <?= esc($coches['precio']) ?> €
        <!-- Campo BBDD -->
        <br /><br />
        Marca: <?= esc($coches['marca']) ?>
        <!-- Campo BBDD de tabla "marcas" -->
    </h3>

    <a href="./">
        Volver al listado de coches
    </a>

<?php else: ?>

    <h3>No hay Coches</h3>

    <p>No hay coches para mostrar.</p>

<?php endif ?>