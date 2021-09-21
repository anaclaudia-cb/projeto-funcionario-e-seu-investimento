<?php $__env->startSection('cabecalho'); ?>
    Valor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<?php if(!empty($mensagem)): ?>
        <div class="alert alert-success">
            <?php echo e($mensagem); ?>

        </div>
    <?php endif; ?>

    <body>
        <li class="list-group-item justify-content-between align-items-center">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Valor</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                     <?php $__currentLoopData = $valors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <td> <?php echo e($valor->valor); ?> </td>
                            
                            <td>
                                
                                     
                                     
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </li>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/valor.blade.php ENDPATH**/ ?>