<style>
.con{font-size: 18px; font-family: 'Arial'; margin-bottom: 5px;}
</style>
<div class="row">
	<div class="col-md-12">
		<div><h4>Tài khoản của tôi</h4>
			<br>
			<div class="con"><h4><?php echo $customer->name; ?></h4></div>
			<div class="con"><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: <span><?php echo $customer->phone; ?></span></div>
			<div class="con"><i class="fa fa-home" aria-hidden="true"></i> <?php echo $customer->address; ?></div>
			<div class="con"><i class="fa fa-address-book" aria-hidden="true"></i> <?php echo $customer->email; ?></div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12" style="padding: 0px 0px;">
		<div><h4>Các đơn hàng đã đặt</h4>
			<br>
			
				<table class="table table-bordered table-hover">
					<tr style="text-align: center;">
						<th style="width: 110px;">Tên sản phẩm</th>
						<th style="width: 100px;">Ngày</th>
						<th style="width: 80px;">Số lượng</th>
						<th style="width: 120px;">Giá trị</th>
						<th style="width: 100px;">Trạng thái</th>
					</tr>	
					<?php foreach($info as $rows): ?>
					<tr style="text-align: center;">
						<td><?php echo $rows->name; ?></td>
						<td>
							<?php 
	                            $date= Date_create($rows->date);
	                            echo Date_format($date, "d/m/Y");
	                        ?>
						</td>
						<td><?php echo $rows->quantity; ?></td>
						<td><?php echo $rows->price; ?></td>
						<td>
							<?php 
								if($rows->status==1){echo "Đã vận chuyển";}
								else{ echo "Chưa vận chuyển";}
							 ?> 	
						 </td>
						
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		
	</div>
</div>