<?php if (!empty($coches) && is_array($coches)): ?>

<?php foreach ($coches as $coche_item): ?>

<div class="main">
    <h2>Modelo: <?= esc($coche_item['modelo']) ?></h2>
    <!-- Campos BBDD -->
    <p>Precio: <?= esc($coche_item['precio']) ?> €</p>
    <!-- Campos BBDD -->
    <p>Marca: <?= esc($coche_item['marca']) ?></p>
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
    <a href="coches/modificar/<?= esc($coche_item['id']) ?>">
        Actualizar Coche
    </a>
</p>

<?php endforeach ?>

<?php else: ?>

<h3>No hay Coches</h3>

<p>No hay coches para mostrar.</p>

<?php endif ?>

<br /><br />

<a href="coches/nuevo">Crear Nuevo Coche</a>