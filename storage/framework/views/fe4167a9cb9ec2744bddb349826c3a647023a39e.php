
<?php $__env->startSection('style'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
  <body class="login-page sidebar-collapse"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(<?php echo e(asset('img/header.jpg')); ?>)">
    </div>
    <div class="content" style="margin-top: 10%;">

      <?php if(strtotime($dataAtual) != strtotime($data)): ?>
        <div class="container">
          <br><br><br><br><br>
          <h3 style="font-weight: bold;"> A votação <span style="color:yellow;">ainda</span></h3>
          <h4>não foi iniciada</h4>
        </div>
      <?php elseif($votUse): ?>
        <div class="container">
          <br><br><br><br><br>
          <h3 style="font-weight: bold;">Seu voto foi <span style="color:yellow;">Confirmado</span></h3>
          <h4>Aguarde o resultado</h4>
        </div>
      <?php elseif($candidato == null): ?> <!-- Verifica se existe não existe candidatos -->
        <div class="container">
          <br><br><br><br><br>
          <h3 style="font-weight: bold;"> A votação <span style="color:yellow;">ainda</span></h3>
          <h4>não foi iniciada</h4>
        </div>
      <?php else: ?>
        <div class="container">
          <h3 style="font-weight: bold;">Selecione seu Candidato</h3>
          <h4> Digite o número do seu candidato e depois aperte em CONFIRMAR</h4>
          <br>
          <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-login card-plain"> 
              <div>
                  <img class="card-img-top" src="<?php echo e(url('storage/candidatos/'.$candidato->CAN_IMAGEM)); ?>" alt="" id="logomain" id="imgcandidato" style="max-width: 150px;max-height: 150px;">
                  <h4 class="card-title" style="color:white; margin-bottom: 0em; margin-top: 0px; font-weight: bold;"> <?php echo e($candidato->CAN_NOME); ?> Presidente</h4>
                  <h4  style="color:white; margin-bottom: 0em; margin-top: 0px;"> <?php echo e($candidato->CAN_VICE); ?> Vice </h4>
                  <br>
                  
      
              </div>
              <?php if($msg): ?>
                <h6 style="color:yellow;"><?php echo e($msg); ?> </h6>
              <?php endif; ?>
              <form class="form" method="get" action="<?php echo e(route('candidatos.votar')); ?>">
                  <?php echo csrf_field(); ?>
                  <input class="form-control form-control-lg" type="text" name="filter" placeholder="Digite o número do seu candidato">
                  <button class="btn btn-primary btn-sm" type="submit">Buscar</button></div>
              </form>
              <form class="form" method="post" action="<?php echo e(route('votacao.create')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e($candidato->CAN_CODIGO); ?>" name="CAN_CODIGO">
                <button class="btn btn-primary btn-round btn-lg btn-block" type="submit" style="background-color:#1C7943 ;">Confirmar</button> 
              </form>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\votG\resources\views/candidatos/votar.blade.php ENDPATH**/ ?>