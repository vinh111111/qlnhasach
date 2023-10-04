<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content8'); ?>
<!-- TOP Nav Bar END -->
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Chi tiết liên hệ</h4>
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
               <?php if(isset($contact)): ?>
               <div class="iq-card-body">
                  <div class="form-group">
                     <label>Tên người liên hệ:</label>
                     <input type="text" class="form-control" name="name" value="<?php echo e(isset($contact[0]->name)?$contact[0]->name:''); ?>" disabled>
                  </div>
                  <div class="form-group">
                     <label>Email:</label>
                     <input type="text" class="form-control" name="email" value="<?php echo e(isset($contact[0]->email)?$contact[0]->email:''); ?>" disabled>
                  </div>
                  <div class="form-group">
                     <label>Số điện thoại:</label>
                     <input type="text" class="form-control" name="phone_number" value="<?php echo e(isset($contact[0]->phone_number)?$contact[0]->phone_number:''); ?>" disabled>
                  </div>
                  <div class="form-group">
                     <label>Nội dung:</label>
                     <textarea class="form-control" rows="4" name="content" disabled><?php echo e(isset($contact[0]->content)?$contact[0]->content:''); ?></textarea>
                  </div>
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
<?php echo $__env->make('admin.contacts.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/contacts/admin-detail-contact.blade.php ENDPATH**/ ?>