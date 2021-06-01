
<?php $__env->startSection('content'); ?>
<h1 class="text-primary">Lista de compra</h1>
<table class="table table-bordered" id="tableventa">
    <thead>
    <hr>
    <tr>
        <th class="text-center">Id zapato</th>
        <th class="text-center">Calzado</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Fecha de Compra</th>
        <th class="text-center">Tipo de pago</th>
        <th class="text-center">Monto</th>
        <th class="text-center">Accion</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ventas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e($ventas->idzapato); ?></td>
            <td class="text-center"><?php echo e($ventas->calzado); ?></td>
            <td class="text-center"><?php echo e($ventas->marca); ?></td>
            <td class="text-center"><?php echo e($ventas->fcompra); ?></td>
            <td class="text-center"><?php echo e($ventas->tipopago); ?></td>
            <td class="text-center"><?php echo e($ventas->monto); ?></td>
            <td>
                <a href="<?php echo e(route('venta.show', $ventas->idzapato)); ?>" class="btn btn-info">Ver</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
    <tr>
        <th class="text-center">Id zapato</th>
        <th class="text-center">Calzado</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Fecha de Compra</th>
        <th class="text-center">Tipo de pago</th>
        <th class="text-center">Monto</th>
        <th class="text-center">Accion</th>
    </tr>
    </tfoot>
</table>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Platanitos\resources\views/venta/index.blade.php ENDPATH**/ ?>