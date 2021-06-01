
<?php $__env->startSection('content'); ?>
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <?php echo csrf_field(); ?>

                <fieldset>
                    <legend>Editar Zapatos</legend>
                    <div class="form-group">
                        <label for="calzado" class="col-lg-label">calzado</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="calzado" name="calzado" value="<?php echo $zapatos->calzado; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipo" class="col-lg-label">tipo</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $zapatos->tipo; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="color" class="col-lg-label">color</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="color" name="color" value="<?php echo $zapatos->color; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="talla" class="col-lg-label">talla</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="talla" name="talla" value="<?php echo $zapatos->talla; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="marca" class="col-lg-label">marca</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $zapatos->marca; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="genero" class="col-lg-label">genero</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $zapatos->genero; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edades" class="col-lg-label">edades</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="edades" name="edades" value="<?php echo $zapatos->edades; ?>">
                        </div>
                    </div>
                    
                    <hr>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="<?php echo e(route('zapatos.index')); ?>" class="btn btn-info btn-block" >Atrás</a>
                            <a href="<?php echo e(route('zapatos.index')); ?>" type="submit" class="btn btn-success btn-block" >Actualizar</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Platanitos\resources\views/zapatos/edit.blade.php ENDPATH**/ ?>