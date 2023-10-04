<p>Họ và tên: <?php echo e($sentData['name']); ?></p>
<p>Email: <?php echo e($sentData['email']); ?></p>
<p>Số điện thoại: <?php echo e($sentData['phone']); ?></p>
<p>Thông tin đơn hàng</p>
<table style="border-collapse: collapse;border: 1px solid #ddd;">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá tiền</th>
            <th>Giá sau khi giảm</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i=1;
        ?>
        <?php $__currentLoopData = $sentData['bill']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($product['item']['name']); ?></td>
                <td><?php echo e($product['qty']); ?></td>
                <td><?php echo e($product['item']->unit_price); ?></td>
                <td><?php echo e($product['item']->promotion_price); ?></td>
            </tr>
            <?php
                $i++;
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: right;">Tổng tiền: <?php echo e($sentData['total']); ?></td>
        </tr>
    </tfoot>
</table>
<?php /**PATH C:\xampp\htdocs\qlnhasach\resources\views/product/checkout-send.blade.php ENDPATH**/ ?>