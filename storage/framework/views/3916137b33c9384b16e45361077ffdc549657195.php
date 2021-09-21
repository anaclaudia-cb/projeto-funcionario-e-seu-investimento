<?php $__env->startSection('cabecalho'); ?>
    Adicionar Valor
<?php $__env->stopSection(); ?>


<?php $__env->startSection('conteudo'); ?>

    <form method="post">
        <?php echo csrf_field(); ?>
        <div class="col-md-6 p-lg-3 mx-auto my-5 form-group row">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" id="valor">
            <button type="submit" class="btn btn-primary mt-1">Enviar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('funcionarios.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ana/Documentos/Projetos/teste_estagio/resources/views/funcionarios/adicionarValor.blade.php ENDPATH**/ ?>