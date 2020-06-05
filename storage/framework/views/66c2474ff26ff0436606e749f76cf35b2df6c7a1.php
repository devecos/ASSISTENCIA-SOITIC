<?php $__env->startSection('content'); ?>
<main id="ts-content">

    <section class="cid-rJCR6DfJoO" id="header02-6" data-sortbtn="btn-primary">


        <div class="container align-left">
            <div class="row">
                <div class="mbr-white col-md-12 col-lg-12 pt-5 pb-3">
                    <h5 class="text-white mbr-fonts-style">Soluções</h5>
                    <h2 class="mbr-section-title mbr-semibold mbr-fonts-style text-white"><?php echo e($solucao->titulo); ?></h2>

                </div>
            </div>
        </div>

    </section>
    <?php
        parse_str( parse_url( $solucao->url, PHP_URL_QUERY ), $video_aux );
    ?>
    <?php if(isset($solucao->url)): ?>
        <section class="features1 cid-rJCS9ne11x mbr-parallax-background" id="header04-8" data-bg-video="https://www.youtube.com/embed/<?php echo e($video_aux['v']); ?>">
    <?php else: ?>
    <section class="features1 cid-rJCS9ne11x mbr-parallax-background" id="header04-8" data-sortbtn="btn-primary"
    style="background-image: url('https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($solucao->imagem2); ?>');">
    <?php endif; ?>
        <div class="container">
            <div class="media-container-row d-flex align-items-center justify-content-center">
                <div class="card col-12 col-md-8 col-lg-7">
                    <div class="card-box">
                        <!--                                 <h2 class="card-title text-center pb-4 mbr-bold mbr-fonts-style text-success">Gestão de Processo de RH</h2> -->
                        <?php echo $solucao->texto; ?>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if(!empty($solucao->texto2)): ?>
        <section class="mbr-section article content5 cid-rJCS4Wxzuj" id="content11-7" data-sortbtn="btn-primary">
            <div class="container">
                <div class="row">
                    <?php echo $solucao->texto2; ?>

                    
                </div>
            </div>
        </section>
    <?php endif; ?>


</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', ['solucao_metatags' => $solucao], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Downloads\ECOS\ARQUIVOTECA-ECOS\resources\views/pages/solucao.blade.php ENDPATH**/ ?>