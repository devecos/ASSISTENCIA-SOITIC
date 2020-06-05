<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informações de Apoio ao Assistente</title>
        <style>
        body{
            background-image : url(assets/logo.jpg);
            }
        .botao{
            box-shadow: 5px 5px 5px  black;
            width: 206px;
            height: 102px;
            border-radius: 20px;
        }
        .botao:hover{
            box-shadow: 10px 10px 10px  black;
        }
        .centralizado{
            text-align: center;
            font-size: 70px;
            color: rgb(51,153,255);
            text-shadow: 2px 2px black;
        }
           
        </style>
    </head>
    <body>
        <header>
            <h1 class="centralizado">Soluções</h1>
            <div class="botao"><a href="<?php echo e(route('questoes')); ?>"><img src="<?php echo e(asset('assets/Botaolab.png')); ?>" alt="LabSys"></a></div>
        </header>
    </body>
</html><?php /**PATH C:\Projetos\assistenciasoitic\resources\views/pages/home.blade.php ENDPATH**/ ?>