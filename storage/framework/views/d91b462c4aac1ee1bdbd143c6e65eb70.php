
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
               <div class="newrealease-contens">
                  <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                     <?php if(isset($banners)): ?>
                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="item">
                           <a href="javascript:void(0);">
                              <img src="<?php echo e(asset('/HCI/image/banners/'.$banner->image)); ?>" class="img-fluid w-100 rounded" alt="">
                           </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <?php if(session('error')): ?>
               <br>
                  <div class="alert alert-danger">
                     <?php echo e(session('error')); ?>

                  </div>
               <br>
            <?php endif; ?>
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                  <div class="iq-header-title">
                     <h4 class="card-title mb-0">Tất cả sách</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="row">
                     <?php if(isset($books)): ?>
                        <?php
                           $i=1;
                           $ds=[];
                           if(isset($books))
                              $ds=$books;
                           else
                              $ds=$cars;
                        ?>
                        <?php $__currentLoopData = $ds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="col-sm-6 col-md-4 col-lg-3">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-sm-0 mb-md-0 mb-lg-0">
                                    <div class="iq-card-body p-0">
                                       <div class="d-flex align-items-center">
                                          <div class="col-6 p-0 position-relative image-overlap-shadow">
                                             <a href="javascript:void();"><img class="img-fluid rounded w-100" src="<?php echo e(asset('/HCI/image/books/'.$book->image)); ?>" width="100px" height="200px" alt=""></a>
                                             <div class="view-book">
                                                <a href="<?php echo e(route('getBookpage',$book->id)); ?>" class="btn btn-sm btn-white">xem sách</a>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-2">
                                                <h6 class="mb-1"><?php echo e($book->name); ?></h6>
                                                <p class="font-size-13 line-height mb-1"><?php echo e($book->Author->name); ?></p>
                                                <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <?php if($book->promotion_price > 0): ?>
                                             <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price"><?php echo e($book->unit_price); ?>Đ</span>
                                             </div>
                                             <div class="price d-flex align-items-center">
                                                <h6><b><?php echo e($book->promotion_price); ?>Đ</b></h6>
                                             </div>
                                             <?php else: ?>
                                             <div class="price d-flex align-items-center">
                                                <h6><b><?php echo e($book->unit_price); ?>Đ</b></h6>
                                             </div>
                                             <?php endif; ?>
                                             <div class="iq-product-action">
                                                <a href="<?php echo e(route('addToCart',$book->id)); ?>"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <?php
                              $i++;
                           ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/product/index.blade.php ENDPATH**/ ?>