<?php 
	include "Models/HomeHotProductsModel.php";
	class HomeHotProductsController extends HomeHotProductsModel{
		public function read(){
			//load view 
			include "Views/HomeHotProductsView.php";
		}
	}

 ?>