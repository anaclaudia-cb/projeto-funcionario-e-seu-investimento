<?php $__env->startSection('cabecalho'); ?>
    Editar Funcionario
<?php $__env->stopSection(); ?>


<?php $__env->startSection('conteudo'); ?>

    <?php if(!empty($mensagem)): ?>
        <div class="alert alert-success">
            <?php echo e($mensagem); ?>

        </div>
    <?php endif; ?>

    <body>
        <li class="list-group-item justify-content-between align-items-center">
        <form method="POST" action="<?php echo e(route('update_funcionario', $funcionario->id)); ?>">
            <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
            <div class="col-md-6 p-lg-3 mx-auto my-5 form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="name"
                        placeholder="Insira o primeiro nome" value="<?php echo e($funcionario->name); ?>">
                </div>

                <label for="colFormLabel" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" name="email" placeholder="Insira o e-mail"
                        value="<?php echo e($funcionario->email); ?>">
                </div>

                <div class="btn-group mx-auto my-5" role='group'>
                    <button type="submit" class="btn btn-success">Salvar</button>
                    
                </div>
            </div>
        </form>
        </li>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/edit.blade.php ENDPATH**/ ?>