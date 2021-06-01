
<?php $__env->startSection('content'); ?>
<h1>
    Lista de Compra <?php echo e($zapatos->idzapato); ?>

</h1>

<p>Id moneda; <?php echo e($zapatos->idzapato); ?></p>
<p>Calzado: <?php echo e($zapatos->calzado); ?></p>
<p>Marca: <?php echo e($zapatos->marca); ?></p>
<p>Fecha de Compra: <?php echo e($zapatos->fcompra); ?></p>
<p>Tipo de pago:<?php echo e($zapatos->tipopago); ?></p>
<p>Monto: <?php echo e($zapatos->monto); ?></p>
<hr>

<a href="<?php echo e(route('zapatos.index')); ?>">Volver al índice</a>
<a href="<?php echo e(route('zapatos.show', $zapatos->idzapato)); ?>">Recargar</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Platanitos\resources\views/zapatos/show.blade.php ENDPATH**/ ?>