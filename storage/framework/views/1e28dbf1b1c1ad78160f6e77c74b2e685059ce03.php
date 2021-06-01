
<?php $__env->startSection('content'); ?>
<h1>
    Lista Detallada <?php echo e($venta->idzapato); ?>

</h1>

<p>Id moneda; <?php echo e($venta->idzapato); ?></p>
<p>Calzado: <?php echo e($venta->calzado); ?></p>
<p>Marca: <?php echo e($venta->marca); ?></p>
<p>Fecha de Compra: <?php echo e($venta->fcompra); ?></p>
<p>Tipo de pago:<?php echo e($venta->tipopago); ?></p>
<p>Monto: <?php echo e($venta->monto); ?></p>
<hr>

<a href="<?php echo e(route('venta.index')); ?>">Volver al índice</a>
<a href="<?php echo e(route('venta.show', $venta->idzapato)); ?>">Recargar</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Platanitos\resources\views/venta/show.blade.php ENDPATH**/ ?>