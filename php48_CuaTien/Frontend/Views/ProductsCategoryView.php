<div class="tabs-container">
	<div class="row" style="margin-top: 10px;">
		<div class="head-tabs head-tab1 col-lg-3">
        	<h2><?php echo $this->modelGetCategory($category_id); ?></h2>
      	</div>
      	<script>
      		function smartSearch(){
      			//hien thi
                document.getElementById("box-smart-search").setAttribute("style","display:block;");
                //-----
                    //lay gia tri cua id=key
                    var key= document.getElementById("key").value;
                    //clear cac gia tri trong the ul truoc khi append
                    $('#box-smart-search ul').empty();
                //----
                //dua JQUERY vao trang cua minh
                $.ajax({
                    url: "smartSearch.php?key="+key,
                    success: function( result ) {
                        
                        $('#box-smart-search ul').append(result);
                    }
                });
                //-----
      		}
      		function stopSmartSearch(){
                // document.getElementById("box-smart-search").setAttribute("style","display:none;");
            }

      	</script>
      	<div class="col-lg-3 pull-right text-right">
            <select class="form-control" onchange="location.href ='index.php?controller=products&action=categories&id=<?php echo $category_id?>&sort='+this.value;">
              <option value="0">Sắp xếp</option>
              <option value="priceAsc">Giá tăng dần</option>
              <option value="priceDesc">Giá giảm dần</option>
              <option value="nameAsc">Sắp xếp A-Z</option>
              <option value="nameDesc">Sắp xếp Z-A</option>
            </select>
		</div>
			<!-- search -->
		<div class="box-search">
			<form action="" id="search">
				<input type="text" autocomplete="off" onkeyup="smartSearch();" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control" style="width: 300px;">
				<button><i class="fa fa-angle-double-down" aria-hidden="true" style="color: white;" disabled></i></button>
			</form>
			<div id="box-smart-search" onmouseout="stopSmartSearch();">
				<ul></ul>
			</div>
			<style>
				.box-search{position: relative;}
				#box-smart-search{position: absolute; z-index: 10;width: 300px; height: 500px; overflow: hidden; 
					background:white; display:none;}
	            #box-smart-search ul{padding: 0; margin:0; list-style: none; }
	            #box-smart-search img{width:70px;}
	            #box-smart-search li{border-bottom: 1px solid #dddddd;}
			</style>
		</div>
		<!-- /search -->

	</div>
	<!-- /end row -->
</div>
<br>
<div class="tabs-content row">
	<?php foreach($listRecord as $rows): ?>
	<div class="col-xs-6 col-md-4 hang">
		
			<!-- sp1 -->
			<div class="sp">
				<div class="can-sanpham">
					<div style="margin: 0 18px;">
						<a href="products/detail/<?php echo Unicode::removeUnicode($rows->name);?>/<?php echo $rows->id;?>"><img src="../Assets/Upload/Products/<?php echo $rows->photo; ?>" style="width: 160px;height:160px;"></a>
					</div>
					<div style="margin: 0 42px;"><a href="#"><?php echo $this->modelGetCategory($category_id); ?></a>
					<div class="chitiet" style="font-weight: bold;"><a href="products/detail/<?php echo Unicode::removeUnicode($rows->name);?>/<?php echo $rows->id;?>"><?php echo $rows->name; ?></a></div>
					<div>
						
						
						<span class="giacu"><?php echo number_format($rows->price); ?></span><span>đ</span>
						<br>
						<span class="cost" style="font-weight: bold;"><?php echo number_format($rows->price - ($rows->price*$rows->discount)/100); ?></span><span>đ</span>
					</div>
				</div>
				
				<div class="mask"><a href="cart/<?php echo $rows->id; ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>	
				</div>
			</div>
			<!-- /sp1 -->
			
	</div>
	<?php endforeach; ?>
	
		<div class="sotrang">
			<ul class="pagination" style="margin-left: -225px;">
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a class="page-link" href="index.php?controller=products&action=categories&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>" style="color: black;"><?php echo $i;?></a></li>
                <?php endfor; ?>
			</ul>
		</div>
</div>
