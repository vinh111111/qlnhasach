<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content3'); ?>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Sửa nhà cung cấp</h4>
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
                        <?php if(isset($supplier)): ?>
                           <div class="iq-card-body" >
                              <form action="<?php echo e(route('admin.postSupplierEdit',$supplier[0]->id)); ?>" method="post" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                                 <?php echo method_field('put'); ?>
                                 <div class="form-group">
                                 <label>Tên nhà cung cấp:</label>
                                 <input type="text" class="form-control" name="name" value="<?php echo e(isset($supplier[0]->name)?$supplier[0]->name:''); ?>">
                              </div>                  
                              <div class="form-group">
                                 <label>Địa chỉ:</label>
                                 <input type="text" class="form-control" name="address" value="<?php echo e(isset($supplier[0]->address)?$supplier[0]->address:''); ?>">
                              </div>
                              <div class="form-group">
                                 <label>Số điện thoại:</label>
                                 <input type="number" class="form-control" name="phone_number" value="<?php echo e(isset($supplier[0]->phone_number)?$supplier[0]->phone_number:''); ?>">
                              </div>
                              <button type="submit" class="btn btn-primary">Gửi</button>
                              <a href="<?php echo e(route('admin.getSupplierList')); ?>" class="btn btn-danger"><font color="white">Trở lại</font></a>
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
<?php echo $__env->make('admin.suppliers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/suppliers/admin-edit-supplier.blade.php ENDPATH**/ ?>