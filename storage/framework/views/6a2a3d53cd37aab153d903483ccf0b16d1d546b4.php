<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
      <a class="navbar-brand text-white"><img src="include/img/logo1.png"></a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item"><br>
                  <h5>ระบบขอเบิกค่า OT และ ค่าเดินทาง</h5>
              </li>

          </ul>
      </div>
  </nav>
</div>
<div class="container-fluid">
  <div class="row">
  <div class="col-2">

  </div>
  <div class="col-5">
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
  <h1>ลงทะเบียน</h1>
<fieldset>
  <legend>กรอกข้อมูล</legend>
  <div class="form-group">
    <label for="exampleInputID">รหัสพนักงาน<b >*</b></label>
    <input type="text" class="form-control" id="psn_id" placeholder="รหัสพนักงาน">
  </div>

  <div class="form-row">
    <div class="col-2">
    <label for="exampleInputtitle">คำนำหน้า<b >*</b></label>
    <select class="form-control" id="mb_title">
          <option value="1">นาย</option>
          <option value="2">นาง</option>
          <option value="3">นางสาว</option>
      </select>
    </div>
    <div class="col">
    <label for="exampleInputName">ชื่อ - นามสกุล<b >*</b></label>
    <input type="text" class="form-control" id="mb_name" placeholder="ชื่อ - นามสกุล">
  </div>
  </div>


  <div class="form-group">
    <label for="exampleInputIDCARD">หมายเลขบัตรประชาชน<b >*</b></label>
    <input type="password" class="form-control" id="mb_idcard" placeholder="หมายเลขบัตรประชาชน">
  </div>
  <div class="form-group">
    <label for="exampleInpuDepartment">ตำแหน่งงาน<b >*</b></label>
    <select class="form-control" id="pst_id">
      <option value="0">ตำแหน่งงาน</option>
      <option value="1">Event Marketing Director</option>
      <option value="2">Creative Event Marketing Manage</option>
      <option value="3">Digital PR Manager</option>
      <option value="4">Human Resources Manager</option>
      <option value="5">Accounting</option>
      <option value="6">Digital PR & Event Marketing</option>
      <option value="7">Creative and Graphic Designer</option>
      <option value="8">Web and Graphic Designer</option>
      <option value="9">Systems Analyst</option>
      <option value="10">Programmer</option>
      <option value="11">Web Developer</option>
      <option value="12">Messenger</option>
  </select>
  </div>

  <div class="form-group">
    <label for="exampleInputE-mail">อีเมลล์<b >*</b></label>
    <input type="text" class="form-control" id="mb_email" placeholder="อีเมลล์">
  </div>

  <div class="form-group">
    <label for="exampleInputPhone">หมายเลขโทรศัพท์<b >*</b></label>
    <input type="text" class="form-control" id="mb_mobile" placeholder="หมายเลขโทรศัพท์">
  </div>
  <div class="form-group">
  <center>
    <a href="<?php echo e(route('login')); ?>" class="btn btn-danger">ยกเลิก</a> &nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-primary">ลงทะเบียน</button></center>
  </div>
</fieldset>
</form>
</div>

<div class="col-4">
<img src="/include/img/regis.png" class="img1" width="175" height="300">
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
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
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php echo $__env->make('layouts.signup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel5.8\ot_bws\resources\views/auth/register.blade.php ENDPATH**/ ?>