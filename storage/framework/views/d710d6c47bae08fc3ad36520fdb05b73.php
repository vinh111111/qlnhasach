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
                              <h4 class="card-title">Kho hàng</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="<?php echo e(route('admin.getWarehouseAdd')); ?>" class="btn btn-primary">Thêm sản phẩm</a>
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
                                        <th style="width: 2%;">STT</th>
                                        <th style="width: 43%;">Tên sách</th>
                                        <th style="width: 15%;">Số lượng</th>
                                        <th style="width: 25%;">Ngày cập nhật</th>
                                        <th style="width: 15%;">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php if(isset($warehouses)): ?>
                                    <?php
                                          $i=1;
                                          $ds=[];
                                          if(isset($results))
                                             $ds=$results;
                                          else
                                             $ds=$warehouses;
                                    ?>
                                  <?php $__currentLoopData = $ds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e($warehouse->Book->name); ?></td>
                                        <td><?php echo e($warehouse->quantity); ?></td>
                                        <td><?php echo e($warehouse->updated_at); ?></td>                                       
                                        <td>
                                          <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                             <a class="bg-primary" style="width:30px;border:none;border-radius: 10px;padding: 2px 7px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa" href="<?php echo e(route('admin.getWarehouseEdit',$warehouse->id)); ?>"><i class="ri-pencil-line"></i></a>
                                             <form action="<?php echo e(route('admin.deletetWarehouse',$warehouse->id)); ?>" method="post">
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
<?php echo $__env->make('admin.warehouses.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/warehouses/admin-warehouse.blade.php ENDPATH**/ ?>