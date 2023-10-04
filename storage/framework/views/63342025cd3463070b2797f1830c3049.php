<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content9'); ?>
<!-- TOP Nav Bar END -->
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Sửa đơn hàng</h4>
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
               <?php if(isset($bill)): ?>
               <div class="iq-card-body">
                  <form action="<?php echo e(route('admin.postBillEdit',$bill[0]->id)); ?>" method="post" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('put'); ?>
                     <div class="form-group">
                        <label>Người đặt:</label>
                        <input type="text" class="form-control" name="full_name" value="<?php echo e(isset($bill[0]->user->full_name)?$bill[0]->user->full_name:''); ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Người nhận:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo e(isset($bill[0]->name)?$bill[0]->name:''); ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="number" class="form-control" name="phone_number" value="<?php echo e(isset($bill[0]->phone_number)?$bill[0]->phone_number:''); ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Địa chỉ:</label>
                        <input type="status" class="form-control" name="address" value="<?php echo e(isset($bill[0]->address)?$bill[0]->address:''); ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Loại Địa chỉ:</label>
                        <input type="status" class="form-control" name="address_type" value="<?php echo e(isset($bill[0]->address_type)?$bill[0]->address_type:''); ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Trạng thái:</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="status">
                           <option value="<?php echo e($bill[0]->status); ?>"><?php echo e($bill[0]->status); ?></option>
                           <?php if($bill[0]->status == "đơn hàng mới"): ?>
                           <option value="đang giao hàng">Đang giao hàng</option>
                           <option value="đã giao hàng">Đã giao hàng</option>
                           <option value="đơn hàng đã hủy">Đơn hàng đã hủy</option>
                           <?php elseif($bill[0]->status == "đang giao hàng"): ?>
                           <option value="đơn hàng mới">Đơn hàng mới</option>
                           <option value="đã giao hàng">Đã giao hàng</option>
                           <option value="đơn hàng đã hủy">Đơn hàng đã hủy</option>
                           <?php elseif($bill[0]->status == "đã giao hàng"): ?>
                           <option value="đơn hàng mới">Đơn hàng mới</option>
                           <option value="đang giao hàng">Đang giao hàng</option>
                           <option value="đơn hàng đã hủy">Đơn hàng đã hủy</option>
                           <?php else: ?>
                           <option value="đơn hàng mới">Đơn hàng mới</option>
                           <option value="đang giao hàng">Đang giao hàng</option>
                           <option value="đã giao hàng">Đã giao hàng</option>
                           <?php endif; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Tổng tiền:</label>
                        <input type="number" class="form-control" name="total" value="<?php echo e(isset($bill[0]->total)?$bill[0]->total:''); ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Phương thức thanh toán:</label>
                        <input type="text" class="form-control" name="payment" value="<?php echo e(isset($bill[0]->payment)?$bill[0]->payment:''); ?>" disabled>
                     </div>
                     <table class="data-tables table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th style="width: 10%;">STT</th>
                              <th style="width: 40%;">Tên sách</th>
                              <th style="width: 20%;">Số lượng</th>
                              <th style="width: 15%;">Giá</th>
                              <th style="width: 15%;">Hình ảnh</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if(isset($bill_details)): ?>
                              <?php
                                 $i=1;
                                 $ds=[];
                                 if(isset($results))
                                    $ds=$results;
                                 else
                                    $ds=$bill_details;
                              ?>
                           <?php $__currentLoopData = $ds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <td><?php echo e($i); ?></td>
                                 <td><?php echo e($bill_detail->book->name); ?></td>
                                 <td><?php echo e($bill_detail->quantity); ?></td>
                                 <td><?php echo e($bill_detail->unit_price); ?> Đ</td>
                                 <td>
                                    <img src="<?php echo e(asset('/HCI/image/books/'.$bill_detail->book->image)); ?>" class="img-fluid avatar-50 rounded" alt="author-profile">
                                 </td>
                              </tr>
                                 <?php
                                    $i=$i+1;
                                 ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </tbody>
                     </table>
                     <button type="submit" class="btn btn-primary">Gửi</button>
                     <a href="<?php echo e(route('admin.BillList')); ?>" class="btn btn-danger">
                        <font color="white">Trở lại</font>
                     </a>
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
<?php echo $__env->make('admin.bills.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/admin/bills/admin-edit-bill.blade.php ENDPATH**/ ?>