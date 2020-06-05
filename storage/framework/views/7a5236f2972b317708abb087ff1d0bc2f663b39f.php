<?php $__env->startSection('content'); ?>
<!-- BANNER -->
<?php
parse_str( parse_url( $banner->url, PHP_URL_QUERY ), $video_aux );
?>
<section class="cid-rJTFCjSzHD mbr-fullscreen" data-bg-video="https://www.youtube.com/embed/<?php echo e($video_aux['v']); ?>"
    id="header02-g" data-sortbtn="btn-primary">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="container align-left">
        <div class="row">
            <div class="mbr-white col-md-10 col-lg-8">

                <h1 data-animate="ts-fadeInUp" class="text-mobile text-white"><?php echo e($banner->titulo); ?></h1>
                <div data-animate="ts-fadeInUp" data-delay=".1s" class="text-mobile">
                    <p class="w-100 text-white"><?php echo e($banner->descricao); ?></p>
                </div>
                <div class="btn-mobile">
                    <a href="#empresa" class="btn btn-outline-white btn-lg ts-scroll mr-4" data-animate="ts-fadeInUp"
                        data-delay=".2s">
                        Conheça
                        <i class="fa fa-arrow-right small ml-3 ts-opacity__50"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<main id="ts-content">
    <!-- SOLUÇÔES -->
    <section id="solucoes"></section>
    <section class="ts-block ts-xs-text-center solucoes" style="background-image: url('assets/img/Banner1.jpg')">
        <!-- <div class="mbr-overlay" style="opacity: 0.4; background-color: #005780;"></div> -->

        <div class="container">
            <div class="ts-title mt-3 text-center">
                <h2 class="text-white">Soluções para o seu negócio</h2>
            </div>
            <div class="row align-items-center justify-content-center">
                <?php $__currentLoopData = $solucoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solucao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-5 col-sm-6 col-md-4 col-xl-4 d-flex align-items-center justify-content-center">
                    <div class="ts-item" data-animate="ts-fadeInUp">
                        <div class="ts-item-content d-flex align-items-center">
                            <div class="ts-item-header">
                                <figure class="icon">
                                    <a href="<?php echo e(route('solucao', ['id' => $solucao->id_texto, 'nome' => str_slug($solucao->titulo)])); ?>"
                                        class="d-flex align-items-center justify-content-center">
                                        <div class="ts-circle__sm" data-bg-color="#163f72">
                                            <img src="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($solucao->imagem); ?>"
                                                alt="" class="w-75">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ts-item-body text-center">
                                <a class="text-white ts-h6 ts-font-weight__semibold"
                                    href="<?php echo e(route('solucao', ['id' => $solucao->id_texto, 'nome' => str_slug($solucao->titulo)])); ?>"><?php echo e($solucao->titulo); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

                

                

                

                

                

                

                
            </div>

        </div>

    </section>

    <!-- A EMPRESA -->
    <section id="sobre"></section>
    <section class="section-about">

        <div class="container">
            <div class="row about-row">
                <div class="col-md-6 col-12 d-flex align-items-center">
                    <div class="ts-about">
                        <div class="ts-title">
                            <h2 class="text-danger text-left"><?php echo e($empresa->titulo); ?></h2>
                        </div>
                        <?php echo $empresa->texto; ?>

                        
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <a href="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($empresa->imagem); ?>"
                                    class="ts-gallery__image popup-image">
                                    <img src="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($empresa->imagem); ?>"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 carousel-div">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $__currentLoopData = $empresa->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($galeria->excluido == 0): ?>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->index == 0 ? 'active' : ''); ?>"></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $empresa->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($galeria->excluido == 0): ?>
                                    <div class="carousel-item <?php echo e($loop->index == 0 ? 'active' : ''); ?>">
                                        <img class="d-block w-100"
                                            src="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($galeria->imagem); ?>"
                                            alt="First slide">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>


        <!--                 <div class="ts-background d-none d-sm-block" data-bg-color="#e8e8e8" data-bg-parallax1="scroll" data-bg-parallax-speed="3">
            <div class="owl-carousel w-50 ts-push-left__100 h-100 ts-parallax-element1" data-owl-loop="1" data-owl-nav-container="#carousel-external-control">
                <div class="ts-background-image" data-bg-image="assets/img/Post---01.png"></div>
                <div class="ts-background-image" data-bg-image="assets/img/Post---02.jpg"></div>
            </div>
        </div> -->

    </section>

    <!-- SERVIÇOS -->
    <section id="servicos"></section>
    <section class="header1 cid-rJdLcUH3VL" data-bg-video="https://www.youtube.com/watch?v=AHoJ9HO4ZGM">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>

        <!--                 <div class="container text-content">
            
        </div> -->

        <div class="container mbr-black">
            <h2 class="mbr-section-title pb-2 mbr-fonts-style text-white text-center">Serviços</h2>
            <h5 class="mbr-text pb-1 mbr-fonts-style text-white text-center">Com nosso trabalho, sobra mais tempo e
                espaço para sua empresa crescer</h5>

            <div class="row justify-content-center">
                <div class="col-md-8" style="display:flex;flex-wrap:wrap;">
                    <?php
                    $card = 1;
                    $row = 1;
                    ?>
                    <?php $__currentLoopData = $servicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($row % 2 == 0): ?>
                    <?php if($card % 2 == 0): ?>
                    <div class="box-item col-md-3 text-center box-b2">
                        <?php else: ?>
                        <div class="box-item col-md-3 text-center box-b1">
                            <?php endif; ?>
                            <?php else: ?>
                            <?php if($card % 2 == 0): ?>
                            <div class="box-item col-md-3 text-center box-b1">
                                <?php else: ?>
                                <div class="box-item col-md-3 text-center box-b2">
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('servico', ['id' => $servico->id_texto, 'nome' => str_slug($servico->titulo)])); ?>"
                                        class="d-flex align-items-center justify-content-center">
                                        <div class="row d-flex align-items-center justify-content-center">
                                            <div class="icon-block-top text-center">
                                                <img src="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($servico->imagem); ?>"
                                                    alt="" class="img-fluid">
                                            </div>
                                            <div class="pt-1 pr-3 pl-3">
                                                <a class="box-item-title mbr-fonts-style text-white ts-h7 ts-font-weight__semibold"
                                                    href="<?php echo e(route('servico', ['id' => $servico->id_texto, 'nome' => str_slug($servico->titulo)])); ?>"><?php echo e($servico->titulo); ?></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <?php
                                $card++;
                                if ($loop->iteration % 4 == 0) {
                                $row++;
                                }
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        

                        

                        

                        

                        

                        


    </section>

    <!-- BLOG -->
    <section id="blog"></section>
    <section id="successful-stories" class="ts-block pb-5" style="background-color: #e8e8e8;">
        <div class="container">
            <div class="ts-title text-center mt-3">
                <h2 class="text-secondary">Blog</h2>
            </div>

            <div class="row" id="posts">
                <?php $__env->startComponent('pages.loadMoreBlog', ['posts' => $posts]); ?>
                <?php echo $__env->renderComponent(); ?>

                

                

                

            </div>

            
        </div>

    </section>

    <!-- PARCEIROS -->
    <section id="buy-now" class="ts-block text-center py-5"
        style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($parceiro->imagem); ?>)">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: #000915;"></div>
        <div class="container">
            <div class="ts-title mb-3">
                <h2 class="mb-0 text-white"><?php echo e($parceiro->titulo); ?></h2>
            </div>
            <div class="mt-5 mb-2">
                <a href="<?php echo e($parceiro->url); ?>" class="btn btn-outline-white">Saiba mais</a>
            </div>

        </div>
    </section>


</main>

<script>
    const showMore = (button) => {
        let url = $(button).attr('data-url');
        $.ajax({
            type: 'get',
            url: url,
            success: function (data) {
                $("#mostrar-mais").remove();
                $("#posts").append(data);
            },
        });
    };

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\work\repositorios\arquivoteca\resources\views/pages/home.blade.php ENDPATH**/ ?>