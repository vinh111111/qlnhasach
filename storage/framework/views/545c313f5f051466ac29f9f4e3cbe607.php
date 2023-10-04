<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- loader Start -->
<div id="loading">
  <div id="loading-center">
  </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
  <div class="container p-0">
    <div class="row no-gutters height-self-center">
      <div class="col-sm-12 align-self-center page-content rounded">
        <div class="row m-0">
          <div class="col-sm-12 sign-in-page-data">
            <div class="sign-in-from bg-primary rounded">
              <h3 class="mb-0 text-center text-white">Đăng nhập</h3>
              <p class="text-center text-white">Nhập địa chỉ email và mật khẩu của bạn để truy cập bảng quản trị.</p>
              <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                  <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </div>
              <?php endif; ?>
              <?php if(session('message')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('message')); ?>

                </div>
              <?php endif; ?>
              <form class="mt-4 form-text" action="<?php echo e(route('admin.getLogin')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Nhập email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật khẩu</label>
                  <a href="<?php echo e(route('getInputEmail')); ?>" class="float-right text-dark">Quên mật khẩu?</a>
                  <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Mật khẩu">
                </div>
                <div class="sign-info text-center">
                  <button type="submit" class="btn btn-white d-block w-100 mb-2">Đăng nhập</button>
                  <span class="text-dark dark-color d-inline-block line-height-2">Bạn không có tài khoản? <a href="<?php echo e(route('getSignup')); ?>" class="text-white">Đăng kí</a></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Sign in END -->
<!-- color-customizer -->

<!-- color-customizer END -->
<!-- Optional JavaScript -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/product/sign-in.blade.php ENDPATH**/ ?>