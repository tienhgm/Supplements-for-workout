<?php 
	include "Models/HomeDiscountProductsModel.php";
	class HomeDiscountProductsController extends HomeDiscountProductsModel{
		public function read(){
			//load view 
			include "Views/HomeDiscountProductsView.php";
		}
	}

 ?>