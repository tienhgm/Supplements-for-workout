<!-- khung tren -->
	<div class="container">
		<div class="row">
			<div class="col-lg-6" style="height:328px;border: 1px solid #ebebeb;"><img src="../Assets/Upload/Products/<?php echo $record->photo;?>" style="width: 300px; height: 300px;"></div>
			<div class="col-lg-6 sanphamchitiet">
				<div class="title-chitiet"><?php echo $record->name; ?></div>
				<p class="vendor"> Category:&nbsp; <span> <?php echo $this->modelGetCategory($record->category_id); ?> </span></p>
				<div class="content"><?php echo $record->description;?></div>
				<div style="font-weight: bold;font-size: 24px; margin-top: 10px;">
					<span>Giá:</span>
					<span style="color: red;"><?php echo number_format($record->price - ($record->price*$record->discount)/100); ?>đ</span>
					<span style="text-decoration: line-through;">&nbsp <?php echo number_format($record->price); ?>đ</span>
				</div>
				<br>
				
				<form class="buy" action="">
					<div style="margin-bottom: 2px;"></div>
					<!-- chon huong vi -->
					<!-- <label for="choose" style="font-weight: bold;font-size: 24px;">Chọn hương vị</label><br>
					<select name="choose" id="choose" class="form-control" style="width: 300px;">
						<option value="0">Chọn hương vị</option>
						<option value="0">Double rich chocolate</option>
						<option value="0">Vanilla ice cream</option>
					</select>
					<br> -->
					<!-- /chon huong vi -->
					<!-- add to cart -->

					<button class="addtocart"><a href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>">Thêm vào giỏ hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a></button>
					<style>
						.addtocart a{color: black;}
						.addtocart a:hover{transition: 0.6s;color: white;}
					</style>	
					<!-- /add to cart -->
				</form>
			</div>
		</div>
	</div>
	<!-- /khung tren -->
	<!-- khung duoi -->
	<div class="container" style="margin-top: 80px;">
		<div class="row info-chitiet">
			<!-- thong tin chi tiet -->
			<div class="col-lg-12 col-md-6">
				<div class="card">
					<div class="card-header title">Thông tin chi tiết</div>
					<div class="card-body">
						<?php echo $record->content;?>
					</div>
				</div>
			</div>
			<!-- /thong tin chi tiet -->
		</div>
	</div>
	<!-- /khung duoi -->
	<!-- rating -->

	<div class="col-md col-xs" style="margin-top: 15px;">
		<h4 style="padding-left: 10px;">Đánh giá</h4>

		
			<div class="star-rating">
	            <span><a href="index.php?controller=products&action=rating&star=1&id=<?php echo $record->id; ?>" class="fa fa-star-o" title="1"></a></span>
	            <span><a href="index.php?controller=products&action=rating&star=2&id=<?php echo $record->id; ?>" class="fa fa-star-o" title="2"></a></span>
	            <span><a href="index.php?controller=products&action=rating&star=3&id=<?php echo $record->id; ?>" class="fa fa-star-o" title="3"></a></span>
	            <span><a href="index.php?controller=products&action=rating&star=4&id=<?php echo $record->id; ?>" class="fa fa-star-o" title="4"></a></span>
	            <span><a href="index.php?controller=products&action=rating&star=5&id=<?php echo $record->id; ?>" class="fa fa-star-o" title="5"></a></span>
	        </div>
    	
		<table style="width: 100%;">
		<tr>
		<td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"></td>
		<td><span class="badge badge-primary"><?php echo $this->star1($record->id);?> vote</span></td>
		</tr>
		<tr>
		<td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
		<td><span class="badge badge-success"><?php echo $this->star2($record->id);?> vote</span></td>
		</tr>
		<tr>
		<td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
		<td><span class="badge badge-warning"><?php echo $this->star3($record->id);?> vote</span></td>
		</tr>
		<tr>
		<td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
		<td><span class="badge badge-info"><?php echo $this->star4($record->id);?> vote</span></td>
		</tr>
		<tr>
		<td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
		<td><span class="badge badge-danger"><?php echo $this->star5($record->id);?> vote</span></td>
		</tr>
		</table>
		<br>
	</div>
	<!-- /rating -->
	<div class="fb-comments" data-href="http://localhost/php48_cuatien" data-numposts="5" data-width="100%"></div>
