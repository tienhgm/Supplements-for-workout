<?php 
	//start session
	session_start();
	//load file Connection.php
	include "../Application/Connection.php";
		
	//load file Unicode
	include "../Application/Unicode.php";
	//---
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
	$action = isset($_GET["action"]) ? $_GET["action"] : "read";
	//ten class
	$classController = $controller."Controller";
	//ghep de thanh duong dan hoan thien cua file controller
	$fileController = "Controllers/".ucfirst($controller)."Controller.php";
	//ham ucfirst su dung de viet hoa ky tu dau tien. VD users thanh Users
	//VD: $fileController = "Controllers/UsersController.php";
    //---

    // neu khong co bien controller truyen len url thi load layout trang chu
    // neu co thi load layout trang trong
   if(isset($_GET["controller"]) == false){
		include "Views/LayoutTrangChu.php";
   }
   else if($_GET["controller"]=="account" && $_GET["action"]=="login"){
   		include "Views/LoginView.php";
   }
   else if($_GET["controller"]=="AboutUs"&& $_GET["action"]=="read"){
   		include "Views/AboutUsView.php";
   }
	else{
		include "Views/LayoutTrangTrong.php";
	}
 ?>