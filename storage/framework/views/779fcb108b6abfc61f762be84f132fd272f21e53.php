<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informações de Apoio ao Assistente</title>
        <style>
            .Logo{
                display:         flex;
                justify-content: center;     
            }
            Body{
                background-image : url(assets/labsys/bglab.png);
            }
            .botao {
                position: fixed; /*elemento fixo na página*/
                bottom: 30px;
                right: 0px;
                box-shadow: 5px 5px 5px black;
                border-radius: 20px;
                text-align: center;
                background-color:white;
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
            .botao_questoes{
                border: none;
                margin-top: 10px;
                padding: 5px;
                box-shadow: 5px 5px 5px black;
                border-radius: 5px;
                text-align: center;
                background-color:white;
            }
            .botao_questoes:hover{
                background-color: #B9E5C3;
            }
           
        </style>
    </head>
    <body>
        <header>
            <div class="Logo" >
                <img src="<?php echo e(asset('assets/labsys/LogoLab.png')); ?>" alt="LabSys">
            </div>
            
        </header>
        <nav>
       
            <ol>
                
               <li><button class="botao_questoes" onclick="document.location = '<?php echo e(route('q1')); ?>'">Exame nao sai valor de referencia</button></li>
               <li><button class="botao_questoes"  onclick="document.location = '<?php echo e(route('q2')); ?>'">Sistema fechando no momento do impresso</button></li>

            </ol>
        </nav>
        
        <footer>
            <button class="fixed-r" onclick="document.location = '<?php echo e(route('home')); ?>'">Soluções</button>
        </footer>
    </body>
</html><?php /**PATH C:\Projetos\assistenciasoitic\resources\views/pages/questoes.blade.php ENDPATH**/ ?>