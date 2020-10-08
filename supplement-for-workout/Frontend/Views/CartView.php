<div>
    <form action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
        <table class="table table-cart">
        <thead>
            <tr style="color: #00afe8;">
            <th class="image">Ảnh sản phẩm</th>
            <th class="name">Tên sản phẩm</th>
            <th class="price">Giá bán lẻ</th>
            <th class="quantity">Số lượng</th>
            <th class="price">Thành tiền</th>
            <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION["cart"] as $product): ?>
            <tr>
            <td><img style="width: 200px; height: 200px;" src="../Assets/Upload/Products/<?php echo $product['photo']; ?>" class="img-responsive"/></td>
            <td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
            <td> <?php echo number_format($product['price']); ?>₫ </td>
            <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
            <td><p><b><?php echo number_format($product['number']*$product['price']); ?>₫</b></p></td>
            <td><a href="index.php?controller=cart&action=remove&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <?php if($this->cartTotal() > 0): ?>
        <tfoot>
            <tr>
            <td colspan="6">  
                <a href="index.php?controller=cart&action=destroy" class="button-dep button-dep2 pull-left" style="color: white;">Xóa toàn bộ</a> 
                <a href="index.php" class="button-dep button-dep2 pull-right black" style="color: white;">Tiếp tục mua hàng</a>
                <input type="submit" class="button-dep button-dep2 pull-right" value="Cập nhật"></td>
            </tr>
        </tfoot>
        <?php endif; ?>
        </table>
    </div>
    </form>
    <?php if($this->cartTotal() > 0): ?>
    <div class="total-cart"> 
        Tổng tiền thanh toán:
        <?php echo number_format($this->cartTotal()); ?> ₫
        <div style="margin-bottom: 20px;"></div>
        <a href="index.php?controller=cart&action=checkout" class="button-dep button-dep1">Thanh toán</a> 
    </div>
</div>
<?php endif; ?>