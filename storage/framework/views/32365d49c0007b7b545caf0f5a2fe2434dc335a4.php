<?php $__env->startSection('body'); ?>
  <body class="login-page sidebar-collapse"> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(<?php echo e(asset('img/header.jpg')); ?>)"></div>
    <div class="content" style="margin-top: 10%;">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="card-header text-center">
                    <div class="logo-container">
                        <img src="<?php echo e(asset('img\logomain.png')); ?>" alt="" id="logomain">
                    </div>
                </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="now-ui-icons users_circle-08"></i>
                        </span>
                    </div>
                    <input id="matricula" type="text" class="form-control <?php $__errorArgs = ['matricula'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    name="matricula" value="<?php echo e(old('matricula')); ?>" required autocomplete="matricula" 
                    autofocus placeholder="Matricula">
                    <?php $__errorArgs = ['matricula'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                            </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="now-ui-icons ui-1_lock-circle-open"></i>
                        </span>
                    </div>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    name="password" required autocomplete="current-password" placeholder="Senha">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                </div>
                
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                        Entrar
                </button>
                <div class="pull-center">
                  <h6>
                    <a href="<?php echo e(route('register')); ?>" class="link">Criar Conta</a>
                  </h6>
                </div>
                
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\votG\resources\views/auth/login.blade.php ENDPATH**/ ?>