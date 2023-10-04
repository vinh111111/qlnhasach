<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content4'); ?>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Thêm sách</h4>
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
                           <form action="<?php echo e(route('admin.postBookAdd')); ?>" method="post" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                 <label>Tên sách:</label>
                                 <input type="text" class="form-control" name="name">
                              </div>
                              <div class="form-group">
                                 <label>Danh mục sách:</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="id_type">
                                    <?php if(isset($typebooks)): ?>
                                       <?php $__currentLoopData = $typebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($typebook->id); ?>"><?php echo e($typebook->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Tác giả:</label>
                                 <select class="form-control" id="exampleFormControlSelect2" name="id_author">
                                    <?php if(isset($authors)): ?>
                                       <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($author->id); ?>"><?php echo e($author->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>   
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Nhà cung cấp:</label>
                                 <select class="form-control" id="exampleFormControlSelect2" name="id_supplier">
                                    <?php if(isset($suppliers)): ?>
                                       <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>   
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Hình ảnh:</label>
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="image" onchange="previewImage(this);">
                                    <label class="custom-file-label" for="customFile" >Chọn tập tin</label>
                                 </div>
                              </div>
                              <div class="form-group" style="height: 200px;">
                                 <label>Hình ảnh được chọn:</label>
                                 <div style="display:flex;flex-direction:column;">
                                    <img id="preview" width="200" height="50" style="position: absolute;width: 200px;height: 150px;display: block;background-size: cover;" class="img-thumbnail"/>
                                 </div>                                 
                              </div>
                              <div class="form-group">
                                 <label>Giá sách:</label>
                                 <input type="text" class="form-control" name="unit_price">
                              </div>
                              <div class="form-group">
                                 <label>Giá sách sau khi giảm:</label>
                                 <input type="text" class="form-control" name="promotion_price">
                              </div>                              
                              <div class="form-group">
                                 <label>Nội dung:</label>
                                 <textarea class="form-control" rows="4" name="description"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Gửi</button>
                              <a href="<?php echo e(route('admin.getBookList')); ?>" class="btn btn-danger"><font color="white">Trở lại</font></a>
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
<?php echo $__env->make('admin.books.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/books/admin-add-book.blade.php ENDPATH**/ ?>