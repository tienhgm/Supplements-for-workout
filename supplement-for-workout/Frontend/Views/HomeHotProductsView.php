<style>
		@media all and (max-width: 1366px){
			.col-md-2{display: block;}

		}
</style>

<?php $hotProduct = $this->modelHotProduct(); //Home Model?>
<?php foreach($hotProduct as $rows): ?>
<!-- sp -->
<div class="col-md-2" style="padding: 20px 7px;">
	<div class="box-product">
		<div class="tagtick">
			<div class="noibat">Nổi bật</div>
		</div>
		<div class="img-pr"><a href="products/detail/<?php echo Unicode::removeUnicode($rows->name);?>/<?php echo $rows->id;?>"><img src="../Assets/Upload/Products/<?php echo $rows->photo;?>" alt="" style="" ></a></div>
		<div class="caption">
			<div class="product"><a href="products/detail/<?php echo Unicode::removeUnicode($rows->name);?>/<?php echo $rows->id;?>"><?php echo $rows->name; ?></a></div>
			<div style="padding: 0px 30px;">
				<span style="text-decoration:line-through; font-size: 18px;"><?php echo number_format($rows->price);?>đ</span>
				<br>
				<span style="color: red;font-weight: bold;font-size: 18px;"><?php echo number_format($rows->price - ($rows->price*$rows->discount)/100);?></span><span> đ</span>
				<form class="add-to-cart"><a href="cart/<?php echo $rows->id;?>" class="button">ADD TO CART</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /sp -->
 <?php endforeach;?>
