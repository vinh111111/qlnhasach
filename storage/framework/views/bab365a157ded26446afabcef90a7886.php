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
                              <h4 class="card-title">Danh sách danh mục</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="<?php echo e(route('admin.getCategoryAdd')); ?>" class="btn btn-primary">Thêm danh mục mới</a>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <?php if(session('success')): ?>
                                 <br>
                                 <div class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                 </div>
                                 <br>
                              <?php endif; ?>
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">STT</th>
                                        <th width="20%">Tên danh mục</th>
                                        <th width="65%">Mô tả danh mục</th>
                                        <th width="10%">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if(isset($type_books)): ?>
                                    <?php
                                       $i=1;
                                       $ds=[];
                                       if(isset($results))
                                          $ds=$results;
                                       else
                                          $ds=$type_books;
                                    ?>
                                    <?php $__currentLoopData = $ds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type_book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e($i); ?></td>
                                          <td><?php echo e($type_book->name); ?></td>
                                          <td>
                                            <p class="mb-0"><?php echo e($type_book->description); ?></p>
                                          </td>
                                          <td>
                                             <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                              <a class="bg-primary" style="width:30px;border:none;border-radius: 10px;padding: 2px 7px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa" href="<?php echo e(route('admin.getCategoryEdit',$type_book->id)); ?>"><i class="ri-pencil-line"></i></a>
                                              <form action="<?php echo e(route('admin.deletetCategory',$type_book->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                    <button class="bg-primary" style="width:30px;border:none;border-radius: 10px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xoá" type="submit"><i class="ri-delete-bin-line"></i></button>
                                              </form>
                                             </div>
                                          </td>
                                      </tr>
                                      <?php
                                        $i=$i+1;
                                      ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                  <?php endif; ?>
                                </tbody>
                            </table>
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
<?php echo $__env->make('admin.categories.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/categories/admin-category.blade.php ENDPATH**/ ?>