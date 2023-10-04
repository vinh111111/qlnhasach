<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content6'); ?>
<!-- TOP Nav Bar END -->
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Sửa sản phẩm</h4>
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
               <?php if(isset($warehouse)): ?>
               <div class="iq-card-body">
                  <form action="<?php echo e(route('admin.postWarehouseEdit',$warehouse[0]->id)); ?>" method="post" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('put'); ?>
                     <div class="form-group">
                        <label>Tên sách:</label>
                        <input type="text" class="form-control" name="id_book" value="<?php echo e(isset($warehouse[0]->Book->name)?$warehouse[0]->Book->name:''); ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Số lượng:</label>
                        <input type="text" class="form-control" name="quantity" value="<?php echo e(isset($warehouse[0]->quantity)?$warehouse[0]->quantity:''); ?>">
                     </div>
                     <button type="submit" class="btn btn-primary">Gửi</button>
                     <a href="<?php echo e(route('admin.getWarehouseList')); ?>" class="btn btn-danger"><font color="white">Trở lại</font></a>
                  </form>
               </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.warehouses.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/warehouses/admin-edit-warehouse.blade.php ENDPATH**/ ?>