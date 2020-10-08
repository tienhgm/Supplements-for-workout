<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<meta charset="utf-8">
	<!-- ĐẶT LẠI ĐƯỜNG DẪN ROOT -->
  	<base href="http://localhost/php48/php48_CuaTien/Frontend/">
	<link rel="stylesheet" type="text/css" href="../Assets/Frontend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Assets/Frontend/css/star-rating.css">
  	<link rel="stylesheet" type="text/css" href="../Assets/Frontend/css/style.css">
	<link rel="stylesheet" href="../Assets/Frontend/icon_font/font-awesome/css/font-awesome.min.css">
	<script src="../Assets/Frontend/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="../Assets/Frontend/js/bootstrap.min.js"></script>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5f5e0359f0e7167d000fe258/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->


	
</head>
<body>
	<!-- comment facebook -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="myEoTi1q"></script>
	<!-- end comment facebook -->
	<?php include "Views/HeaderView.php"; ?>
	<!-- <div style="clear: both;"></div>  -->	
	<div style="margin-top: 60px;"></div>
	<div class="container">
		<div class="row">
			<!-- khung ben trai -->
			<div class="col-xs-12 col-md-3">
				<!-- danh muc -->
				<div class="card danhmuc">
					<div class="card-header title bg-secondary" style="color: white;">DANH MỤC</div>
				
					<div class="card-body content">
						<?php 
							//load MVC - danh muc
							include "Controllers/MenuCategoryController.php";
							$obj= new MenuCategoryController();
							$obj->read();

						 ?>
					</div>
				</div>
				<!-- end danh muc -->

				<div style="margin-top: 30px;"></div>
				<style>
					 .button-tim{color: white; text-align: center; text-decoration: none;display: inline-block;font-size: 16px;-webkit-transition-duration: 0.4s; transition-duration: 0.4s;cursor: pointer;margin: 4px 2px;padding: 10px 70px; border-radius: 2px;}
					 .button-tim1{background-color: white; color: black; border: 2px solid #6c757d;}
					 .button-tim1:hover{background-color: #6c757d;text-decoration: none;color: white;}
				</style>
				<!-- box search -->
		        <div class="card" style="margin-top:15px;">
		          <div class="card-header title bg-secondary" style="color: white; font-size: 20px;"> Tìm theo mức giá </div>
		          <div class="card-body">
		            <ul class="list-group" style="border:0px;">
		              <li class="list-group-item" style="border:0px; font-weight: bold;">Giá từ &nbsp;&nbsp;
		                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
		              </li>
		              <li class="list-group-item" style="border:0px;font-weight: bold;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
		              </li>
		              <li class="list-group-item" style="border:0px; text-align:center">
		                <input type="button" class="button-tim button-tim1" value="Tìm" onclick="location.href = 'index.php?controller=products&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
		              </li>
		            </ul>
		          </div>
		        </div>
		        <!-- end box search --> 

		        <!-- Hot News -->
		        <?php 
		        	include "Controllers/HotNewsController.php";
		        	$obj= new HotNewsController();
		        	$obj->read();

		         ?>
		        <!-- end Hot News -->
			</div>
			<!-- end khung ben trai -->

			<!-- khung ben phai - san pham -->
			<div class="col-xs-12 col-md-9 all-sanpham">
					
				<?php 
	            //load dong MVC
	            if(file_exists($fileController)){
	                include $fileController;
	                if(class_exists($classController)){
	                    $obj= new $classController();
	                    $obj->$action();
	                }
	            }
	            // include "Controllers/ProductsController.php";
	            // 	$obj = new ProductsController();
	            // 	$obj->category();
	         	?>

			</div>
			<!-- end khung ben phai - san pham -->
		</div>
	</div>
<?php include "Views/FooterView.php";  ?>

</body>

			
</html>