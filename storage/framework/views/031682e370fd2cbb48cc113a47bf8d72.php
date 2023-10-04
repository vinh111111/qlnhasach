<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content1'); ?>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Thêm danh mục</h4>
                           </div>
                        </div>
                        <?php if($errors->any()): ?>
                           <div class="alert alert-danger">
                              <ul>
                                 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <li><?php echo e($error); ?></li>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                           </div>
                        <?php endif; ?>
                        <div class="iq-card-body">
                           <form action="<?php echo e(route('admin.postCategoryAdd')); ?>" method="post" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                 <label>Tên danh mục:</label>
                                 <input type="text" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Mô tả:</label>
                                 <textarea class="form-control" name="description" rows="4"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Gửi</button>
                              <a href="<?php echo e(route('admin.getCategoryList')); ?>" class="btn btn-danger"><font color="white">Trở lại</font></a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.categories.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/categories/admin-add-category.blade.php ENDPATH**/ ?>