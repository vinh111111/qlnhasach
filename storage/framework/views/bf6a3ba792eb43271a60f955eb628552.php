<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content10'); ?>
<!-- TOP Nav Bar END -->
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Sửa thông tin người dùng</h4>
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
               <?php if(session('success1')): ?>
               <div class="alert alert-success">
                  <?php echo e(session('success1')); ?>

               </div>
               <?php endif; ?>
               <?php if(isset($user)): ?>
               <div class="iq-card-body">
                  <form action="<?php echo e(route('admin.postUserEdit',$user[0]->id)); ?>" method="post" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <div class="form-group row align-items-center">
                        <div class="col-md-12">
                           <div class="profile-img-edit" style="width: 150px;height: 150px;border: radius 100px; overflow:hidden; justify-content:space-between;align-items:center">
                              <?php if($user[0]->image != "daidien.jpg"): ?>
                              <img class="profile-pic" src="<?php echo e(asset('/HCI/image/users/'.$user[0]->image)); ?>" style="position: relative; width: 150px;height: 150px;border: radius 100px;" alt="profile-pic">
                              <?php else: ?>
                              <img class="profile-pic" src="<?php echo e(asset('/HCI/images/booking/'.$user[0]->image)); ?>" style="position: relative; width: 150px;height: 150px;border: radius 100px;" alt="profile-pic">
                              <?php endif; ?>
                              <div class="p-image">
                                 <i class="ri-pencil-line upload-button"></i>
                                 <input class="file-upload" disabled type="file" name="image" style="position: relative; width: 150px;height: 150px;border: radius 100px;" accept="image/*" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group col-sm-12">
                        <label for="name">Họ tên:</label>
                        <input type="text" class="form-control" disabled name="name" id="name" value="<?php echo e(isset( $user[0]->full_name)?$user[0]->full_name:''); ?>">
                     </div>
                     <div class="form-group col-sm-12">
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" class="form-control" disabled name="phone" value="<?php echo e(isset($user[0]->phone)?$user[0]->phone:''); ?>">
                     </div>
                     <div class="form-group col-sm-12">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" disabled name="email" value="<?php echo e(isset($user[0]->email)?$user[0]->email:''); ?>">
                     </div>
                     <div class="form-group col-sm-12">
                        <label for="">Level</label>
                        <select class="form-control" name="level" id="">
                           <option value="<?php echo e($user[0]->level); ?>"><?php echo e($user[0]->level); ?></option>
                           <?php if($user[0]->level=='1'): ?>
                              <option value='3'>3</option>
                           <?php else: ?>
                              <option value='1'>1</option>
                           <?php endif; ?>
                        </select>
                     </div>
                     <button type="submit" style="margin-left: 15px;" class="btn btn-primary mr-2">Gửi</button>
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
<?php echo $__env->make('admin.users.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/users/admin-edit-user.blade.php ENDPATH**/ ?>