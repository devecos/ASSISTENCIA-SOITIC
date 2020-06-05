<!DOCTYPE html>
<html lang="en">

<head>
    <?php if(isset($blog_metatags)): ?>
    <?php $__env->startComponent('layouts.meta', ['blog_metatags' => $blog_metatags]); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php elseif(isset($servico_metatags)): ?>
    <?php $__env->startComponent('layouts.meta', ['servico_metatags' => $servico_metatags]); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php elseif(isset($solucao_metatags)): ?>
    <?php $__env->startComponent('layouts.meta', ['solucao_metatags' => $solucao_metatags]); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php else: ?>
    <?php $__env->startComponent('layouts.meta'); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php endif; ?>
    <?php $__env->startComponent('layouts.head'); ?>
    <?php echo $__env->renderComponent(); ?>
</head>

<body data-spy="scroll" data-target=".navbar">

    <div class="ts-page-wrapper" id="page-top">

        <div class="loader">
            <img src="<?php echo e(asset('assets/img/logo_arquivoteca.gif')); ?>" style="width:8%;">
        </div>

        <?php $__env->startComponent('layouts.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php $__env->startComponent('layouts.footer'); ?>
        <?php echo $__env->renderComponent(); ?>
    </div>

    <?php $__env->startComponent('layouts.scripts'); ?>
    <?php echo $__env->renderComponent(); ?>



</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/base.blade.php ENDPATH**/ ?>