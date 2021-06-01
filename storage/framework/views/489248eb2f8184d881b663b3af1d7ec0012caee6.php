
<?php $__env->startSection('content'); ?>
<div class="row">
    <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if(Session::has('success')): ?>
                <div class="alert alert-info">
                    <?php echo e(Session::get('success')); ?>

                </div>
                <?php endif; ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nueva Compra</h3>
                    </div> 
                    <div class="panel-body">	 	 	 	 	 
                        <div class="table-container">
                            <form method="POST" action="<?php echo e(route('venta.store')); ?>" role="form">
                                <?php echo e(csrf_field()); ?>

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 colmd-6">
                                            <div class="form-group">
                                                <input type="text" name="calzado" id="calzado" class="form-control input-sm" placeholder="Nombre del calzado">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 colmd-6">
                                            <div class="form-group">
                                                <input type="text" name="marca" id="marca" class="form-control input-sm" placeholder="Nombre de marca">
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                        <div class="col-xs-6 col-sm-6 colmd-6">
                                            <div class="form-group">
                                                <input type="text" name="fcompra" id="fcompra" class="form-control input-sm" placeholder="Ingrese fecha de compra">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 colmd-6">
                                            <div class="form-group">
                                                <input type="text" name="tipopago" id="tipopago" class="form-control input-sm" placeholder="Ingrese el tipo de pago">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <textarea name="monto" class="formcontrol input-sm" placeholder="monto"></textarea>
                                </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 colmd-12">
                                            <input type="submit" value="Guardar" class="btn btn-success btn-block">
                                            <a href="<?php echo e(route('venta.index')); ?>" class="btn btn-info btn-block" >Atrás</a>
                                        </div>	 
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Platanitos\resources\views/venta/create.blade.php ENDPATH**/ ?>