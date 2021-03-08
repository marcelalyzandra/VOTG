
<?php $__env->startSection('style'); ?>
  <!--
    <style>
		  #logo {
    	  font-family: 'Yellowtail';
    	  margin-bottom: 0px;
		  }
    </style>
  aqui é para se criar uma style apenas para essa pagina em especifico
   -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
  <body class="index-page sidebar-collapse"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image:url('<?php echo e(asset('img/header.jpg')); ?>');">                                                       
            </div>
            <div class="container">
              <?php if(auth()->guard()->guest()): ?>
                <div class="content-center brand">
                <img class="n-logo" src="<?php echo e(asset('img/logomain.png')); ?>" alt="" id= "logomain">
                    <h1 class="h1-seo">Ainda não está inscrito?</h1>
                    <h3><a href="<?php echo e(route('register')); ?>">Clique aqui</a> para se cadastrar</h3>
                </div>
                <h6 class="category category-absolute">Designed by
                    <a href="http://invisionapp.com/" target="_blank">
                        <img src="<?php echo e(asset('img/logomaindehm.png')); ?>" class="invision-logo" id="logomaindehm"/>
                    </a>
                </h6>
              <?php else: ?>
                <div class="content-center brand">
                    <img class="n-logo" src="<?php echo e(asset('img/logomain.png')); ?>" alt="" id= "logomain">
                    <h1 class="h1-seo">Ainda não votou?</h1>
                    <h3 style="margin-bottom: 0px;"><a href="<?php echo e(route('candidatos.votar')); ?>">Clique aqui</a> para votar</h3>
                    <h6 style="margin-bottom: 5px; margin-top: 10px;">OU</h6>
                    <h3 style="margin-top: 0px;">Role a página para mais informações</h3>
                </div>
                <h6 class="category category-absolute">Designed by
                    <a href="http://invisionapp.com/" target="_blank">
                        <img src="<?php echo e(asset('img/logomaindehm.png')); ?>" class="invision-logo" id="logomaindehm"/>
                    </a>
                </h6>
              <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if(strtotime($dataAtual) > strtotime($data)): ?>
      <?php if($contagem == 1): ?> <!-- Verifica se existe candidatos -->
        <div class="main">
          <div class="card text-center">
            <div class="card-header mt-2">
              <h6>Eleição</h6> 
            </div>
            <div class="card-body" id="backvencedor">
          
              <p class="category" id="letras">Vencedor da eleição do Grêmio 2021</p>
              <img src="<?php echo e(url('storage/candidatos/'.$arrayCandidatos[0]->CAN_IMAGEM)); ?>" alt="Thumbnail Image" class="rounded-square img-raised" id="vencedor">
              <h4 class="card-title" id="letras">Presidente: <?php echo e($arrayCandidatos[0]->CAN_NOME); ?></h4>
              <p class="card-text" id="letras">Vice: <?php echo e($arrayCandidatos[0]->CAN_VICE); ?></p>
              <p class="card-text" id="letras">Número de votos: <?php echo e($collection[0]['total']); ?></p>
              <p class="card-text" id="letras">Porcentagem dos votos: <?php echo e($collection[0]['total']/$totalV*100); ?>%</p>
              
            </div>
            <div class="card-footer text-muted mb-2">
              Votação realizada em <?php echo e($data); ?>

            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>


	<!-- Página Sobre -->

	<div class="card text-center">
  	<div class="card-header mt-2">
    <h6>Sobre</h6>
  	</div>
  	<div class="card-body" id="backvencedor">
  		
                <p class="category" id="letras">VOTG</p>
                <h4 class="card-title" id="letras">Atualmente, as votações para escolha do grêmio estudantil do IFRN – Campus Caicó são bem arcaicas e difíceis de fazer. Pelo voto ser em papel e necessitar da presença dos votantes e de alguns representantes do grêmio em um ambiente pré-determinado, vários alunos acabam não comparecendo ao local de votação por preguiça ou por falta de tempo. Devido a todos esses problemas, o instituto solicitou a empresa DEHM a criação de um software que migrasse esse sistema de votação para um ambiente online, seguro e fácil de utilizar. </h4>
               
    
  	</div>
  	<div class="card-footer text-muted mb-2">
    Orientador: Ari Oliveira
 	</div>
      <!--  end notifications -->
      <!-- Typography -->
      
                  <!-- If you want to add a checkbox to this form, uncomment this code -->
                  <!-- <div class="checkbox">
								<input id="checkboxSignup" type="checkbox">
									<label for="checkboxSignup">
									Unchecked
									</label>
								</div> -->
               
                
              
          
          
        </div>
    </div>
    <div class="section section-download" id="#download-section" data-background-color="black">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
              <img src="<?php echo e(asset('img/logoifrn.png')); ?>" alt="ifrn logo" class="rounded-square" id="vencedor">
              <h3 class="title">Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</h3>

            </div>
          </div>
          <br>
          
          <div class="row text-center mt-5">
            <div class="col-md-8 ml-auto mr-auto">
              <h2>Informações</h2>
              <h5 class="description">Informações
                O site é destinado às votações do grêmio estudantil do IFRN Campus Caicó</h5>   
            </div>  
          </div>
          <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3>Equipe</h3>
              <h5 class="description">Daniel<br>Eduardo<br>Hernandes<br>Marcela<br></h5>
            </div>
            
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\votG\resources\views/eleicao/home.blade.php ENDPATH**/ ?>