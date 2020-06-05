<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Agência ECOS, agenciaecos.com">
<meta name="robots" content="index, follow">

<?php if(isset($blog_metatags)): ?>
<title><?php echo e($blog_metatags->titulo); ?></title>
<meta lang='pt-br' name='keywords' content='<?php echo e($blog_metatags->url); ?>' />
<meta name="description" content="<?php echo e($blog_metatags->descricao); ?>">
<meta name="author" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:url" content="https://www.arquivoteca.com.br/">
<meta property="og:title" content="<?php echo e($blog_metatags->titulo); ?>">
<meta property="og:site_name" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:description" content="<?php echo e($blog_metatags->descricao); ?>">
<meta property="og:image" content="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($blog_metatags->imagem); ?>">
<meta property="og:locale" content="pt_BR">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="800">
<?php elseif(isset($servico_metatags)): ?>
<title>ARQUIVOTECA - <?php echo e($servico_metatags->titulo); ?></title>
<meta lang='pt-br' name='keywords' content='<?php echo e($metatags->url); ?>' />
<meta name="description" content="<?php echo e($servico_metatags->descricao); ?>">
<meta name="author" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:url" content="https://www.arquivoteca.com.br/">
<meta property="og:title" content="<?php echo e($servico_metatags->titulo); ?>">
<meta property="og:site_name" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:description" content="<?php echo e($servico_metatags->descricao); ?>">
<meta property="og:image" content="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($servico_metatags->imagem); ?>">
<meta property="og:locale" content="pt_BR">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="800">
<?php elseif(isset($solucao_metatags)): ?>
<title>ARQUIVOTECA - <?php echo e($solucao_metatags->titulo); ?></title>
<meta lang='pt-br' name='keywords' content='<?php echo e($metatags->url); ?>' />
<meta name="description" content="<?php echo e($solucao_metatags->descricao); ?>">
<meta name="author" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:url" content="https://www.arquivoteca.com.br/">
<meta property="og:title" content="<?php echo e($solucao_metatags->titulo); ?>">
<meta property="og:site_name" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:description" content="<?php echo e($solucao_metatags->descricao); ?>">
<meta property="og:image" content="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($solucao_metatags->imagem); ?>">
<meta property="og:locale" content="pt_BR">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="800">
<?php else: ?>
<title><?php echo e($metatags->titulo); ?></title>
<meta lang='pt-br' name='keywords' content='<?php echo e($metatags->url); ?>' />
<meta name="description" content="<?php echo e($metatags->descricao); ?>">
<meta name="author" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:url" content="https://www.arquivoteca.com.br/">
<meta property="og:title" content="<?php echo e($metatags->titulo); ?>">
<meta property="og:site_name" content="ARQUIVOTECA - Cuidar de seus documentos é nosso papel">
<meta property="og:description" content="<?php echo e($metatags->descricao); ?>">
<meta property="og:image" content="https://s3-us-west-2.amazonaws.com/fasow/39064/imagens/<?php echo e($metatags->imagem); ?>">
<meta property="og:locale" content="pt_BR">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="800">
<?php endif; ?><?php /**PATH C:\Users\ECOS\Documents\GitHub\ARQUIVOTECA-ECOS\resources\views/layouts/meta.blade.php ENDPATH**/ ?>