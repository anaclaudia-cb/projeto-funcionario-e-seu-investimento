<?php $__env->startSection('cabecalho'); ?>
    Editar Valor
<?php $__env->stopSection(); ?>


<?php $__env->startSection('conteudo'); ?>

<?php if(!empty($mensagem)): ?>
<div class="alert alert-success">
    <?php echo e($mensagem); ?>

</div>
<?php endif; ?>

<body>
    <li class="list-group-item justify-content-between align-items-center">
<form method="POST" action="<?php echo e(route('update_valor', [$funcionario->id, $investimento->id])); ?>">
    <?php echo csrf_field(); ?>
<?php echo method_field('PATCH'); ?>
    <div class="col-md-6 p-lg-3 mx-auto my-5 form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Valor: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel" name="valor"
                placeholder="Insira o primeiro nome" value="<?php echo e($investimento->pivot->valor); ?>">
        </div>
        <div class="btn-group mx-auto my-5" role='group'>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
</form>
    </li>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/editarValor.blade.php ENDPATH**/ ?>