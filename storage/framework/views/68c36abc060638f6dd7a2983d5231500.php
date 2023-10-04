
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="sign-in-page">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center page-content rounded">
                <div class="row m-0">
                    <div class="col-sm-12 sign-in-page-data">
                        <div class="sign-in-from bg-primary rounded">
                            <?php if(session('success')): ?> 
                              <div class="alert alert-success">
                                  <?php echo e(session('success')); ?>

                              </div>
                            <?php endif; ?>
                            <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <h3 class="mb-0 text-center text-white">Nhập mật khẩu mới</h3>
                            <p class="text-center text-white"></p>
                            <form class="mt-4 form-text" action="<?php echo e(route('postNewPassword')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Mật khẩu mới</label>
                                    <input type="password" name="password" class="form-control mb-0" id="exampleInputEmail2" placeholder="Nhập mật khẩu mới" value="<?php echo e(isset($request->txtEmail)?$request->txtEmail:''); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Nhập lại mật khẩu</label>
                                    <input type="password" name="return_password" class="form-control mb-0" id="exampleInputEmail2" placeholder="Nhập lại mật khẩu" value="<?php echo e(isset($request->txtEmail)?$request->txtEmail:''); ?>">
                                </div>
                                <div class="sign-info text-center">
                                    <button type="submit" class="btn btn-white d-block w-100 mb-2">Xác nhận</button>                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/emails/input-newpassword.blade.php ENDPATH**/ ?>