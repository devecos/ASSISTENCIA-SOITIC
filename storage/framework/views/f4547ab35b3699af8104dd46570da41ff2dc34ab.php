
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7227034.js"></script>
<!-- End of HubSpot Embed Code -->

<script src="<?php echo e(asset('assets/js/custom.hero.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
<script src="<?php echo e(asset('assets/js/isInViewport.jquery.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scrolla.jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-validate.bootstrap-tooltip.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/dropdown/js/nav-dropdown.js')); ?>"></script>
<script src="<?php echo e(asset('assets/dropdown/js/navbar-dropdown.js')); ?>"></script>
<script src="<?php echo e(asset('assets/ytplayer/jquery.mb.ytplayer.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/theme/js/script.js')); ?>"></script>
<script async src="<?php echo e(asset('facebook-plugin/facebook-script.js')); ?>"></script>
<script async src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
<script src="<?php echo e(asset('assets/js/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.mask.min.js')); ?>"></script>


<script>

    $(document).ready(function () {
        var maskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            options = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(maskBehavior.apply({}, arguments), options);
                }
            };

        $('#telefone').mask(maskBehavior, options);

    });
    $(window).load(function () {
        $('.loader').css('display', 'none');
    });

    //   function loading_show(){
    //     $('.loader').html("<img src='<?php echo e(asset('assets/img/logo_arquivoteca.gif')); ?>'/>").fadeIn('fast');
    //   };

    //   function loading_hide(){
    //     $('.loader').fadeOut('fast');
    //   };

</script>

<?php if(session('success')): ?>
<script>
    Swal.fire({
        type: 'success',
        text: "<?php echo e(session('success')); ?>"
    });

</script>
<?php endif; ?>


<?php if($errors->any()): ?>
<script>
    errors = {
        !!json_encode($errors - > messages()) !!
    };
    out = '';
    for (var p in errors) {
        out += errors[p] + '<br>';
    }

    $(document).ready(function () {


        Swal.fire({
            type: 'error',
            title: 'Oops...\n',
            html: `${out}`
        });


    })

</script>
<?php endif; ?>

<?php if(session()->has('message')): ?>
<script>
    var out = {
        !!json_encode(session() - > get('message')) !!
    };
    $(document).ready(function () {


        Swal.fire({
            type: 'success',
            title: 'Muito bem!',
            html: `${out}`
        });


    });

</script>
<?php endif; ?>
<?php /**PATH C:\Users\felip\Downloads\ECOS\ARQUIVOTECA-ECOS\resources\views/layouts/scripts.blade.php ENDPATH**/ ?>