<?php $__env->startSection('content'); ?>
<main id="ts-content">

    <section class="cid-rJCR6DfJoO" id="header02-6" data-sortbtn="btn-primary">


        <div class="container align-left">
            <div class="row">
                <div class="mbr-white col-md-12 col-lg-12 pt-5 pb-3">
                    <h5 class="text-white mbr-fonts-style">Trabalhe Conosco</h5>
                    <h2 class="mbr-section-title mbr-semibold mbr-fonts-style text-white"><?php echo e($banner->titulo); ?></h2>

                </div>
            </div>
        </div>

    </section>


    <!--GALLERY *********************************************************************************************-->
    <section class="pb-5 pt-4 block" id="gallery" style="background-color: #e8e8e8;">
        <div class="container">
            <div class="ts-title text-center">
                <h2 class="text-success"><?php echo e($banner->descricao); ?></h2>
                <h5 class="text-black ts-font-weight__bold"><?php echo e($banner->url); ?></h5>
            </div>

        </div>


        <div class="ts-gallery">
            <div class="container-fluid pr-3 pl-3">
                <div class="row">
                    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-12 mt-2 mb-2">
                            
                                <?php
                                    parse_str( parse_url( $video->url, PHP_URL_QUERY ), $video_aux );
                                ?>
                                
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($video_aux['v']); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    
                    
                    
                    
                </div>

            </div>

        </div>


    </section>





    <!--NUMBERS *********************************************************************************************-->
    <section id="numbers" class="ts-block ts-background-is-dark ts-separate-bg-element py-5 ts-xs-text-center"
        data-bg-image="assets/img/bg-mountain.jpg" data-bg-image-opacity=".1" data-bg-color="#163f72"
        data-bg-parallax="scroll" data-bg-parallax-speed="3">
        <div class="container">
            <div class="ts-promo-numbers py-5">
                <div class="row d-flex align-items-center justify-content-center">
                    <?php $__currentLoopData = $contadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-3">
                            <div class="ts-promo-number">
                                <h2 class="ts-opacity__50"><?php echo e($contador->titulo); ?></h2>
                                <h5 class="mb-0"><?php echo e($contador->descricao); ?></h5>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    

                    


                </div>

            </div>

        </div>

    </section>







    <!-- 

  
    <section id="our-team" class="ts-block our-team" style="background-color: #e8e8e8;">
        <div class="container">
            <div class="ts-title">
                <h2 class="text-center text-success">Nossa Equipe</h2>
            </div>
           
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="ts-card__image ts-img-into-bg">
                            <img class="card-img-top" src="assets/img/person.jpg" alt="Card image cap">
                        </div>
                       
                        <div class="card-body text-center">
                            <h5 class="mb-1">Anita Matthews</h5>
                            <h6 class="ts-opacity__50">Company CEO</h6>
                        </div>
                       
                        <div class="card-footer bg-white text-center">
                            <div class="ts-social-icons">
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-mail socicon"></span> 
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-facebook socicon"></span>
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-linkedin socicon"></span>
                                </a>
                            </div>
                          
                        </div>
                       
                    </div>
                 
                </div>
               
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="ts-card__image ts-img-into-bg">
                            <img class="card-img-top" src="assets/img/person.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="mb-1">Levi Masters</h5>
                            <h6 class="ts-opacity__50">Investment Specialist</h6>
                        </div>
                       
                        <div class="card-footer bg-white text-center">
                            <div class="ts-social-icons">
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-mail socicon"></span> 
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-facebook socicon"></span>
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-linkedin socicon"></span>
                                </a>
                            </div>
                          
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="ts-card__image ts-img-into-bg">
                            <img class="card-img-top" src="assets/img/person.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="mb-1">John Doe</h5>
                            <h6 class="ts-opacity__50">Head Of Marketing</h6>
                        </div>
                       
                        <div class="card-footer bg-white text-center">
                            <div class="ts-social-icons">
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-mail socicon"></span> 
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-facebook socicon"></span>
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-linkedin socicon"></span>
                                </a>
                            </div>
                          
                        </div>
                    </div>
                    
                </div>
             
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="ts-card__image ts-img-into-bg">
                            <img class="card-img-top" src="assets/img/person.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="mb-1">Lisa Haley</h5>
                            <h6 class="ts-opacity__50">Customer Support</h6>
                        </div>
                       
                        <div class="card-footer bg-white text-center">
                            <div class="ts-social-icons">
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-mail socicon"></span> 
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-facebook socicon"></span>
                                </a>
                                <a href="#" class="text-success">
                                    <span class="mbr-iconfont socicon-linkedin socicon"></span>
                                </a>
                            </div>
                          
                        </div>
                    </div>
                   
                </div>
              
            </div>
           
        </div>
      
    </section>
-->


    <section class="work-with-us">
        <div class="container">
            <div class="row justify-content-center mb-4 mt-3">
                <h3 class="text-success text-center">Trabalhe Conosco</h3>
            </div>
            <div class="row d-flex align-items-center justify-content-center">

                <div class="col-12">

                    <form method="POST" action="<?php echo e(route('curriculo')); ?>" enctype="multipart/form-data" id="form-contact" class="clearfix ts-form ts-form-email ts-inputs__transparent">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nome" class="form-control" id="form-contact-name" 
                                        placeholder="Nome Completo*" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="form-contact-email" 
                                        placeholder="E-mail*" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="telefone" class="form-control" id="telefone" 
                                        placeholder="Telefone/Celular*" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="vaga" class="form-control" id="form-contact-name" 
                                        placeholder="Vaga que tem interersse*" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="file row">
                                        <div class="col-lg-2 col-md-3 col-sm-12">
                                            <span class="text-success ts-h6 ts-font-weight__semibold">Envie o
                                                seu currículo:</span>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-12">
                                            <input type="file" name="curriculo" id="file" aria-label="File browser example"
                                                class="w-100" required>
                                            <span class="file-custom"></span>
                                        </div>

                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="mensagem" class="form-control" id="form-contact-message" rows="5" 
                                        placeholder="Mensagem" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group clearfix text-center">
                            <button value="submit" class="btn btn-info" >Enviar</button>
                        </div>

                        
                    </form>
                </div>

            </div>
        </div>
    </section>


</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\work\repositorios\arquivoteca\resources\views/pages/trab.blade.php ENDPATH**/ ?>