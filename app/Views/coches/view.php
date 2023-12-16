<?php if (!empty($coches) && is_array($coches)): ?>

    <div class="main">
        <h2>Modelo: <?= $coches['modelo'] ?></h2>
        <!-- Campos BBDD -->
        <p>Precio: <?= esc($coches['precio']) ?> €</p>
        <!-- Campos BBDD -->
        <p>Marca: <?= esc($coches['marca']) ?></p>
        <!-- Campo BBDD de tabla "marcas" -->
    </div>

    <a href="./">
        Volver al listado de coches
    </a>

<?php else: ?>

    <h3>No hay Coches</h3>

    <p>No hay coches para mostrar.</p>

<?php endif ?>