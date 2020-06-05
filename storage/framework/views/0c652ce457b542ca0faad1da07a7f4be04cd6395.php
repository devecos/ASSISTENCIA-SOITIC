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
            <div class="row" id="parceiros">
                <?php echo $parceiro->texto; ?>

                
            </div>
        </div>

        
        
        
    </section>

    <!-- PARCEIROS -->
    <section id="buy-now" class="ts-block text-center py-5"
        style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($parceiro->imagem); ?>)">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: #000915;"></div>
        <div class="container">
            <div class="ts-title mb-3">
                <h2 class="mb-0 text-white">Sua empresa aqui</h2>
            </div>
           <!--  <div class="mt-5 mb-2">
                <a href="<?php echo e($parceiro->url); ?>" class="btn btn-outline-white">Saiba mais</a>
            </div> -->

        </div>
    </section>
    
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Downloads\ECOS\ARQUIVOTECA-ECOS\resources\views/pages/parceiros.blade.php ENDPATH**/ ?>