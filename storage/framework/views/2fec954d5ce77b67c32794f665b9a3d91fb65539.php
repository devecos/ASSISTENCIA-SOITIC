<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4 col-lg-3">
    <div class="ts-story ts-separate-bg-element" style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($post->imagem); ?>);">
        
        <div class="mbr-overlay" style="background: black;opacity: 0.6;"></div>
        <figure><?php echo e(Carbon\Carbon::parse($post->created_at)->format('d/m/Y')); ?></figure>
        <div class="container">
            <a href="<?php echo e(route('blog', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])); ?>">
                <h4><?php echo e($post->titulo); ?></h4>
                <p><?php echo e($post->descricao); ?></p>
                <a href="<?php echo e(route('blog', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])); ?>"
                    class="btn btn-primary btn-sm">Confira</a>
            </a>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(!empty($posts->nextPageUrl())): ?>
<div class="col-12 text-center">
    <a data-url="<?php echo e($posts->nextPageUrl()); ?>" onclick="showMore(this);" id="mostrar-mais"
        class="btn btn-primary btn-mini btn-rounded">Carregar mais</a>
</div>
<?php endif; ?>

<?php /**PATH C:\Users\felip\Downloads\ECOS\ARQUIVOTECA-ECOS\resources\views/pages/loadMoreBlog.blade.php ENDPATH**/ ?>