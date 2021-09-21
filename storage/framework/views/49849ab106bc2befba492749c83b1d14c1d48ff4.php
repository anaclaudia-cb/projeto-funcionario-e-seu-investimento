<?php $__env->startSection('cabecalho'); ?>
    Adicionar Investimento
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<li class="list-group-item justify-content-between align-items-center">
    <form method="post">
        <?php echo csrf_field(); ?>
        <label for="nome">Nome do Investimento</label>
        <input type="text" class="form-control" name="nome" id="nome">
        <?php $__errorArgs = ['nomeInvestimento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-group">
            <label for="tipo">Tipo do Investimento</label>
            <input type="text" class="form-control" id="tipo" name="tipo" aria-describedby="emailHelp">
            <?php $__errorArgs = ['tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-1">Enviar</button>
            <?php $__errorArgs = ['valor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        </div>
    </form>
</li>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/criarInvestimento.blade.php ENDPATH**/ ?>