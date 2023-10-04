

<?php $__env->startSection('css'); ?>
    <!-- Đặt các tệp CSS tại đây -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Nội dung trang -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-body p-0">
                            <div class="iq-edit-list">
                                <ul class="iq-edit-profile d-flex nav nav-pills">
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                            Tất cả
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            Đang chuẩn bị hàng
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                            Đang giao hàng
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                            Đã nhận hàng
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-edit-list-data">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Tất cả đơn hàng</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <?php if(isset($bill)): ?>
                                        <?php if(count($bill) > 0): ?>
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $i=1;
                                                    ?>
                                                    <?php $__currentLoopData = $bill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i); ?></td>
                                                            <td><?php echo e($order->user->full_name); ?></td>
                                                            <td><?php echo e($order->name); ?></td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order->phone_number); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order->address); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order->address_type); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order->status); ?></p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            $i++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        <?php else: ?>
                                            <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="<?php echo e(route('getHomepage')); ?>">tại đây</a>.</p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Đang chuẩn bị hàng</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <?php if(isset($bill1)): ?>
                                        <?php if(count($bill1) > 0): ?>
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $i1=1;
                                                    ?>
                                                    <?php $__currentLoopData = $bill1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i1); ?></td>
                                                            <td><?php echo e($order1->user->full_name); ?></td>
                                                            <td><?php echo e($order1->name); ?></td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order1->phone_number); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order1->address); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order1->address_type); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order1->status); ?></p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            $i1++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        <?php else: ?>
                                        <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="<?php echo e(route('getHomepage')); ?>">tại đây</a>.</p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Đang giao hàng</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <?php if(isset($bill2)): ?>
                                        <?php if(count($bill2) > 0): ?>
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $i2=1;
                                                    ?>
                                                    <?php $__currentLoopData = $bill2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i2); ?></td>
                                                            <td><?php echo e($order2->user->full_name); ?></td>
                                                            <td><?php echo e($order2->name); ?></td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order2->phone_number); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order2->address); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order2->address_type); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order2->status); ?></p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            $i2++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        <?php else: ?>
                                        <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="<?php echo e(route('getHomepage')); ?>">tại đây</a>.</p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Đã giao thành công</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <?php if(isset($bill3)): ?>
                                        <?php if(count($bill3) > 0): ?>
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $i3=1;
                                                    ?>
                                                    <?php $__currentLoopData = $bill3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i3); ?></td>
                                                            <td><?php echo e($order3->user->full_name); ?></td>
                                                            <td><?php echo e($order3->name); ?></td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order3->phone_number); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order3->address); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order3->address_type); ?></p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0"><?php echo e($order3->status); ?></p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            $i3++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        <?php else: ?>
                                        <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="<?php echo e(route('getHomepage')); ?>">tại đây</a>.</p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/product/mybill.blade.php ENDPATH**/ ?>