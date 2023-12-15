<?php if (!empty($coches) && is_array($coches)): ?>

    <h3>
        <?= $coches['modelo'] ?>
    </h3> <!-- Campo BBDD -->

    <div class="main">
        <?= esc($coches['precio']) ?>
        <!-- Campo BBDD -->
        <br />
        <?= esc($coches['id_marca']) ?>
    </div>


<?php else: ?>

    <h3>No hay Coches</h3>

    <p>No hay coches para mostrar.</p>

<?php endif ?>