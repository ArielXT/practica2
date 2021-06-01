<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="<?php echo e(URL::asset('../css/laravel.png')); ?>" type="image/x-icon"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<title>Customerdb Laravel</title>

<!-- Custom CSS -->
<?php $__env->startSection('styles_laravel'); ?>

<!-- Bootstrap Core CSS -->
<link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('assets/css/bootstrap.css')); ?>"> 
<link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('assets/css/app.css')); ?>"> 

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<?php echo $__env->yieldSection(); ?>

<?php echo $__env->yieldContent('mis_estilos'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-inverse">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Customerdb Laravel</a>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li><a class="nav-link active" aria-current="page" href="<?php echo e(url('/zapatos')); ?>">Zapatos</a></li>
            <li><a class="nav-link active" aria-current="page" href="<?php echo e(url('/venta')); ?>">Ventas</a></li>
            </ul>

        </div>
        </div>
    </nav>
    <!-- <div class="container-fluid"> -->
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        <!-- Aquí incluiremos el contenido de nuestra aplicación -->
        <?php echo $__env->yieldContent('content'); ?>

        </div>
    </div>
</div>
<!-- </div> -->

<!-- Scripts -->
<script src="<?php echo e(URL::asset('assets/js/jquery.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/bootstrap.min.js')); ?>"></script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\Platanitos\resources\views/app.blade.php ENDPATH**/ ?>