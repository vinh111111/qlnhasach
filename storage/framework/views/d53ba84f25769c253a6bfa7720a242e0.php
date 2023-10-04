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
                     <h4 class="card-title">Sửa sách</h4>
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
               <?php if(isset($book)): ?>
               <div class="iq-card-body">
                  <form action="<?php echo e(route('admin.postBookEdit',$book[0]->id)); ?>" method="post" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('put'); ?>
                     <div class="form-group">
                        <label>Tên sách:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo e(isset($book[0]->name)?$book[0]->name:''); ?>">
                     </div>
                     <div class="form-group">
                        <label>Danh mục sách:</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_type">
                           <option value="<?php echo e($book[0]->Typebook->id); ?>"><?php echo e($book[0]->Typebook->name); ?></option>
                           <?php if(isset($typebooks)): ?>
                              <?php $__currentLoopData = $typebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($typebook->id != $book[0]->Typebook->id): ?>
                                    <option value="<?php echo e($typebook->id); ?>"><?php echo e($typebook->name); ?></option>
                                 <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Tác giả:</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="id_author">
                           <option value="<?php echo e($book[0]->Author->id); ?>"><?php echo e($book[0]->Author->name); ?></option>
                           <?php if(isset($authors)): ?>
                                 <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($author->id != $book[0]->Author->id): ?>
                                       <option value="<?php echo e($author->id); ?>"><?php echo e($author->name); ?></option>
                                    <?php endif; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Nhà cung cấp:</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="id_supplier">
                           <option value="<?php echo e($book[0]->Supplier->id); ?>"><?php echo e($book[0]->Supplier->name); ?></option>
                           <?php if(isset($suppliers)): ?>
                              <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($supplier->id != $book[0]->Supplier->id): ?>
                                    <option value="<?php echo e($supplier->id); ?>" ><?php echo e($supplier->name); ?></option>
                                 <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Hình ảnh:</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="customFile" name="image" onchange="previewImage(this);">
                           <label class="custom-file-label" for="customFile">Chọn tập tin</label>
                        </div>
                     </div>
                     <div class="form-group" style="height: 200px;">
                        <label>Hình ảnh cũ:</label>
                        <div style="display:flex;flex-direction:column;">
                           <img src="<?php echo e(asset('/HCI/image/books/'.$book[0]->image)); ?>" width="200" height="50" style="position: absolute;width: 200px;height: 150px;display: block;background-size: cover;" class="img-thumbnail" />
                        </div>
                     </div>
                     <div class="form-group" style="height: 200px;">
                        <label>Hình ảnh mới:</label>
                        <div style="display:flex;flex-direction:column;">
                           <img id="preview" width="200" height="50" style="position: absolute;width: 200px;height: 150px;display: block;background-size: cover;" class="img-thumbnail" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Giá sách:</label>
                        <input type="text" class="form-control" name="unit_price" value="<?php echo e(isset($book[0]->unit_price)?$book[0]->unit_price:''); ?>">
                     </div>
                     <div class="form-group">
                        <label>Giá sách sau khi giảm:</label>
                        <input type="text" class="form-control" name="promotion_price" value="<?php echo e(isset($book[0]->promotion_price)?$book[0]->promotion_price:''); ?>">
                     </div>
                     <div class="form-group">
                        <label>Nội dung:</label>
                        <textarea class="form-control" rows="4" name="description"><?php echo e(isset($book[0]->description)?$book[0]->description:''); ?></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Gửi</button>
                     <a href="<?php echo e(route('admin.getBookList')); ?>" class="btn btn-danger"><font color="white">Trở lại</font></a>
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
<?php echo $__env->make('admin.books.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/books/admin-edit-book.blade.php ENDPATH**/ ?>