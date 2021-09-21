<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Funcionários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <nav class="navbar justify-content-center rounded mt-5 text-center" style="background-color: #fd7e14;">
            <h2><?php echo $__env->yieldContent('cabecalho'); ?></h2>
            <div class="btn-group mr-2" role="group"> 
            <a class="btn-dark btn-sm mb-1 mr-1 ml-5 rounded" style="background-color: #006E5E"; href="\home">Home <span class="sr-only">(Página atual)</span></a>
            <a href="/create" class="btn-dark btn-sm mb-1 rounded "style="background-color: #006E5E";> Adicionar Funcionário</a>
            <a href="/investimentos" class="btn-dark btn-sm mb-1 ml-1 rounded "style="background-color: #006E5E";>Investimentos</a>
            <a href="/investimentos/criar" class="btn-dark btn-sm mb-1 ml-1 rounded "style="background-color: #006E5E";>Adicionar Investimento</a>
            </div>
    </nav>
        <?php echo $__env->yieldContent('conteudo'); ?>
    </div>
</body>
</html>
<?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/layout/layout.blade.php ENDPATH**/ ?>