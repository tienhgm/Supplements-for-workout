<?php 
	include "Models/CartModel.php";
	class CartController extends CartModel{
		//them moi san pham vao gio hang
		public function add(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			if(isset($_SESSION["customerId"])){
				$this->cartAdd($id);
				// index.php?controller=cart&action=read
				echo "<script>location.href='cart';</script>";
			} else{
				echo "<script>window.alert('Đăng nhập để mua hàng');location.href='home';</script>";
			}
		}
		//hien thi cac san pham trong gio hang
		public function read(){
			//neu gio hang chua ton tai thi khoi tao no
			if(isset($_SESSION["cart"]) == false)
				$_SESSION["cart"] = array();
			
			include "Views/CartView.php";
		}
		//xoa san pham
		public function remove(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->cartDelete($id);
			echo "<script>location.href='cart';</script>";
		}
		//xoa toan bo san pham
		public function destroy(){
			$this->cartDestroy();
			echo "<script>location.href='cart';</script>";
		}
		//update san pham
		public function update(){
			foreach($_SESSION["cart"] as $product){
				$id = $product["id"];
				$number = $_POST["product_$id"];
				$this->cartUpdate($id,$number);
			}
			echo "<script>location.href='cart';</script>";
		}
		public function success(){
			include "Views/CartPre.php";
		}
		//thanh toan gio hang
		public function checkout(){
			$this->cartCheckOut();
			echo "<script>location.href='index.php?controller=cart&action=success';</script>";
		}

	}
 ?>