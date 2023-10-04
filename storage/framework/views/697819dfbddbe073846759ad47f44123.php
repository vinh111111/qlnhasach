
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
   <div class="iq-navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
         <div class="iq-menu-bt d-flex align-items-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="<?php echo e(route('getHomepage')); ?>" class="header-logo">
                  <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">Booksto</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="navbar-breadcrumb">
            <h5 class="mb-0">Trang danh mục</h5>
            <nav aria-label="breadcrumb">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('getHomepage')); ?>">Trang chủ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
               </ul>
            </nav>
         </div>
         <div class="iq-search-bar">
            <form action="<?php echo e(route('search')); ?>" class="searchbox" method="get">
               <?php echo csrf_field(); ?>
               <input type="text" class="text search-input" name="search" placeholder="Tìm kiếm sản phẩm..." value="<?php echo e(isset($search) ? $search : ''); ?>" />
               <button style="background-color:#ffffff;border:none;top: 3px;" class="search-link" type="submit"><i class="ri-search-line"></i></button>
            </form>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-list">
               <li class="nav-item nav-icon dropdown">
                  <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                     <i class="ri-shopping-cart-2-line"></i>
                     <span class="badge badge-danger count-cart rounded-circle"><?php if(Session::has('cart')): ?><?php echo e(Session('cart')->totalQty); ?>

                        <?php else: ?> 0 <?php endif; ?></span>
                  </a>
                  <div class="iq-sub-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 toggle-cart-info">
                           <div class="bg-primary p-3">
                              <h5 class="mb-0 text-white">Giỏ Hàng<small class="badge  badge-light float-right pt-1"><?php if(Session::has('cart')): ?><?php echo e(Session('cart')->totalQty); ?><?php else: ?> 0 <?php endif; ?></small></h5>
                           </div>
                           <?php if(isset($productCarts)): ?>
                              <?php $__currentLoopData = $productCarts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <a href="<?php echo e(route('delToCart',$product['item']->id)); ?>" class="iq-sub-card">
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="rounded" src="<?php echo e(asset('/HCI/image/books/'.$product['item']->image)); ?>" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 " style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;width: 80px;"><?php echo e($product['item']['name']); ?></h6>
                                       <p class="mb-0"><?php echo e($product['qty']); ?>*<?php echo e($product ['item']->promotion_price !=0? $product['item']-> promotion_price:$product['item']->unit_price); ?></p>
                                    </div>
                                    <div class="float-right font-size-24 text-danger">
                                       <i class="ri-close-fill"></i>
                                    </div>
                                 </div>
                              </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                           <div class="d-flex align-items-center text-center p-3">
                              <a class="btn btn-primary iq-sign-btn" href="<?php echo e(route('getCheckout')); ?>" role="button">Thanh Toán</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="line-height pt-3">
                  <?php if(Auth::check()): ?>
                     <?php
                        $tk = Auth::user();
                     ?>
                     <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                        <?php if($tk->image != "daidien.jpg"): ?>
                           <img src="<?php echo e(asset('/HCI/image/users/'.$tk->image)); ?>" class="img-fluid rounded-circle mr-3" alt="user">
                        <?php else: ?>
                           <img src="<?php echo e(asset('/HCI/images/booking/daidien.jpg')); ?>" class="img-fluid rounded-circle mr-3" alt="user">
                        <?php endif; ?>
                        <div class="caption">
                           <h6 class="mb-1 line-height"><?php echo e($tk->full_name); ?></h6>
                           <p class="mb-0 text-primary"></p>
                        </div>
                     </a>
                     <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                           <div class="iq-card-body p-0 ">
                              <div class="bg-primary p-3">
                                 <h5 class="mb-0 text-white line-height">Xin Chào <?php echo e($tk->full_name); ?></h5>
                              </div>
                              <?php if($tk->level === 1): ?>
                              <a href="<?php echo e(route('admin.getCategoryList')); ?>" class="iq-sub-card iq-bg-primary-hover">
                                 <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                       <i class="las la-home iq-arrow-left"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Admin</h6>
                                    </div>
                                 </div>
                              </a>
                              <?php endif; ?>
                              <a href="<?php echo e(route('admin.getMyprofile')); ?>" class="iq-sub-card iq-bg-primary-hover">
                                 <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                       <i class="ri-file-user-line"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Tài khoản của tôi</h6>
                                    </div>
                                 </div>
                              </a>
                              <div class="d-inline-block w-100 text-center p-3">
                                 <a class="bg-primary iq-sign-btn" href="<?php echo e(route('admin.getLogout')); ?>" role="button">Đăng xuất<i class="ri-login-box-line ml-2"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php else: ?>
                     <a href="<?php echo e(route('admin.getLogin')); ?>" class="search-toggle iq-waves-effect d-flex align-items-center">
                        <img src="<?php echo e(asset('/HCI/images/booking/daidien.jpg')); ?>" class="img-fluid rounded-circle mr-3" alt="user">
                        <div class="caption">
                           <h6 class="mb-1 line-height">Đăng nhập</h6>
                           <p class="mb-0 text-primary"></p>
                        </div>
                     </a>
                  <?php endif; ?>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</div>
<!-- TOP Nav Bar END -->
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <?php if(session('error')): ?>
               <br>
                  <div class="alert alert-danger">
                     <?php echo e(session('error')); ?>

                  </div>
               <br>
            <?php endif; ?>
            <div class="iq-card-transparent mb-0">
               <div class="d-block text-center">
                  <?php if(isset($type_book)): ?>
                     <h2 class="mb-3"><?php echo e($type_book[0]->name); ?></h2>
                  <?php endif; ?>
                  <?php if(isset($search)): ?>
                     <h2 class="mb-3"><?php echo e($search); ?></h2>
                  <?php endif; ?>
               </div>
            </div>
            <div class="iq-card">
               <div class="iq-card-body">
                  <div class="row">
                     <?php if(isset($books)): ?>
                        <?php
                           $i=1;
                           $ds=[];
                           if(isset($results))
                              $ds=$results;
                           else
                              $ds=$books;
                        ?>
                        <?php $__currentLoopData = $ds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="col-sm-6 col-md-4 col-lg-3">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                 <div class="iq-card-body p-0">
                                    <div class="d-flex align-items-center">
                                       <div class="col-6 p-0 position-relative image-overlap-shadow">
                                          <a href="javascript:void();"><img class="img-fluid rounded w-100" src="<?php echo e(asset('/HCI/image/books/'.$book->image)); ?>" alt=""></a>
                                          <div class="view-book">
                                             <a href="<?php echo e(route('getBookpage',$book->id)); ?>" class="btn btn-sm btn-white">xem sách</a>
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="mb-2">
                                             <h6 class="mb-1"><?php echo e($book->name); ?></h6>
                                             <p class="font-size-13 line-height mb-1"><?php echo e($book->Author->name); ?></p>
                                             <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="price d-flex align-items-center">
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
                                          </div>
                                          <div class="iq-product-action" style="display: flex;">
                                             <form method="GET" action="<?php echo e(route('addToCart', $book->id)); ?>">
                                                <?php echo csrf_field(); ?> <!-- Laravel CSRF token -->
                                                <button style="background-color: #fff;  border: none;  cursor: pointer;" type="submit"><i class="ri-shopping-cart-2-fill text-primary"></i></button>
                                             </form>
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
</div>
<!-- Wrapper END -->
<!-- Footer -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/product/category.blade.php ENDPATH**/ ?>