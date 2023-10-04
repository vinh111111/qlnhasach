<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- TOP Nav Bar END -->
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="iq-card">
               <div class="iq-card-body p-0">
                  <div class="iq-edit-list">
                     <ul class="iq-edit-profile d-flex nav nav-pills">
                        <li class="col-md-6 p-0">
                           <a class="nav-link active" data-toggle="pill" href="#personal-information">
                              Thông tin cá nhân
                           </a>
                        </li>
                        <li class="col-md-6 p-0">
                           <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Đổi mật khẩu
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="iq-edit-list-data">
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Thông tin cá nhân</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="<?php echo e(route('admin.postEditprofile',$user->id)); ?>" method="post" enctype="multipart/form-data">
                              <?php if(session('success1')): ?>
                                 <div class="alert alert-success">
                                    <?php echo e(session('success1')); ?>

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
                              <?php echo csrf_field(); ?>                              
                              <div class="form-group row align-items-center">
                                 <div class="col-md-12">
                                    <div class="profile-img-edit" style="width: 150px;height: 150px;border: radius 100px; overflow:hidden; justify-content:space-between;align-items:center">
                                    <?php if($user->image != "daidien.jpg"): ?>
                                       <img class="profile-pic" src="<?php echo e(asset('/HCI/image/users/'.$user->image)); ?>" style="position: relative; width: 150px;height: 150px;border: radius 100px;" alt="profile-pic">
                                    <?php else: ?>
                                       <img class="profile-pic" src="<?php echo e(asset('/HCI/images/booking/'.$user->image)); ?>" style="position: relative; width: 150px;height: 150px;border: radius 100px;" alt="profile-pic">
                                    <?php endif; ?>
                                       <div class="p-image" >
                                          <i class="ri-pencil-line upload-button"></i>
                                          <input class="file-upload"  type="file" name="image" style="position: relative; width: 150px;height: 150px;border: radius 100px;"   accept="image/*" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <label for="name">Họ tên:</label>
                                 <input type="text" class="form-control" name="name" id="name" value="<?php echo e(isset( $user->full_name)?$user->full_name:''); ?>">
                              </div>
                              <div class="form-group col-sm-12">
                                 <label for="phone">Số điện thoại:</label>
                                 <input type="text" class="form-control" name="phone" value="<?php echo e(isset($user->phone)?$user->phone:''); ?>">
                              </div>
                              <div class="form-group col-sm-12">
                                 <label for="email">Email:</label>
                                 <input type="email" class="form-control" name="email" value="<?php echo e(isset($user->email)?$user->email:''); ?>">
                              </div>
                              <button type="submit" style="margin-left: 15px;" class="btn btn-primary mr-2">Gửi</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Đổi mật khẩu</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="<?php echo e(route('admin.changepassword',$user->id)); ?>" method="post">
                              <?php if(session('success2')): ?>
                                 <div class="alert alert-success">
                                    <?php echo e(session('success2')); ?>

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
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                 <label for="old_password">Mật khẩu hiện tại:</label>
                                 <input type="password" class="form-control" name="old_password" required>
                              </div>
                              <div class="form-group">
                                 <label for="new_password">Mật khẩu mới:</label>
                                 <input type="password" class="form-control" name="new_password" required>
                              </div>
                              <div class="form-group">
                                 <label for="re_new_password">Xác nhận lại mật khẩu:</label>
                                 <input type="password" class="form-control" name="re_new_password" required>
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Gửi</button>
                           </form>
                        </div>
                     </div>
                  </div>
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/product/profile-edit.blade.php ENDPATH**/ ?>