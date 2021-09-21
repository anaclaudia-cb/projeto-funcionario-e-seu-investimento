<?php $__env->startSection('cabecalho'); ?>
    Investimentos
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
                            <th scope="col">id</th>
                            <th scope="col">Nome do Investimento</th>
                            <th scope="col">Tipo</th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $investimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investimento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($investimento->id); ?></td>
                                <td> <?php echo e($investimento->nome); ?> </td>
                                <td> <?php echo e($investimento->tipo); ?> </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="<?php echo e(route('alterar_investimento', $investimento->id)); ?>"
                                            class="btn btn-info btn-sm mr-1" type="submit"
                                            class="btn btn-info btn-sm mr-1 d-inline-flex" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-edit"></i></a>
                                        <form method="post" action="<?php echo e(route('remover_investimentos', $investimento->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm mr-1"><i
                                                    class="fas fa-trash-alt" ata-toggle="tooltip" data-placement="bottom" title="Excluir"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </li>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/investimentos.blade.php ENDPATH**/ ?>