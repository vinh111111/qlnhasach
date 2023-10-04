<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content2'); ?>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Sửa tác giả</h4>
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
                        <?php if(isset($author)): ?>
                           <div class="iq-card-body" >
                              <form action="<?php echo e(route('admin.postAuthorEdit',$author[0]->id)); ?>" method="post" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                                 <?php echo method_field('put'); ?>
                                 <div class="form-group">
                                    <label>Tên tác giả:</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo e(isset($author[0]->name)?$author[0]->name:''); ?>">
                                 </div>                  
                                 <div class="form-group">
                                    <label>Mô tả:</label>
                                    <textarea class="form-control" rows="4" name="description"><?php echo e(isset($author[0]->description)?$author[0]->description:''); ?></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label>Hình ảnh tác giả:</label>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="customFile" name="image" onchange="previewImage(this);">
                                       <label class="custom-file-label" for="customFile" >Chọn tập tin</label>
                                    </div>
                                 </div>
                                 <div class="form-group" style="height: 200px;">
                                    <label>Hình ảnh củ:</label>
                                    <div style="display:flex;flex-direction:column;">                                    
                                       <img src="<?php echo e(asset('/HCI/image/authors/'.$author[0]->image)); ?>" style="position: absolute;width: 200px;height: 150px;display: block;background-size: cover;" class="img-thumbnail"/>
                                    </div>                                 
                                 </div>
                                 <div class="form-group" style="height: 200px;">
                                    <label>Hình ảnh mới:</label>
                                    <div style="display:flex;flex-direction:column;justify-content:space-between">                                       
                                       <img id="preview" style="position: absolute;width: 200px;height: 150px;display: block;background-size: cover;" class="img-thumbnail"/>
                                    </div>                                 
                                 </div>
                                 <button type="submit" class="btn btn-primary">Gửi</button>
                                 <a href="<?php echo e(route('admin.getAuthorList')); ?>" class="btn btn-danger"><font color="white">Trở lại</font></a>
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
<?php echo $__env->make('admin.authors.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/authors/admin-edit-author.blade.php ENDPATH**/ ?>