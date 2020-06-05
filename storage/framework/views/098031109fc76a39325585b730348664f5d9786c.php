<section id="footer"></section>

        <footer id="ts-footer">

            <!--  <div class="map ts-height__400px" id="map"></div> -->

            <section id="contact" class="ts-separate-bg-element cid-rJdLNwRWX7"
                data-bg-image="assets/img/bg-hand-mobile.jpg" data-bg-image-opacity=".1" data-bg-color="#164073">
                <div class="container" style="padding-top:20px">
                    <div class="ts-box mb-0 p-5 ts-mt__n-10" data-animate="ts-fadeInUp">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <h3 class="text-success"><?php echo e($unidades->titulo); ?></h3>
                                <address>
                                    <?php echo $unidades->texto; ?>

                                    <div class="row mb-2">
                                        <div class="social-media col-12">
                                            <ul>
                                                <?php $__currentLoopData = $redes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rede): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a class="icon-transition"
                                                            href="//<?php echo e($rede->url); ?>" target="_blank">
                                                            <span class="<?php echo e($rede->descricao); ?>"></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </address>
                                <!--end address-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-8">
                                <h3 class="text-success">Fale Conosco</h3>
                                <form method="POST" action="<?php echo e(route('contato')); ?>" id="form-contact" class="clearfix ts-form ts-form-email ts-inputs__transparent">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <!-- <label for="form-contact-name">Nome *</label> -->
                                                <input type="text" class="form-control" id="form-contact-name"
                                                    name="nome" placeholder="Nome Completo*" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <!-- <label for="form-contact-email">E-mail *</label> -->
                                                <input type="email" class="form-control" id="form-contact-email"
                                                    name="email" placeholder="E-mail*" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- <label for="form-contact-name">Telefone *</label> -->
                                                <input type="text" id="telefone" class="form-control"
                                                    name="telefone" placeholder="Telefone/Celular*" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- <label for="form-contact-message">Mensagem *</label> -->
                                                <textarea type="text" class="form-control" id="form-contact-message" rows="5"
                                                    name="mensagem" placeholder="Mensagem" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix text-right">
                                        <button value="submit" class="btn btn-info"
                                            id="form-contact-submit">Enviar</button>
                                    </div>
                                    <!--end form-group -->
                                    <div class="form-contact-status"></div>
                                </form>
                                <!--end form-contact -->
                                <div class="row align-items-center justify-content-end mt-3">
                                    <div
                                        class="logo-colum col-md-4 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                        <img src="<?php echo e(asset('assets/img/Logotipo ARQUIVOTECA 2016_cv2.png')); ?>"
                                            class="img-fluid arq-logo-footer">
                                    </div>
                                    <div
                                        class="logo-colum col-md-2 col-lg-2 col-sm-12 d-flex align-items-center justify-content-end">
                                        <img src="<?php echo e(asset('assets/img/Horus-Logo.png')); ?>" class="img-fluid horus-logo-footer">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="text-center text-white py-4">
                        <small>Arquivoteca - <?php echo e(Carbon\Carbon::now()->format('Y')); ?>. Todos os direitos reservados ® | Desenvolvido por <a
                                class="text-white ts-font-weight__bold" href="http://agenciaecos.com/"
                                target="_blank">ECOS</a></small>
                    </div>
                </div>
            </section>
        </footer>

        
        <!--end #footer--><?php /**PATH /var/www/html/resources/views/layouts/footer.blade.php ENDPATH**/ ?>