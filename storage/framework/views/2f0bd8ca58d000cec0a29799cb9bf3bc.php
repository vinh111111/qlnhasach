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
                              <h4 class="card-title">Danh sách liên hệ</h4>
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
                                       <th style="width: 5%;">STT</th>
                                       <th style="width: 25%;">Tên người liên hệ</th>
                                       <th style="width: 25%;">Email</th>
                                       <th style="width: 25%;">Số điện thoại</th>
                                       <th style="width: 20%;">Hoạt động</th>
                                    </tr>
                                 </thead>         
                                 <tbody>
                                    <?php if(isset($contacts)): ?>
                                       <?php
                                             $i=1;
                                             $ds=[];
                                             if(isset($results))
                                                $ds=$results;
                                             else
                                                $ds=$contacts;
                                       ?>
                                       <?php $__currentLoopData = $ds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                             <td><?php echo e($i); ?></td>
                                             <td>
                                                <?php echo e($contact->name); ?>

                                             </td>
                                             <td><?php echo e($contact->email); ?></td>
                                             <td>
                                                <p class="mb-0"><?php echo e($contact->phone_number); ?></p>
                                             </td>
                                             <td>
                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                   <a class="bg-primary" style="width:30px;border:none;border-radius: 10px;padding: 2px 7px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chi tiết" href="<?php echo e(route('admin.getDetailContact',$contact->id)); ?>"><i class="ri-pencil-line"></i></a>
                                                   <form action="<?php echo e(route('admin.deleteContact',$contact->id)); ?>" method="post">
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
<?php echo $__env->make('admin.contacts.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/contacts/admin-contact.blade.php ENDPATH**/ ?>