<?php $__env->startSection('content'); ?>
<main id="ts-content">
    <section class="cid-rJCR6DfJoO" id="header02-6" data-sortbtn="btn-primary">
        <div class="container align-left">
            <div class="row">
                <div class="mbr-white col-md-12 col-lg-12 pt-5 pb-3">
                    <h5 class="text-white mbr-fonts-style">Arquivoteca</h5>
                    <h2 class="mbr-section-title mbr-semibold mbr-fonts-style text-white"><?php echo e($parceiro->titulo); ?></h2>

                </div>
            </div>
        </div>

    </section>

    <section class="features1 cid-rJCS9ne11xF mbr-parallax-background" id="header04-8">
        <div class="container">
            <div class="row pb-4">
                <div class="col-12">
                    <h2 class="text-center text-success"><?php echo e($parceiro->descricao); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php echo $parceiro->texto; ?>

                
            </div>
        </div>


        <div class="container my-3">

            <div class="row pb-3 pt-3">
                <div class="col-12">
                    <h3 class="mbr-text text-center text-success">Nossos parceiros</h3>
                </div>
            </div>

            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="controls-top">
                        <a class="btn-floating-left text-primary mr-2" href="#multi-item-example" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="btn-floating-right text-primary ml-2" href="#multi-item-example" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <?php $__currentLoopData = $parceiro->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($galeria->excluido == 0): ?>
                            <?php if($loop->first || ($loop->iteration -1) % 4 == 0): ?>
                            <div class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
                                <div class="row mr-3 ml-3">
                            <?php endif; ?>
                                    <div class="col-md-3 d-md-flex align-items-center justify-content-center">
                                        <a href="//<?php echo e($galeria->titulo); ?>" target="_blank" class="d-flex align-items-center justify-content-center">
                                            <img class="img-fluid" src="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($galeria->imagem); ?>" alt="Card image cap">
                                        </a>
                                    </div>
                            <?php if($loop->last || $loop->iteration % 4 == 0): ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>


        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\work\repositorios\arquivoteca\resources\views/pages/parceiros.blade.php ENDPATH**/ ?>