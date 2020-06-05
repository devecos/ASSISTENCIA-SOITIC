<?php $__env->startSection('content'); ?>
<main id="ts-content">

    <section class="blog_breadcrumb_wrapper"
        style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($post->imagem2); ?>)!important;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="blog_breadcrumb_div text-left">
                        <h1 class="text-white"><?php echo e($post->titulo); ?></h1>
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
                <div class="col-lg-9 col-md-12 col-sm-12 col-12" id="card-deck">
                    <?php $__env->startComponent('pages.blog_content', ['post' => $post]); ?>
                    <?php echo $__env->renderComponent(); ?>
                    <!--                     <div class="blog_author_div wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="blog_author_img">
                    <img src="https://via.placeholder.com/122x122" class="img-fluid" alt="">
                </div>
                <div class="blog_author_content">
                    <h3>About the Author</h3>
                    <h4>John Doe <span> - Designer</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et irmagnUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatDuis ee dolor in reprehenderit.</p>
                </div>
            </div> -->
                    
                    
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 theiaStickySidebar"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="blog_sidebar">

                            <div class="widget widget_recent_news wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="blog_main_heading_div">
                                    <div class="blog_heading_div">
                                        <h3 class="blog_bg_lightblue">Postagens Recentes</h3>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <?php $__currentLoopData = $posts_aux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="blog_news">
                                            <div class="blog_news_title">
                                                <h4><a href="#"><?php echo e($posts->titulo); ?></a></h4>
                                                <p><?php echo e(Carbon\Carbon::parse($posts->created_at)->format('d M, Y')); ?> <a
                                                        href="#">- <?php echo e($posts->subcategoria->nome_subcategoria); ?></a></p>
                                                <br>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        
                                    </li>
                                    
                                </ul>
                            </div>

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
                            
                            <!--                         <div class="widget widget_archive wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="blog_main_heading_div">
                        <div class="blog_heading_div">
                            <h3 class="blog_bg_blue">Archives</h3>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">August 2017 <span>(02)</span></a>
                        </li>
                        <li>
                            <a href="#">September 2017 <span>(45)</span></a>
                        </li>
                        <li>
                            <a href="#">October 2017 <span>(125)</span></a>
                        </li>
                        <li>
                            <a href="#">November 2017 <span>(75)</span></a>
                        </li>
                        <li>
                            <a href="#">December 2017 <span>(10)</span></a>
                        </li>
                        <li>
                            <a href="#">January  2018 <span>(186)</span></a>
                        </li>
                        <li>
                            <a href="#">February  2018 <span>(02)</span></a>
                        </li>
                    </ul>
                </div> -->
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

<?php echo $__env->make('layouts.base', ['blog_metatags' => $post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\work\repositorios\arquivoteca\resources\views/pages/blog.blade.php ENDPATH**/ ?>