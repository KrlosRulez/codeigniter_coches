<?php if (!empty($coches) && is_array($coches)): ?>

<?php foreach ($coches as $coche_item): ?>

<h2>
    Modelo: <?= esc($coche_item['modelo']) ?>
</h2> <!-- Campo BBDD -->

<div class="main">
    <p>Precio: <?= esc($coche_item['precio']) ?></p>
    <!-- Campo BBDD -->
</div>
<p>
    <a href="coches/<?= esc($coche_item['id']) ?>">
        Ver Coche
    </a>
    &nbsp;    
    <a href="coches/borrar/<?= esc($coche_item['id']) ?>">
        Eliminar Coche
    </a>
    &nbsp;
    <a href="coches/actualizar/<?= esc($coche_item['id']) ?>">
        Actualizar Coche
    </a>
</p>

<?php endforeach ?>

<?php else: ?>

<h3>No hay Coches</h3>

<p>No hay coches para mostrar.</p>

<?php endif ?>

<a href="coches/nuevo">Crear Nuevo Coche</a>