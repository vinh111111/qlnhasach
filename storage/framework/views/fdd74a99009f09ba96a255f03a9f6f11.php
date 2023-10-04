<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(isset($book)): ?>
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <?php if(session('error')): ?>
                  <br>
                     <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                     </div>
                  <br>
               <?php endif; ?>
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-header d-flex justify-content-between align-items-center">
                     <h4 class="card-title mb-0">Thông tin</h4>
                  </div>
                  <div class="iq-card-body pb-0">
                     <div class="description-contens align-items-top row">
                        <div class="col-md-6">
                           <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body p-0">
                                 <div class="row align-items-center">
                                    <div class="col-9">
                                       <ul  class="list-inline p-0 m-0  d-flex align-items-center">
                                          <li>
                                             <img src="<?php echo e(asset('/HCI/image/books/'.$book->image)); ?>" width="500" height="800" alt="">
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body p-0">
                                 <h3 class="mb-3"><?php echo e($book->name); ?></h3>
                                 <?php if($book->promotion_price > 0): ?>
                                    <div class="price d-flex align-items-center font-weight-500 mb-2">
                                       <span class="font-size-20 pr-2 old-price"><?php echo e($book->unit_price); ?> đ</span>
                                       <span class="font-size-24 text-dark"><?php echo e($book->promotion_price); ?> đ</span>
                                    </div>
                                 <?php else: ?>
                                    <div class="price d-flex align-items-center font-weight-500 mb-2">                                       
                                       <span class="font-size-24 text-dark"><?php echo e($book->unit_price); ?> đ</span>
                                    </div>
                                 <?php endif; ?>
                                 <div class="mb-3 d-block">
                                    <span class="font-size-20 text-warning">
                                       <i class="fa fa-star mr-1"></i>
                                       <i class="fa fa-star mr-1"></i>
                                       <i class="fa fa-star mr-1"></i>
                                       <i class="fa fa-star mr-1"></i>
                                       <i class="fa fa-star"></i>
                                    </span>
                                 </div>
                                 <span class="text-dark mb-4 pb-4 iq-border-bottom d-block"><?php echo e($book->description); ?></span>
                                 <div class="text-primary mb-4">Tác giả: <span class="text-body"><?php echo e($book->Author->name); ?></span></div>
                                 <form action="<?php echo e(route('addManyToCart',$book->id)); ?>" method="POST">
                                 <?php echo csrf_field(); ?>
                                    <div class="mb-4 d-flex align-items-center">
                                       <input type="number" name="qty" style="width: 100px; padding: 20px; border: 1px solid #ccc; font-size: 16px; text-align: center;" id="quantity" value="1" min="1" max="100">
                                    </div>
                                    <br>
                                    <div class="mb-4 d-flex align-items-center">
                                       <button class="btn btn-primary view-more mr-2">Thêm vào giỏ hàng</button>
                                    </div>
                                 </form>
                                 <div class="mb-3">
                                    <a href="#" class="text-body text-center"><span class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i class="ri-heart-fill"></i></span><span>Thêm vào danh sách yêu thích</span></a>
                                 </div>
                                 <div class="iq-social d-flex align-items-center">
                                    <h5 class="mr-2">Chia sẻ:</h5>
                                    <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                       </li>
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                       </li>
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                       </li>
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                       </li>
                                    </ul>
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
   </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/product/book-page.blade.php ENDPATH**/ ?>