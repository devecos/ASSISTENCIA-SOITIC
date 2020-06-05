<form method="POST" action="<?php echo e(route('news')); ?>" class="form-inline">
    <?php echo csrf_field(); ?>
    <div class="blog_form_group">
        <input name="email" type="email" required class="form-control" placeholder="E-mail">
    </div>
    <button value="submit" class="blog_newsletter_btn"><svg
            xmlns="http://www.w3.org/2000/svg" width="17px" height="16px">
            
        </svg></button>
</form><?php /**PATH /var/www/html/resources/views/pages/newsletter.blade.php ENDPATH**/ ?>