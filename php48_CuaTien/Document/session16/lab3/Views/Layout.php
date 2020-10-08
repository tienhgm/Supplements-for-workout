<!DOCTYPE html>
<html>
<head>
	<title>Layout</title>
</head>
<body>
<style type="text/css">
	.wrapper{width: 1000px; margin:auto;}
	nav{margin-bottom: 30px;}
	nav ul{padding:0px; margin:0px; list-style: none;}
	nav ul li{display: inline;}
	nav ul li a{text-decoration: none; padding:15px;}
</style>	
<div class="wrapper">
	<nav>
		<ul>
			<li><a href="index.php?controller=Lop&action=danhSach">Danh sách lớp</a></li>
			<li><a href="index.php?controller=MonHoc&action=danhSach">Danh sách môn học</a></li>
		</ul>
	</nav>
	<div style="margin-top: 50px;">
		<?php 
			//load MVC dong truyen tu url
			//lay bien $controller truyen tu url
			$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
			//viet hoa chu dau tien cua $controller
			$controller = ucfirst($controller);
			//ten class controller
			$classController = "$controller"."Controller";
			//ghep chuoi de thanh file controller hoan chinh
			$fileController = "Controllers/$controller"."Controller.php";
			//load file controller vao day
			if(file_exists($fileController)){
				include $fileController;
				//lay bien action truyen tu url
				$action = isset($_GET["action"]) ? $_GET["action"] : "";
				//---
				//tao object cua class
				$obj = new $classController();//vd: $obj = new MonHoc()
				//goi den ham trong lop
				$obj->$action();
			}
			//---
		 ?>
	</div>
</div>
</body>
</html>