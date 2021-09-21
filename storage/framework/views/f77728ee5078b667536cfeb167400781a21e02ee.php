<?php $__env->startSection('cabecalho'); ?>
    Lista de Funcionários
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
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($funcionario->id); ?></td>
                            <td> <?php echo e($funcionario->name); ?> </td>
                            <td> <?php echo e($funcionario->email); ?> </td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?php echo e(route('visualizar_funcionario_investimentos', $funcionario->id)); ?>" class="btn btn-success btn-sm mr-1" type="submit" data-toggle="tooltip" data-placement="bottom" title="Visualizar"
                                        class="btn btn-success btn-sm mr-1 d-inline-flex"><i class="fas fa-eye"></i></a>
                                    
                                    <a href="<?php echo e(route('alterar_funcionario', $funcionario->id)); ?>"
                                        class="btn btn-info btn-sm mr-1" type="submit" data-toggle="tooltip" data-placement="bottom" title="Editar"
                                        class="btn btn-info btn-sm mr-1 d-inline-flex"><i class="fas fa-edit"></i></a>
                                    <form method="post" action="<?php echo e(route('removerFuncionario', $funcionario->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i
                                                class="fas fa-trash-alt"></i></button>

                                        <a href="<?php echo e(route('createFuncionarioInvestimento', $funcionario->id)); ?>" class="btn btn-warning btn-sm mr-1" type="submit" data-toggle="tooltip" data-placement="bottom"
                                        title="Vincular e adicionar investimento"><i class="fas fa-user-lock"></i></a>
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

<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/index.blade.php ENDPATH**/ ?>