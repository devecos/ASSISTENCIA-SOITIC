<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informações de Apoio ao Assistente</title>
        <style>
             Body{
                background-image : url(assets/labsys/Questoes/resq/bglab.png);
                
            }
         
            .centralizado{
            text-align: center;
            font-size: 50px;
            }
            .fixed-r{
                
                position: fixed; /*elemento fixo na página*/
                bottom: 20px;
                right: 10px;
                box-shadow: 5px 5px 5px black;
                border-radius: 5px;
                text-align: center;
                background-color:blue;
                color: white;
                
            }
            .fixed-r:hover{
                background-color:gray;
            }
            .fixed-l {
                position: fixed; /*elemento fixo na página*/
                bottom: 20px;
                left: 10px;
                box-shadow: 5px 5px 5px black;
                border-radius:5px;
                text-align: center;
                background-color:blue;
                color: white;
            }
            .fixed-l:hover{
                background-color:gray;
            }
            .titulo_sulucao{
            text-align: center;
            box-shadow: 5px 5px 5px black;
            background-color:#B9E5C3;
            }
        </style>
    </head>
    <body>
        <header>
            <h1 class="centralizado">Sistema fechando no momento do impresso</h1>
        </header>
       
            <ul>
               <li>Verifique se há uma impressora setada como padrão </li>
               <li>Verifique se a impressora setada como padrao nao esta offline</li>
            </ul>
            
    
        
        <footer>
            <button class="fixed-l" onclick="document.location = '<?php echo e(route('questoes')); ?>'">Voltar</button>
            <button class="fixed-r" onclick="document.location = '<?php echo e(route('home')); ?>'">Soluções</button>
        </footer>
    </body>
</html><?php /**PATH C:\Projetos\ASSISTENCIA-SOITIC\resources\views/pages/q2.blade.php ENDPATH**/ ?>