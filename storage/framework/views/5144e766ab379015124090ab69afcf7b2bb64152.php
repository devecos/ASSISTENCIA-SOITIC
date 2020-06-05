    <div class="blog_post_style2 blog_single_div">
        <div class="blog_post_style2_img wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <img src="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($post->imagem); ?>" class="img-fluid"
                alt="">
        </div>
        <div class="blog_post_style2_content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h3><?php echo e($post->descricao); ?></h3>
            <div class="blog_author_data"><span class="mbr-iconfont fa fa-calendar"></span>
                    <?php echo e(Carbon\Carbon::parse($post->created_at)->format('d/m/Y')); ?></a></div><br><br>

            <?php echo $post->texto; ?>

        </div>
    </div>
    <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Comentários</h3>
    <section class="mbr-section mbr-section__comments" id="facebook-comments-block-4c" data-rv-view="509"
        style="background-color: transparent; padding-top: 1.5rem; padding-bottom: 4.5rem;">

        <div class="container mbr-section__container mbr-section__container--isolated addons-container"
            style="width:inherit">
            <div class="addons-row">
                <div class="addons-container-inner">
                    <div class="facebookPlaceholder" data-numposts="6">
                        <h2>FACEBOOK COMMENTS WILL BE SHOWN ONLY WHEN YOUR SITE IS ONLINE</h2> <img
                            src="assets/images/facebook-comments.jpg">
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php /**PATH C:\Users\felip\Downloads\ECOS\ARQUIVOTECA-ECOS\resources\views/pages/blog_content.blade.php ENDPATH**/ ?>