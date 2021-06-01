
<?php $__env->startSection('content'); ?>
<h1 class="text-primary">Lista de zapatos</h1>
<table class="table table-bordered" id="tablezapatos">
    <thead>
    <hr>
    <tr>
        <th class="text-center">Id zapato</th>
        <th class="text-center">Calzado</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Color</th>
        <th class="text-center">Talla</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Genero</th>
        <th class="text-center">Edades</th>
        <th class="text-center">Acciones</th>
        <th class="text-center">Agregar</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Eliminar</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $zapatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e($zapato->idzapato); ?></td>
            <td class="text-center"><?php echo e($zapato->calzado); ?></td>
            <td class="text-center"><?php echo e($zapato->tipo); ?></td>
            <td class="text-center"><?php echo e($zapato->color); ?></td>
            <td class="text-center"><?php echo e($zapato->talla); ?></td>
            <td class="text-center"><?php echo e($zapato->marca); ?></td>
            <td class="text-center"><?php echo e($zapato->genero); ?></td>
            <td class="text-center"><?php echo e($zapato->edades); ?></td>
            <td>
                <a href="<?php echo e(route('zapatos.show', $zapato->idzapato)); ?>" class="btn btn-info">Ver</a>
            </td>
            <td><a class="btn btn-success btn-xs" href="<?php echo e(route('zapatos.create')); ?>">Agregar otro Zapato</a></td>
            <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('CbzapatosController@edit', $zapato->idzapato)); ?>">Editar datos</a></td>
            <td>
            <form method="POST" action="<?php echo e(url("zapatos/{$zapato->idzapato}")); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Eliminar</button>
            </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
    <tr>
        <th class="text-center">Id zapato</th>
        <th class="text-center">Calzado</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Color</th>
        <th class="text-center">Talla</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Genero</th>
        <th class="text-center">Edades</th>
        <th class="text-center">Acciones</th>
        <th class="text-center">Agregar</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Eliminar</th>
    </tr>
    </tfoot>
</table>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Platanitos\resources\views/zapatos/index.blade.php ENDPATH**/ ?>