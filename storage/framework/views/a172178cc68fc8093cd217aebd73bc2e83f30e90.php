<?php $__env->startSection('content'); ?>
<main id="ts-content">

    <section class="blog_breadcrumb_wrapper"
        style="background: linear-gradient(90deg,#166889,#163f72)!important;padding-bottom:50px">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="blog_breadcrumb_div text-left">
                        <h1 class="text-white">BUSCA DO BLOG</h1>
                        <!--                                 <ol class="breadcrumb">
                            <li>You are here:</li>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li class="active">Lifestyle</li>
                        </ol> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="blog_main_wrapper blog_toppadder60 blog_bottompadder60" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-md-9" id="card-deck">
                    <div class="row" style="display:flex;justify-content:center;">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-5">
                            <div class="ts-story ts-separate-bg-element"
                                style="background:linear-gradient(0deg, rgba(255, 255, 255, 0.55), rgba(162, 153, 159, 0.3)), url(https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($post->imagem); ?>);background-size:cover;background-position:center">
                                <a href="<?php echo e(route('blog', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])); ?>">
                                    <figure><?php echo e(Carbon\Carbon::parse($post->created_at)->format('d/m/Y')); ?></figure>
                                    <h3><?php echo e($post->titulo); ?></h3>
                                    <p><?php echo e($post->descricao); ?></p>
                                    <a href="<?php echo e(route('blog', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])); ?>"
                                        class="btn btn-primary btn-sm">Confira</a>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                  
                </div>
                <div class="col-md-3 theiaStickySidebar"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="blog_sidebar">
                            

                            <div class="widget widget_categories wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="blog_main_heading_div">
                                    <div class="blog_heading_div">
                                        <h3 class="blog_bg_blue">Categorias</h3>
                                    </div>
                                </div>
                                <ul>
                                    <?php $__currentLoopData = $subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(route('blog.categorie', ['id' => $item->id_subcategoria])); ?>"><?php echo e($item->nome_subcategoria); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 
                                </ul>
                            </div>
                          
                            <div class="widget widget_newsletter wow fadeInUp">
                                <div class="blog_main_heading_div">
                                    <div class="blog_heading_div">
                                        <h3 class="blog_bg_lightblue">Se Inscreva</h3>
                                    </div>
                                </div>
                                <div class="blog_newsletter">
                                    <p>Coloque o seu e-mail e receba a nossa Newsletter</p>
                                    <?php $__env->startComponent('pages.newsletter'); ?>
                                    <?php echo $__env->renderComponent(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\work\repositorios\arquivoteca\resources\views/pages/blog_cat.blade.php ENDPATH**/ ?>