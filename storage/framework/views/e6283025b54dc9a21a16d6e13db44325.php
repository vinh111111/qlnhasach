
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="<?php echo e(route('getHomepage')); ?>" class="header-logo">
                  <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">NHÀ SÁCH SƠN TRÀ</span>
                  </div>
               </a>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li><a href="<?php echo e(route('admin.getCategoryList')); ?>"><i class="ri-record-circle-line"></i>Danh Mục Sách</a></li>
                     <li><a href="<?php echo e(route('admin.getAuthorList')); ?>"><i class="ri-record-circle-line"></i>Tác Giả</a></li>
                     <li><a href="<?php echo e(route('admin.getSupplierList')); ?>"><i class="ri-record-circle-line"></i>Nhà cung cấp</a></li>
                     <li><a href="<?php echo e(route('admin.getBookList')); ?>"><i class="ri-record-circle-line"></i>Sách</a></li>
                     <li><a href="<?php echo e(route('admin.getBannerList')); ?>"><i class="ri-record-circle-line"></i>Banner</a></li>
                     <li><a href="<?php echo e(route('admin.getWarehouseList')); ?>"><i class="ri-record-circle-line"></i>Kho hàng</a></li>
                     <li><a href="<?php echo e(route('admin.getImportproductList')); ?>"><i class="ri-record-circle-line"></i>Nhập hàng</a></li>
                     <li><a href="<?php echo e(route('admin.ContactList')); ?>"><i class="ri-record-circle-line"></i>Liên hệ</a></li>
                     <li><a href="<?php echo e(route('admin.BillList')); ?>"><i class="ri-record-circle-line"></i>Đơn hàng</a></li>
                     <li><a href="<?php echo e(route('admin.getUserList')); ?>"><i class="ri-record-circle-line"></i>Người dùng</a></li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                  </div>
                  <div class="navbar-breadcrumb">
                     <h5 class="mb-0">Kho hàng</h5>
                     <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="">Admin</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Kho hàng</li>
                        </ul>
                     </nav>
                  </div>
                  <div class="iq-search-bar" >
                     
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
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
                                                   <h6 class="mb-0 " style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;width: 80px;" ><?php echo e($product['item']['name']); ?></h6>
                                                   <p class="mb-0"><?php echo e($product['qty']); ?>*<?php echo e($product ['item']->promotion_price !=0? $product['item']-> promotion_price:$product['item']->unit_price); ?></p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger" >
                                                   <i class="ri-close-fill"></i>
                                                </div>
                                             </div>
                                          </a>        
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							               <?php endif; ?>                            
                                    <div class="d-flex align-items-center text-center p-3">
                                       <a class="btn btn-primary iq-sign-btn" href="checkout.html" role="button">Thanh Toán</a>
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
         </div><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/warehouses/layout/header.blade.php ENDPATH**/ ?>