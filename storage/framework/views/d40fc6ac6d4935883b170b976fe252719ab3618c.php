

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('candidato.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="text" name="CAN_NOME" placeholder="Nome do lider">
        <input type="text" name="CAN_VICE" placeholder="Nome do vice">
        <input type="file" name="CAN_IMAGEM">
        <button type="submite">enviar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\votG\resources\views/candidatos/createCandidato.blade.php ENDPATH**/ ?>