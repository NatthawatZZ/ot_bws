<?php $__env->startSection('content'); ?>
<div class="container-fluid">
      <div class="col-md-12" style="margin-top: 90px;">
          <br><br>
      </div>
      <div class="row" id="btn">
          <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <h1 style="text-align: center; color: #034791">รหัสผ่านใหม่</h1>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('password.update')); ?>">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                        <div class="form-group row">
                            <p style="text-align: left" ><?php echo e(__('E-Mail Address')); ?></p>

                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e($email ?? old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                        </div>

                        <div class="form-group row">
                            <p style="text-align: left"><?php echo e(__('รหัสผ่านใหม่')); ?></p>


                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                        </div>
                        <div class="form-group row">
                            <p style="text-align: left"><?php echo e(__('ยืนยันรหัสผ่าน')); ?></p>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    <?php echo e(__('ยืนยัน')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
          <div class="col-md-4"></div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel5.8\ot_bws\resources\views/auth/passwords/reset.blade.php ENDPATH**/ ?>