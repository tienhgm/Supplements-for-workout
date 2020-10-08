<?php 
	include "Models/ProductParametersModel.php";
	class ProductParametersController extends ProductParametersModel{
		public function read(){
			$product_id = isset($_GET["product_id"]) ? $_GET["product_id"]:0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->modelTotal($product_id)/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($product_id,$recordPerPage);
			//load view
			include "Views/ProductParametersView.php";
		}
		//edit ban ghi
		public function update(){
			$product_id = isset($_GET["product_id"]) ? $_GET["product_id"] : 0;
			//goi ham de lay du lieu truyen ra view
			$listRecord = $this->modelGetParameters();
			$action = "index.php?controller=productParameters&action=updatePost&product_id=$product_id";
			//goi view
			include "Views/ProductParametersCreateUpdateView.php";
		}
		//edit khi an nut submit
		public function updatePost(){
			$product_id = isset($_GET["product_id"]) ? $_GET["product_id"] : 0;
			//goi ham de update du lieu
			$this->modelUpdate($product_id);
			//di chuyen den trang danh sach cac ban ghi
			echo "<script>location.href='index.php?controller=productParameters&action=read&product_id=$product_id';</script>";
		}		
	}
 ?>