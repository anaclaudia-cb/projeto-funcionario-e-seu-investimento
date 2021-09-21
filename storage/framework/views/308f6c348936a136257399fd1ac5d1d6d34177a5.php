<?php $__env->startSection('cabecalho'); ?>
    Atualizar Investimento
<?php $__env->stopSection(); ?>


<?php $__env->startSection('conteudo'); ?>

<li class="list-group-item justify-content-between align-items-center">
    <h1 class="lead fw-normal" style="text-align:center"><?php echo e($funcionario->name); ?>

                    <br>Vincule o funcionário e adicione o valor do investimento</h1>

    <div class="product-device shadow-sn d-none d-mb-block>"></div>
    <div class="product-device product-device-2 shadow-sn d-none d-nd-block"></div>

    <form method="POST" action="<?php echo e(route('storeFuncionarioInvestimento', $funcionario->id)); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-body row form-holder form-content form-items col-md-12 ">
            <input type="hidden" class="form-control" id="colFormLabel" name="funcionario_id"
                value="<?php echo e($funcionario->id); ?>">
        </div>
        <div>
            <label for="colFormLabel" name="funcionario_name"><b>Funcionario:</b> <?php echo e($funcionario->name); ?></label>
        </div>
        <label for="colFormLabel" class="col-sm-3 col-form-label"><b>Selecione o investimento:</b></label>
            <select name="investimento_id">
                <?php $__currentLoopData = $investimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investimento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($investimento->id); ?>"><?php echo e($investimento->nome); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>


        <div class="form-body row form-holder form-content form-items col-md-12">
            <label for="colFormLabel" class="col-sm-3 col-form-label"><b>Valor: </b></label>
            <div class="col-sn-4">
                <input type="text" class="form-control ml-1" id="colFormLabel" name="valor"
                    placeholder="Insira o valor do investimento">
            </div>
        </div>

        <div class="btn-group mx-auto my-7" role='group'>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        <?php if($errors->any()): ?>
            <ul>
                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        <?php endif; ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/vincularFuncionarioInvestimento.blade.php ENDPATH**/ ?>