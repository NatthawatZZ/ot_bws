<?php $__env->startSection('content'); ?>

<div class="container-fluid" id="fgpass">
    <div class="col-md-12" style="margin-top: 10% ;">
        <br>
    </div>
    <!-- ..................................... -->
    <div class="row" id="btn">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="card">
                <br>
                <h1 style="text-align: center; color: #034791">ลืมรหัสผ่าน</h1>
                <hr>
                <div class="card-body" >
                  <?php if(session('status')): ?>
                      <div class="alert alert-success" role="alert">
                          <?php echo e(session('status')); ?>

                      </div>
                  <?php endif; ?>

                  <form method="POST" action="<?php echo e(route('password.email')); ?>">
                      <?php echo csrf_field(); ?>
                    <p style="text-align: left">ระบุอีเมลที่กรอกไว้ในระบบ <b>* </b></p>
                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ระบุอีเมล..."> -->

                        <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="ระบุอีเมล..." autofocus>

                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    <br>
                    <br>
                    <!-- <center>
                        <a class="btn btn-danger" href="<?php echo e(route('login')); ?>">ยกเลิก</a>
                        &nbsp; &nbsp;
                        <a class="btn btn-warning" href="resetpassword.php">ดำเนินการต่อ
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <?php echo e(__('ดำเนินการต่อ ')); ?>

                        </button>
                      </center> -->
                      <!-- <div class="form-group row mb-0"> -->
                        <div class="text-center">
                            <a  class="btn btn-danger" href="<?php echo e(route('login')); ?>">
                                <?php echo e(__('ยกเลิก ')); ?>

                            </a>
                            &nbsp;&nbsp;
                              <button type="submit" class="btn btn-warning">
                                  <?php echo e(__('ดำเนินการต่อ ')); ?>

                              </button>
                          </div>
                        <br>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Reset Password')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <button  class="btn btn-danger">
                                  <?php echo e(__('ยกเลิก ')); ?>

                              </button>
                                <button type="submit" class="btn btn-warning">
                                    <?php echo e(__('ดำเนินการต่อ ')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php echo $__env->make('layouts.password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel5.8\ot_bws\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>