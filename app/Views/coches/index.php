<?php if (!empty($coches) && is_array($coches)): ?>

<?php foreach ($coches as $coche_item): ?>

<h3>
    <?= esc($coche_item['modelo']) ?>
</h3> <!-- Campo BBDD -->

<div class="main">
    <?= esc($coche_item['precio']) ?>
    <!-- Campo BBDD -->
</div>
<p>
    <!-- ./coches/ -->
    <a href="coches/<?= esc($coche_item['id']) ?>">
        Ver Coche
    </a>
</p>

<?php endforeach ?>

<?php else: ?>

<h3>No hay Coches</h3>

<p>No hay coches para mostrar.</p>

<?php endif ?>