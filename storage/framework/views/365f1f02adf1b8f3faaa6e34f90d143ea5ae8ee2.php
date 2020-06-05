<!DOCTYPE html>
<html lang="en">
<head>
    <?php $__env->startComponent('layouts.meta'); ?>
    <?php echo $__env->renderComponent(); ?>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/iofrm-style.css" type="text/css" >
    <link rel="stylesheet" href="assets/css/iofrm-theme1.css" type="text/css" >
    <link rel="stylesheet" href="assets/mobirise-icons/mobirise-icons.css">

</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg" style="background-image: url(<?php echo e(asset('assets/img/Banner-Cinza.jpg')); ?>);"></div>
                <div>
                    <?php $__currentLoopData = $atualizacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atualizacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="container p-3">
                        <div class="row p-2 news-bg">
                            <div class="col-12 text-left">
                                <h5 class="text-success" style=""><span class="mbr-iconfont fa-usb fa"></span> <?php echo e($atualizacao->titulo); ?></h5>
                                <div class="m-2">
                                    <?php echo $atualizacao->texto; ?>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <a href="<?php echo e(route('home')); ?>" class="d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($tela->imagem); ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="form-button text-center d-flex align-items-center justify-content-center">
                            <a href="<?php echo e($tela->url); ?>" class="ibtn btn"><?php echo e($tela->titulo); ?></a> 
                            
                        </div>
                        
                       <!--  <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <script src="js/jquery.min.js"></script> -->
<?php $__env->startComponent('layouts.scripts'); ?>
<?php echo $__env->renderComponent(); ?>
</body>
</html><?php /**PATH /var/www/html/resources/views/pages/login.blade.php ENDPATH**/ ?>